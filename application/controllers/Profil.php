<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor  
 * @version : 1.1
 * @since : 15 November 2016
 */
class Profil extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('profil_model');
        $this->isLoggedIn();   
    }
  
    function index(){
       
        $this->global['pageTitle'] = 'Data Profil BPPKI';
         $data['list'] = $this->profil_model->get_profil();
         $this->loadViews("profil/list", $this->global, $data , NULL);
    }

    function input(){
         $this->global['pageTitle'] = 'Input Data Profil';
         $this->loadViews("profil/edit", $this->global, NULL , NULL);
    }

    function simpan(){
        $this->profil_model->save();
        redirect('Profil');
    }
    function edit($id=NULL){
       
        $this->global['pageTitle'] = 'Ubah profil';
        $data['profil'] = $this->profil_model->get_by_id($id);
        $this->loadViews("profil/edit", $this->global, $data , NULL);
    }
  
} 
?>