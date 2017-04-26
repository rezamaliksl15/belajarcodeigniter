<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller
{
	function index()
	{
		$data['web_title']	= "Home - Personal Website";
		$data['title']		= "HOME";

		$this->load->view("test",$data);
	}

	function about()
	{
		
	}

	function gallery()
	{
		
	}

	function contact()
	{
		
	}
}