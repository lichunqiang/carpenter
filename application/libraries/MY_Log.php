<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//继承，并新增方法
//CI_Log 重新定义原来的方法
class MY_Log extends CI_Log
{
	public function __construct() {
		parent::__construct();
	}
	
	public function testLog() {
		echo __CLASS__ ;
	}
}