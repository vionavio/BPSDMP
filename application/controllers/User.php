<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'BDSMP : Yogyakarta';
        
        $this->loadViews("dashboard", $this->global, NULL , NULL);
        
    }
    
    /**
     * This function is used to load the user list
     */
    function userListing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');
        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->userListingCount($searchText);

			$returns = $this->paginationCompress ( "userListing/", $count, 5 );
            
            $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'CodeInsect : User Listing';
            
            $this->loadViews("users", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNew()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');
            $data['roles'] = $this->user_model->getUserRoles();
            
            $this->global['pageTitle'] = 'CodeInsect : Add New User';

            $this->loadViews("addNew", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to check whether email already exist or not
     */
    function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $email = $this->input->post("email");

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ echo("true"); }
        else { echo("false"); }
    }
    
    /**
     * This function is used to add new user to the system
     */
    function addNewUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean|max_length[128]');
            $this->form_validation->set_rules('password','Password','required|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]|xss_clean');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
                $name = ucwords(strtolower($this->input->post('fname')));
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->input->post('mobile');
                
                $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId, 'name'=> $name,
                                    'mobile'=>$mobile, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewUser($userInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New User created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User creation failed');
                }
                
                redirect('addNew');
            }
        }
    }

    
    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editOld($userId = NULL)
    {
        if($this->isAdmin() == TRUE || $userId == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($userId == null)
            {
                redirect('userListing');
            }
            
            $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getUserInfo($userId);
            
            $this->global['pageTitle'] = 'CodeInsect : Edit User';
            
            $this->loadViews("editOld", $this->global, $data, NULL);
        }
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $userId = $this->input->post('userId');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean|max_length[128]');
            $this->form_validation->set_rules('password','Password','matches[cpassword]|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]|xss_clean');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($userId);
            }
            else
            {
                $name = ucwords(strtolower($this->input->post('fname')));
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->input->post('mobile');
                
                $userInfo = array();
                
                if(empty($password))
                {
                    $userInfo = array('email'=>$email, 'roleId'=>$roleId, 'name'=>$name,
                                    'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                else
                {
                    $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId,
                        'name'=>ucwords($name), 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 
                        'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                
                $result = $this->user_model->editUser($userInfo, $userId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }
                
                redirect('userListing');
            }
        }
    }


    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $userId = $this->input->post('userId');
            $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteUser($userId, $userInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    
    /**
     * This function is used to load the change password screen
     */
    function loadChangePass()
    {
        $this->global['pageTitle'] = 'CodeInsect : Change Password';
        
        $this->loadViews("changePassword", $this->global, NULL, NULL);
    }
    
    
    /**
     * This function is used to change the password of the user
     */
    function changePassword()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');
        $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->loadChangePass();
        }
        else
        {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');
            
            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);
            
            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password not correct');
                redirect('loadChangePass');
            }
            else
            {
                $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$this->vendorId,
                                'updatedDtm'=>date('Y-m-d H:i:s'));
                
                $result = $this->user_model->changePassword($this->vendorId, $usersData);
                
                if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }
                else { $this->session->set_flashdata('error', 'Password updation failed'); }
                
                redirect('loadChangePass');
            }
        }
    }
     function pageNotFound()
    {
        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
    // function Input_berita(){
    //      $this->global['pageTitle'] = 'Input Data Berita';
    //      $this->loadViews("InputBerita", $this->global, NULL , NULL);
    // }
    // function Input_galeri(){
    //      $this->global['pageTitle'] = 'Input Foto';
    //      $this->loadViews("InputGaleri", $this->global, NULL , NULL);
    // }
    // function Input_Simpan_Berita(){
    //      $data = array(
    //         'no_berita' => $_POST['no_berita'],
    //         'username' => $_POST['username'],
    //         'jam_berita' => $_POST['jam_berita'],
    //         'hari' => $_POST['hari'],
    //         'tgl_berita' => $_POST['tgl_berita'], 
    //         'judul_berita' => $_POST['judul_berita'],
    //         'isi_berita' => $_POST['isi_berita'],
    //         'url' => $file_path,
    //         'type' => $file_type
    //          );
    //      $file_tmp = $_FILES['gambar']['tmp_name'];
    //      $file_type= $_FILES['gambar']['type'];
    //      $file_error = $_FILES['gambar']['error'];
    //      $file_size= $_FILES['gambar']['size'];
    //      $file_path = "assets/images/gambar/".$POST['no_berita'].".jpg";
         
    //      if ($file_type == "image/jpeg"){
    //          if ($file_size > 0 and $file_error == 0){
    //              move_uploaded_file($file_tmp, "assets/images/gambar/".$_POST['no_berita'].".jpg");
    //          }
    //      }
    //    // $this->db->insert('berita',$data);
    //      $this->user_model->uploaddata($data,$file_path,$file_type);
    //     redirect('InputBerita');
    // }
    // function Input_Simpan_Galeri(){
    //      $data = array(
    //         'id_foto' => $_POST['id_foto'],
    //         'jam' => $_POST['jam'],
    //         'tanggal' => $_POST['tanggal'],
    //         'title' => $_POST['title'], 
    //         'url' => $file_path,
    //         'type' => $file_type
    //          );
    //      $file_tmp = $_FILES['galeri']['tmp_name'];
    //      $file_type= $_FILES['galeri']['type'];
    //      $file_error = $_FILES['galeri']['error'];
    //      $file_size= $_FILES['galeri']['size'];
    //      $file_path = "assets/images/galeri/".$POST['id_foto'].".jpg";
         
    //      if ($file_type == "image/jpeg"){
    //          if ($file_size > 0 and $file_error == 0){
    //              move_uploaded_file($file_tmp, "assets/images/galeri/".$_POST['id_foto'].".jpg");
    //          }
    //      }
    //    // $this->db->insert('berita',$data);
    //      $this->user_model->uploadgaleri($data,$file_path,$file_type);
    //     redirect('InputGaleri');
    // }
    // function Input_pengumuman(){
    //      $this->global['pageTitle'] = 'Input Pengumuman';
    //      $this->loadViews("InputPengumuman", $this->global, NULL , NULL);
    // }
    // function Lihat_Data_berita(){
       
    //     $this->global['pageTitle'] = 'Data Berita';
    //      $data['berita'] = $this->user_model->Data_Berita();
    //      $this->loadViews("LihatDataBerita", $this->global, $data , NULL);
    // }
    // function Lihat_Detail_berita($no_berita=NULL){
       
    //     $this->global['pageTitle'] = 'Detail Berita';
    //     $this->db->where('no_berita', $no_berita);
    //     $data['berita'] = $this->user_model->Data_Berita();
    //     $this->loadViews("DetailBerita", $this->global, $data , NULL);
    // }
    // function Edit_berita($no_berita=NULL){
       
    //     $this->global['pageTitle'] = 'Ubah Berita';
    //     $this->db->where('no_berita', $no_berita);
    //     $data['berita'] = $this->user_model->Data_Berita();
    //     $this->loadViews("EditBerita", $this->global, $data , NULL);
    // }
    // function Edit_karyawan($NIP=NULL){
       
    //     $this->global['pageTitle'] = 'Ubah Data Pegawai';
    //     $this->db->where('NIP', $NIP);
    //     $data['pgw_identitas'] = $this->user_model->Data_Karyawan();
    //     $this->loadViews("EditKaryawan", $this->global, $data , NULL);
    // }
    // function Edit_galeri($id_foto=NULL){
       
    //     $this->global['pageTitle'] = 'Ubah Foto';
    //     $this->db->where('id_foto', $id_foto);
    //     $foto['galeri'] = $this->user_model->Data_Galeri();
    //     $this->loadViews("EditGaleri", $this->global, $foto , NULL);
    // }
    // function Delete_berita($no_berita = NULL){
    //     $this->global['pageTitle'] = 'Hapus Berita';
    //     $this->db->where('no_berita', $no_berita);
    //     $this->db->delete('berita');
    //     redirect('user/Lihat_Data_berita') ;
    // }
    //  function Delete_galeri($id_foto = NULL){
    //     $this->global['pageTitle'] = 'Hapus Foto';
    //     $this->db->where('id_foto', $id_foto);
    //     $this->db->delete('galeri');
    //     redirect('user/Lihat_Data_galeri') ;
    // }
    //  function Delete_karyawan($NIP = NULL){
    //     $this->global['pageTitle'] = 'Hapus Karyawan';
    //     $this->db->where('NIP', $NIP);
    //     $this->db->delete('pgw_identitas');
    //     redirect('user/Lihat_Data_Karyawan') ;
    // }
    //  function Lihat_Data_Karyawan(){
       
    //     $this->global['pageTitle'] = 'Data Karyawan';
    //      $karyawan1['pgw_identitas'] = $this->user_model->Data_Karyawan();
    //      $this->loadViews("LihatDataKaryawan", $this->global, $karyawan1 , NULL);
    // }
    // function Lihat_Data_Galeri(){
       
    //     $this->global['pageTitle'] = 'Data Gambar';
    //      $foto['galeri'] = $this->user_model->Data_Galeri();
    //      $this->loadViews("LihatDataGaleri", $this->global, $foto , NULL);
    // }
    // function Input_karyawan(){
    //      $this->global['pageTitle'] = 'Input Data Kepegawaian';
    //      $this->loadViews("InputKaryawan", $this->global, NULL , NULL);
    // }
    // function Input_Simpan_Karyawan(){
    //      $data = array(
    //         'NIP' => $this->input->post('NIP'),
    //         'nama' => $this->input->post('nama'),
    //         'gol_ruang' => $this->input->post('gol_ruang'),
    //         'tmt' => $this->input->post('tmt'),
    //         'jbt_nama' => $this->input->post('jbt_nama'),
    //         'jbt_tmt' => $this->input->post('jbt_tmt'),
    //         'masker_th' => $this->input->post('masker_th'),
    //         'masker_bln' => $this->input->post('masker_bln'),
    //         'latjab_nama' => $this->input->post('latjab_nama'),
    //         'latjab_th' => $this->input->post('latjab_th'),
    //         'latjab_jumlah' => $this->input->post('latjab_jumlah'),
    //         'pendidikan_nama' => $this->input->post('pendidikan_nama'),
    //         'pendidikan_thlulus' => $this->input->post('pendidikan_thlulus'),
    //         'pend_tingkatijazah' => $this->input->post('pend_tingkatijazah'),
    //         'tempat_lahir' => $this->input->post('tempat_lahir'),
    //         'tanggal_lahir' => $this->input->post('tanggal_lahir'),
    //         'agama' => $this->input->post('agama'),
    //         'jenis_kelamin' => $this->input->post('jenis_kelamin'),
    //         'tmt_capeg' => $this->input->post('tmt_capeg'),
    //         'Keterangan' => $this->input->post('Keterangan')
            
    //          );
    //     $this->db->insert('pgw_identitas',$data);
    //     redirect('InputKaryawan');
    // }
   
} 
?>