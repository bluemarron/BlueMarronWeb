<?php

class AboutController extends BaseController {
  
  protected $layout = 'layouts.master';

	public function introduction()
	{ 
		$path = 'about/introduction';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path));
	}
 
	public function contact()
	{ 
		$path = 'about/contact';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path));
	}

}