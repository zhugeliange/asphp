<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * PDO Forge Class
 */
class AS_DB_pdo_forge extends AS_DB_forge {

	/**
	 * CREATE TABLE IF statement
	 *
	 * @var	string
	 */
	protected $_create_table_if	= FALSE;

	/**
	 * DROP TABLE IF statement
	 *
	 * @var	string
	 */
	protected $_drop_table_if	= FALSE;

}
