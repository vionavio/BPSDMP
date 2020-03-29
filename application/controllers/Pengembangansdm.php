<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor  
 * @version : 1.1
 * @since : 15 November 2016
 */
class Pengembangansdm extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengembangansdm_model');
        $this->isLoggedIn();   
    }
  
    function index(){
       
        $this->global['pageTitle'] = 'Data Pengembangan SDM';
         $data['list'] = $this->pengembangansdm_model->get_pengembangansdm();
         $this->loadViews("pengembangansdm/list", $this->global, $data , NULL);
    }

    function input(){
         $this->global['pageTitle'] = 'Input Data Pengembangan SDM';
         $this->loadViews("pengembangansdm/edit", $this->global, NULL , NULL);
    }

    function simpan(){
        $this->pengembangansdm_model->save();
        redirect('pengembangansdm');
    }
    
    function edit($id_sdm=NULL){
       
        $this->global['pageTitle'] = 'Ubah Pengembangan SDM';
        $data['pengembangansdm'] = $this->pengembangansdm_model->get_by_id_sdm($id_sdm);
        $this->loadViews("pengembangansdm/edit", $this->global, $data , NULL);
    }
  
    function delete($id_sdm = NULL){
        $this->global['pageTitle'] = 'Hapus Pengembangan SDM';
        $this->db->where('id_sdm', $id_sdm);
        $this->db->delete('pengembangansdm');
        redirect('pengembangansdm') ;
    }
    function detail($id_sdm=NULL){
       
        $this->global['pageTitle'] = 'Detail Pengembangan SDM';
        $data['pengembangansdm'] = $this->pengembangansdm_model->get_by_id_sdm($id_sdm);
        $this->loadViews("pengembangansdm/detail", $this->global, $data , NULL);
    }
    

   
} 
?>