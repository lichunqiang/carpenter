<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'third_party/smarty/Smarty.class.php' ); 

class Csmarty extends Smarty
{
	protected $ci;
	public function __construct() {
		$this->ci =& get_instance();
		$this->ci->load->config('smarty');
		parent::__construct();
		//$this->setTemplateDir($this->ci->config->item('template_dir'))
			//->setCompileDir($this->ci->config->item('compile_dir'));
			//->setCacheDir($this->ci->config->item('template_dir'))
			//->setConfigDir($this->ci->config->item('template_dir'))
			//->setPluginsDir(
               // array(SMARTY_PLUGINS_DIR,
                         //dirname(__FILE__) . '/plugins/'));	
		$this->left_delimiter = $this->ci->config->item('left_delimiter');
		$this->right_delimiter = $this->ci->config->item('right_delimiter');
		$this->caching = $this->ci->config->item('caching');
		$this->cache_lifetime = $this->ci->config->item('lefttime');

		$this->template_dir =  $this->ci->config->item('template_dir');
		$this->compile_dir = $this->ci->config->item('compile_dir');
			/*	
		
		if ( method_exists( $this, 'assignByRef') )
		{
			$ci =& get_instance();
			$this->assignByRef("ci", $this->ci);
		}
*/		
		log_message('debug', "Smarty Class Initialized");
	}
	
	private function _setSmartyConfig() {
		$this->ci->load->config('smarty');
		$this->smarty -> template_dir = $this->ci->config->item('template_dir');
		$this->smarty -> compile_dir = $this->ci->config->item('compile_dir');
		$this->smarty -> config_dir = $this->ci->config->item('config_dir');
		$this->smarty -> cache_dir = $this->ci->config->item('config_dir');
		$this->smarty -> left_delimiter = $this->ci->config->item('left_delimiter');
		$this->smarty -> right_delimiter = $this->ci->config->item('right_delimiter');
		
		$this->smarty->debugging = $this->ci->config->item('debugging');
	
	
	}
}