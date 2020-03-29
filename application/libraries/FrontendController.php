<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' ); 



class FrontendController extends CI_Controller {
    protected $global = array ();

    var $title = '';
    function loadViews($viewName = "", $data = NULL)
    {

    	$data_header['page_title'] = $this->title;

        $this->load->view('frontend/header', $data_header);
        $this->load->view($viewName, $data);
        $this->load->view('frontend/footer');
    }
		
	function set_title($title)
	{
		$this->title = $title;
		return $this;
	}
    
	
}