<?php

class AjaxController extends Controller{
	
	protected $postObject;
	protected $userObject;
	protected $categoryObject;
	
	public function index(){
		
		$this->set('response',"Invalid Request");
		
	}
	
	public function get_post_content() {
		
		$this->postObject = new Post();
		$post = $this->postObject->getPost($_GET['pID']);

		$this->set('response',$post["content"]);
	}
	
	public function get_weather($zip) {
		$url = "http://www.myweather2.com/developer/forecast.ashx?uac=ASgXhCvg-Y&output=xml&query=";
		$url .= $zip."&temp_unit=f";
		$xml = simplexml_load_file($url);
		$xml->zip = $zip;
		$this->set('response',$xml);
	}
}
