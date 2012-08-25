<?php defined('SYSPATH') or die('No direct script access.');

class Minion_Task_Worker_Example extends Minion_Daemon {

	protected $_config = array();
	
	//Sleep for 1s between iterations.
	protected $_sleep = 1000000;
	
	public function before(array $config)
	{
		// Handle any setup tasks
		$this->_log(null, "Starting...");
	}
	
	public function loop(array $config)
	{
		// This will be continuously executed
		$this->_log(null, "Executing.");
	}
	
	public function after(array $config)
	{
		// Handle any cleanup tasks
		$this->_log(null, "Ending...");
	}

}