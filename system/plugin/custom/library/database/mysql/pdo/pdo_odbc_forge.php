<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * PDO ODBC Forge Class
 */
class AS_DB_pdo_odbc_forge extends AS_DB_pdo_forge {

	/**
	 * UNSIGNED support
	 *
	 * @var	bool|array
	 */
	protected $_unsigned		= FALSE;

	// --------------------------------------------------------------------

	/**
	 * Field attribute AUTO_INCREMENT
	 *
	 * @param	array	&$attributes
	 * @param	array	&$field
	 * @return	void
	 */
	protected function _attr_auto_increment(&$attributes, &$field)
	{
		// Not supported (in most databases at least)
	}

}