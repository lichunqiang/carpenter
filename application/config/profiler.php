<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Profiler Sections
| -------------------------------------------------------------------------
| This file lets you determine whether or not various sections of Profiler
| data are displayed when the Profiler is enabled.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/profiling.html
|
*/
$config['benchmarks']          		= TRUE; //在各个计时点花费的时间以及总时间
$config['config']          			= FALSE;
$config['controller_info']          = FALSE;
$config['get']         				= FALSE;
$config['http_headers']          	= FALSE;
$config['memory_usage']          	= FALSE; //本次请求消耗的内存（byte为单位）
$config['post']          			= FALSE;
$config['queries']          		= FALSE;
$config['uri_string']         		= FALSE;
$config['query_toggle_count']       = 10; //指定显示多少个数据库查询语句，剩下的则默认折叠起来。

/* End of file profiler.php */
/* Location: ./application/config/profiler.php */