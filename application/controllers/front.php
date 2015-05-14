<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {

	/**
	 *
	 *
	 * Controller for front end files
	 *
	 *
	 */
	
	public function index(){
		$data['panel'] = "index";
		$data['base'] = base_url();
		$this->load->view('front/header',$data);
		$this->load->view('front/index');
		$this->load->view('front/footer');
	}
	
	public function aboutus(){
		$data['panel'] = "about";
		$data['base'] = base_url();
		$this->load->view('front/header',$data);
		$this->load->view('front/about');
		$this->load->view('front/footer');
	}
	
	public function achievements(){
		$data['panel'] = "achieve";
		$data['base'] = base_url();
		$this->load->view('front/header',$data);
		$this->load->view('front/achievements');
		$this->load->view('front/footer');
	}
	
	public function germany(){
		$data['panel'] = "germany";
		$data['base'] = base_url();
		$this->load->view('front/header',$data);
		$this->load->view('front/germany');
		$this->load->view('front/footer');
	}
	
	public function gruppe(){
		$data['panel'] = "gruppe";
		$data['base'] = base_url();
		$this->load->view('front/header',$data);
		$this->load->view('front/gruppe');
		$this->load->view('front/footer');
	}
	
	public function contactus(){
		$data['panel'] = "contact";
		$data['base'] = base_url();
		$this->load->view('front/header',$data);
		$this->load->view('front/contact');
		$this->load->view('front/footer');
	}
}

/* End of file front.php */
/* Location: ./application/controllers/front.php */