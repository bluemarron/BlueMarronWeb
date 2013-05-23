<?php

class PhpController extends BaseController {
  
  protected $layout = 'layouts.master';

	public function install()
	{ 
		$path = 'php/install';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path));
	}
 
	public function simpleExample()
	{ 
		$path = 'php/simple_example';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path));
	}

	public function basicVariable()
	{ 
		$path = 'php/basic_variable';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path));
	}

	public function arrayVariable()
	{ 
		$path = 'php/array_variable';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path));
	}

	/*
	function startsWith($haystack, $needle)
	{
	    return !strncmp($haystack, $needle, strlen($needle));
	}

	function endsWith($haystack, $needle)
	{
	    $length = strlen($needle);
	    if ($length == 0) {
	        return true;
	    }

	    return (substr($haystack, -$length) === $needle);
	}
	*/
}