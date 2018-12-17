<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Student');
		$model['data'] = $this->Student->getAll();
		$model['count'] = $this->Student->countAll();
		$this->load->view('dashboard', $model);
	}

	public function add(){
		$this->load->view('user');
	}

	public function insert(){
		$this->load->model('Student');
		$this->Student->add($_POST);
		echo "<script>";
		echo "alert('Se ha agregado un estudiante');";
		echo "window.location.href='" . base_url() . "welcome/index';";
		echo "</script>";
	}

	public function delete($id){
		$this->load->model('Student');
		$result = $this->Student->getById($id);
		$model["data"] = $result;
		$this->load->view('delete', $model);
		//echo $id;
	}

	public function getUser($id){
		$this->load->model('Student');
		$result = $this->Student->getById($id);
		$model["data"] = $result;
		$this->load->view('edit',$model);
	}

	public function remove($id){
		$this->load->model('Student');
		$this->Student->delete($id);
		echo "<script>";
		echo "alert('Se ha eliminado el estudiante');";
		echo "window.location.href='" . base_url() . "welcome/index';";
		echo "</script>";
	}

	public function update(){
		$this->load->model('Student');
		$this->Student->update($_POST);
		echo "<script>";
		echo "alert('Se ha actualizado un estudiante');";
		echo "window.location.href='" . base_url() . "welcome/index';";
		echo "</script>";
	}
}
