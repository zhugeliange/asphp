<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Typography Helpers
 */

// ------------------------------------------------------------------------

if ( ! function_exists('nl2br_except_pre'))
{
	/**
	 * Convert newlines to HTML line breaks except within PRE tags
	 *
	 * @param	string
	 * @return	string
	 */
	function nl2br_except_pre($str)
	{
		$AS =& get_instance();
		$AS->load->library('typography');
		return $AS->typography->nl2br_except_pre($str);
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('auto_typography'))
{
	/**
	 * Auto Typography Wrapper Function
	 *
	 * @param	string	$str
	 * @param	bool	$reduce_linebreaks = FALSE	whether to reduce multiple instances of double newlines to two
	 * @return	string
	 */
	function auto_typography($str, $reduce_linebreaks = FALSE)
	{
		$AS =& get_instance();
		$AS->load->library('typography');
		return $AS->typography->auto_typography($str, $reduce_linebreaks);
	}
}

// --------------------------------------------------------------------

if ( ! function_exists('entity_decode'))
{
	/**
	 * HTML Entities Decode
	 *
	 * This function is a replacement for html_entity_decode()
	 *
	 * @param	string
	 * @param	string
	 * @return	string
	 */
	function entity_decode($str, $charset = NULL)
	{
		return get_instance()->security->entity_decode($str, $charset);
	}
}
