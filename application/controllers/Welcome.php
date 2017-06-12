<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function __construct() {
        parent::__construct();
        
		// Load database
        $this->load->model('MServices');
        $this->load->model('MOrder');
        $this->load->model('MClient');
        $this->load->model('MServices');
        $this->load->model('MProduct');
        $this->load->model('MFranchises');
    }
	 
	public function index()
	{
		$data['servicios'] = $this->MServices->obtener();
		$this->load->view('public', $data);
	}
	
	public function admin()
	{
		$this->load->view('login_form');
	}
	
	public function somos()
	{
		$this->load->view('somos');
	}
	
	public function servicios()
	{
		$data['servicios'] = $this->MServices->obtener();
		$this->load->view('servicios', $data);
	}
	
	public function solicitud()
	{
		$this->load->view('solicitud');
	}
	
	public function noticias()
	{
		$this->load->view('noticias');
	}
	
	public function contacto()
	{
		$this->load->view('contacto');
	}
	
	public function public_perfil()
	{
        $data['list_orders_services'] = $this->MOrder->getServices();
        $data['list_orders_products'] = $this->MOrder->getProducts();
        $data['list_serv'] = $this->MServices->obtener();
        $data['list_prod'] = $this->MProduct->obtener();
        $data['list_franq'] = $this->MFranchises->obtener();
        $data['list_client'] = $this->MClient->obtener();
        $data['status'] = $this->MOrder->obtenerStatus();
		$this->load->view('public_perfil', $data);
	}
	
}
