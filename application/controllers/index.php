<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
	}
	public function index()
	{
		$this->load->helper('url');
		$this->render('index.html');
	}
	public function view($user_id = '') 
	{
		var_dump($user_id);
		var_dump($this->input->get('name'));
		//var_dump(func_get_args());
		//var_dump($this->input->get());
		$this->load->helper('url');
				echo url_title('hello world');
		//library
		$this->load->library('form_validation');
		
		//$this->load->library('MyLibrary', array('test' => 'mae'));

		//$this->load->library('log');
		//$this->log->testLog();
		//$this->mylibrary->test();
		//$this->load->model('user/userinfo_model', 'userinfo');
		//var_dump($this->config);
		//$user_list = $this->userinfo->getUserList();
		//$user_list = $this->userinfo->get_all();
//var_dump($user_list);
		
		//load lang
		//$this->lang->load('error');
		//echo $this->lang->line('test');
		$page = 'user';
		$data['title'] = ucfirst($page); 
		//$this->load->view('base/header', $data);
		//$this->load->view('pages/' . $page, $data);
		//$this->load->view('base/footer', $data);
		$this->assign('title', $data['title']);
		$this->render('index.html');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */