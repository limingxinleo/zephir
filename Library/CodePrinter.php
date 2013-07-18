<?php

class CodePrinter 
{
	protected $_code;

	protected $_level = 0;

	public function outputNoLineFeed($code)
	{
		$this->_code .= str_repeat("\t", $this->_level) . $code;
	}

	public function output($code)
	{
		$this->_code .= str_repeat("\t", $this->_level) . $code . PHP_EOL;
	}

	public function outputNoLevel($code)
	{
		$this->_code .= $code . PHP_EOL;
	}

	public function outputBlankLine()
	{
		$this->_code .= PHP_EOL;	
	}

	public function increaseLevel()
	{
		$this->_level++;
	}

	public function decreaseLevel()
	{
		$this->_level--;
	}

	public function getOutput()
	{
		return $this->_code;
	}

}