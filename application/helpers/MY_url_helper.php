<?php
/**
 * CSS URL
 * 
 * Create a local URL based on your basepath.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('css_url'))
{
	function css_url($uri = '')
	{
		$CI =& get_instance();
		return $CI->config->base_url('static/css/' . $uri);
	}
}

/**
 * Javascript URL
 * 
 * Create a local URL based on your basepath.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('js_url'))
{
	function js_url($uri = '')
	{
		$CI =& get_instance();
		return $CI->config->base_url('static/js/' . $uri);
	}
}