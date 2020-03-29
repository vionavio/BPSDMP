<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor  
 * @version : 1.1
 * @since : 15 November 2016
 */
class Majalahgagasan extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('majalahgagasan_model');
        $this->isLoggedIn();   
    } 
  
    function index(){
       
        $this->global['pageTitle'] = 'Data majalahgagasan';
         $data['list'] = $this->majalahgagasan_model->get_majalahgagasan();
         $this->loadViews("majalahgagasan/list", $this->global, $data , NULL);
    }

    function input(){
         $this->global['pageTitle'] = 'Input Data majalahgagasan';
         $this->loadViews("majalahgagasan/edit", $this->global, NULL , NULL);
    }

    function simpan(){
        $this->majalahgagasan_model->save();
        redirect('majalahgagasan');
    }

    function detail($id_mg=NULL){
       
        $this->global['pageTitle'] = 'Detail Majalah Gagasan';
        $data['majalahgagasan'] = $this->majalahgagasan_model->get_by_id_mg($id_mg);
        $this->loadViews("majalahgagasan/detail", $this->global, $data , NULL);
    }
    function komentar($id_mg=NULL){
       
        $this->global['pageTitle'] = 'Detail Majalah Gagasan';
       
        $this->loadViews("majalahgagasan/komentar", $this->global, NULL , NULL);
    }
    function edit($id_mg=NULL){
       
        $this->global['pageTitle'] = 'Ubah Majalah Gagasan';
        $data['majalahgagasan'] = $this->majalahgagasan_model->get_by_id_mg($id_mg);
        $this->loadViews("majalahgagasan/edit", $this->global, $data , NULL);
    }
  
    function delete($id_mg = NULL){
        $this->global['pageTitle'] = 'Hapus Majalah Gagasan';
        $this->db->where('id_mg', $id_mg);
        $this->db->delete('majalahgagasan');
        redirect('majalahgagasan') ;
    }
    

   
} 
?>