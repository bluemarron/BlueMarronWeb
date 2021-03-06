<?php

class PhpController extends BaseController {
  
  protected $layout = 'layouts.master';

	public function install()
	{ 
		$path = 'php/install';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path));
	}
 
	public function basicStructure()
	{ 
		$path = 'php/basic_structure';

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