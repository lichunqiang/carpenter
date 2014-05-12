<?php
function load_js($js_file) 
{
	static $js_stack = array();
	if(is_bool($js_file) && $js_file === TRUE) 
	{

		return $js_stack;
	}
	else
	{
		array_push($js_stack, $js_file);
	}

}