<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	var $portal_vars;

	function __construct()
    {
        parent::__construct();
        $this->portal_vars =
            [
                'portal_css' => "../../css/portal/",
                'portal_img' => "../../img/portal/",
                'portal_js' => "../../js/portal/"
            ];
    }

    public function index()
	{
	    $portal_vars = $this->portal_vars;
		$this->load->view('portal/dashboard', $portal_vars);
	}

	public function dashboard()
    {
        $this->load->model('call_model');
        $all_calls = $this->call_model->get_all_calls();

        $portal_vars = $this->portal_vars;
        $data = ['portal_vars' => $portal_vars, 'calls' => $all_calls];
        $this->load->view('portal/dashboard', $data);
    }

    public function get_calls(){
	    $this->load->model('call_model');
	    $all_calls = $this->call_model->get_all_calls();
    }
}