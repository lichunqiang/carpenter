<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['pre_controller'] = array(
                                'class'    => '',
                                'function' => 'my_test',
                                'filename' => 'pre_controller.php',
                                'filepath' => 'hooks',
                                'params'   => array('beer', 'wine', 'snacks')
                                );

/* End of file hooks.php */
/* Location: ./application/config/hooks.php */