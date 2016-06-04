<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){
		$this->home();
		
	}
	public function home(){
		$data['title'] = "Welcome!";
		$data['heads'] = "Welcome Code Igniter!";
		$data['var1'] = "2";
		$data['var2'] = "4";
		$this->load->model("math");
		$data['addTotal']= $this->math->add($data['var1'],$data['var2']);
		$data['subTotal']= $this->math->sub($data['var1'],$data['var2']);
		$this->load->view("view_home", $data);
	}
	public function about(){
		$data['title'] = "Welcome!";
		$data['heads'] = "Welcome to About Page!";
		
		$this->load->view("view_about", $data);
	}

	function getValues(){
		$this->load->model("get_db");
		$data['results'] = $this->get_db->getAll();
		$data['heads'] = "Welcome to View DB!";
		$this->load->view("view_db",$data);
	}

	function insertValues(){
		$this->load->model("get_db");
		$newRow = array(
			"firstname" => "IvanKrist",
			"email" => "wiwGoGO@gmail.com"
			);
		$this->get_db->insert1($newRow);
		echo "Its been added";

	}
	function insertValues2(){
		$this->load->model("get_db");
		$newRow = array(
			array(
			"firstname" => "IvanKrister1",
			"email" => "wiwGoGO@gmail.com"
			),
			array(
			"firstname" => "IvanKrister2",
			"email" => "wiwGoGO2@gmail.com"
			)
			);
		$this->get_db->insert2($newRow);
		echo "Its been added";

	}
	function updateValue(){
		$this->load->model("get_db");
		$newRow = array(
			"firstname" => "KristerIvan",
			"email" => "wiwGoGO@gmailupdated.com"
			);
		$this->get_db->update1($newRow);
		echo "Its been updated";
	}
	function updateValue2(){
		$this->load->model("get_db");
		$newRow = array(
			array(
				"id"=>"1",
				"firstname" => "updateValue1",
			"email" => "wiwGoGO@gmailupdated.updateValue1"),
			array(
				"id"=>"3",
				"firstname" => "updateValue3",
			"email" => "wiwGoGO@gmailupdated.updateValue3")
			);
		$this->get_db->update2($newRow);
		echo "Its been updated";
	}
	
	
}
