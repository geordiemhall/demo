<?php

namespace Controller;

Class Main extends \SCMC\Controller
{
	protected $siteTitle;

	public function __construct()
	{
		$this->siteTitle = "Sponge Cake Monster Clash";

		parent::__construct();
	}	

	public function title($str = ""){
		if($str !== "") $str .= " | ";
		return $str.$this->siteTitle;
	}

	public function index()
	{
		$this->render("home", array("title" => $this->title())); 
	}

	public function monsters()
	{
		$this->render("monsters", array("title" => $this->title("Monsters"))); 
	}

	public function about()
	{
		$this->render("about", array("title" => $this->title("About"))); 
	}

	public function diaries()
	{
		$this->render("diaries", array("title" => $this->title("Diaries"))); 
	}

	public function getinvolved()
	{
		$this->render("get-involved", array("title" => $this->title("Get involved"))); 
	}

	
	public function notFound($callable = false)
	{
		$this->render("error", array(), 404);
	}
}

