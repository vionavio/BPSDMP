<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Galeri extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('galeri_model');
        $this->isLoggedIn();   
    }
  
    function index(){
       
        $this->global['pageTitle'] = 'Data Galeri';
         $data['list'] = $this->galeri_model->get_album();
         $this->loadViews("galeri/list", $this->global, $data , NULL);
    }

     function detail2($id_album=NULL){
       
        $this->global['pageTitle'] = 'Data Galeri';
        $data['list2'] = $this->galeri_model->get_by_id_album($id_album);
         $this->loadViews("galeri/list2", $this->global, $data , NULL);
    }

    function input(){
         $this->global['pageTitle'] = 'Input Data galeri';
         $data['album'] = $this->galeri_model->get_album();
         $this->loadViews("galeri/edit", $this->global, $data , NULL);
    }

    function simpan(){
        $this->galeri_model->save();
        redirect('galeri');
    }

    function simpan2(){
        $this->galeri_model->save2();
        redirect('galeri');
    }

    
    function edit($id_foto=NULL){
       
        $this->global['pageTitle'] = 'Ubah galeri';
        $data['galeri'] = $this->galeri_model->get_by_id_foto($id_foto);
        $data['album'] = $this->galeri_model->get_album();
        $this->loadViews("galeri/edit", $this->global, $data , NULL);
    }
    function edit2($id_foto=NULL){
       
        $this->global['pageTitle'] = 'Ubah galeri';
        $data['album'] = $this->galeri_model->get_album();
        $data['galeri'] = $this->galeri_model->get_by_id_foto($id_foto);
        
        $this->loadViews("galeri/edit2", $this->global, $data , NULL);
    }
    function edit3($id_album=NULL){
       
        $this->global['pageTitle'] = 'Ubah galeri';
        $data['edit3'] = $this->galeri_model->get_by_album($id_album);
        $this->loadViews("galeri/edit3", $this->global, $data , NULL);
    }
  
    function delete($id_foto = NULL){
        $this->global['pageTitle'] = 'Hapus galeri';
        $this->db->where('id_foto', $id_foto);
        $this->db->delete('galeri');
        redirect('galeri') ;
    }
    function delete2($id_album = NULL){
        $this->global['pageTitle'] = 'Hapus album';
        $this->db->where('id_album', $id_album);
        $this->db->delete('album');
        redirect('galeri') ;
    }
    

   

   
} 
?>

