<?php
class MY_Controller extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		//$this->output->enable_profiler(TRUE);//分析器
		$this->load->library('Csmarty');
		//$this->load->database();
	}
	//can not override
	public final function assign($key, $value) {
		$this->csmarty->assign($key,$value); 
	}
	public final function render($tpl, $folder = '') {
		//$this->load->view('base/header', $this->data);
		//$this->load->view( $folder . '/' . $tpl, $this->data);
		//$this->load->view('base/footer', $this->data);		
		//$this->output->cache(1);//cache输出
		$this->load->helper('url');
		$this->load->helper('static');
		trim($folder, '/');
		$folder == '' or ($folder = '/');
		//$page = $this->csmarty->fetch($folder . $tpl);
		$this->csmarty->assign('page', $folder . $tpl);
		$this->csmarty->display('base/base.html');
	}
}