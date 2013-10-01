<?php

namespace HMVC\Core;

class Autoloader {

	private static $_fileExtension = '.php';
	private static $_incDir;
	private static $_separatorObj = '\\';
	private static $_nameSpace;

	public static function setSeparatorObj ($obj) {
		$this->_separatorObj = $obj;
	}

	public static function getSeparatorObj () {
		return $this->_separatorObj;
	}

	public static function setIncDir ($dir) {
		$this->_incDir = $dir;
	}

	public static function getIncDir () {
		return $this->_incDir;
	}

	public static function setFileExtension ($ext) {
		$this->_fileExtension = $ext;
	}

	public static function getFileExtension () {
		return $this->_fileExtension;
	}

	public static function setNameSpace ($ns) {
		$this->_nameSpace = $ns;
	}

	public static function getNameSpace () {
		return $this->_nameSpace;
	}

	public static function register() {
		spl_autoload_register(array($this,'loadClass'));
	}

	public static function unregister() {
		spl_autoload_unregister(array($this,'loadClass'));
	}

	public static function loadClass($class) {
		
	}

}