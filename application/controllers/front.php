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
	
	public function courses(){
		$data['panel'] = "course";
		$data['base'] = base_url();
		$data['lang'] = $this->Front_model->languages();
		$this->load->view('front/header',$data);
		$this->load->view('front/course');
		$this->load->view('front/footer');
	}
	
	public function eamount(){
		$data['panel'] = "eamount";
		$data['base'] = base_url();
		$data['etype'] = $this->Front_model->etype();
		//$data['lang'] = $this->Front_model->languages();
		$this->load->view('front/header',$data);
		$this->load->view('front/eamount');
		$this->load->view('front/footer');
	}
	
	public function edate(){
		$data['panel'] = "edate";
		$data['base'] = base_url();
		$data['ecenter'] = $this->Front_model->ecenter();
		//$data['lang'] = $this->Front_model->languages();
		$this->load->view('front/header',$data);
		$this->load->view('front/edate');
		$this->load->view('front/footer');
	}
	
	public function contactus(){
		
		$data['panel'] = "contact";
		$data['base'] = base_url();
		$data['ctype'] = $this->Front_model->ctype();
		$this->load->view('front/header',$data);
		$this->load->view('front/contact');
		$this->load->view('front/footer');
	}
}

/* End of file front.php */
/* Location: ./application/controllers/front.php */