<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor  
 * @version : 1.1
 * @since : 15 November 2016
 */
class Berita extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model');
        $this->isLoggedIn();   
    }
  
    function index(){
       
        $this->global['pageTitle'] = 'Data Berita';
         $data['list'] = $this->berita_model->get_berita();
         $this->loadViews("berita/list", $this->global, $data , NULL);
    }

    function input(){
         $this->global['pageTitle'] = 'Input Data Berita';
         $this->loadViews("berita/edit", $this->global, NULL , NULL);
    }

    function simpan(){
        $this->berita_model->save();
        redirect('berita');
    }

    function detail($no_berita=NULL){
       
        $this->global['pageTitle'] = 'Detail Berita';
        $data['berita'] = $this->berita_model->get_by_no_berita($no_berita);
        $this->loadViews("berita/detail", $this->global, $data , NULL);
    }
    function komentar($no_berita=NULL){
       
        $this->global['pageTitle'] = 'Detail Berita';
       
        $this->loadViews("berita/komentar", $this->global, NULL , NULL);
    }
    function edit($no_berita=NULL){
       
        $this->global['pageTitle'] = 'Ubah Berita';
        $data['berita'] = $this->berita_model->get_by_no_berita($no_berita);
        $this->loadViews("berita/edit", $this->global, $data , NULL);
    }
  
    function delete($no_berita = NULL){
        $this->global['pageTitle'] = 'Hapus Berita';
        $this->db->where('no_berita', $no_berita);
        $this->db->delete('berita');
        redirect('berita') ;
    }
    

   
} 
?>