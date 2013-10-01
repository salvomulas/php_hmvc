<?php

defined('BASEPATH') or define('BASEPATH',dirname(realpath(__FILE__)) . '/../');
defined('PACKPATH') or define('PACKPATH',BASEPATH . 'packages/');
defined('COREPATH') or define('COREPATH',PACKPATH . 'core/');
defined('APPLPATH') or define('COREPATH',PACKPATH . 'application');

if (!function_exists(mvc_autoloader)) {

	function mvc_autoloader() {

		require(COREPATH . 'classes/autoloader.php');

	}

}