<?php
/**
 * Created by IntelliJ IDEA.
 * User: canerkavak
 * Date: 13.11.2018
 * Time: 20:30
 */

class GuessUsers extends CK_Controller
{

    public function __construct() {

        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->model('userGuess');
		$this->absolutePath = "adminpage/pages/".$this->path;
    }
	private $path="guessusers/";
	private $absolutePath ="";

	public function page(){
		$data["data"] = $this->userGuess->getAll();
		return $this->loadView($this->path."Page",$data);
	}

	public function getView(){
		$id = $this->input->post("id");
		$data["data"] = $this->userGuess->getById($id);
		return $this->load->view($this->absolutePath."View",$data);
	}
	public function getUpdateView(){
		$id = $this->input->post("id");
		$data["data"] = $this->userGuess->getById($id);
		//print_r($data);
		return $this->load->view($this->absolutePath."EditView",$data);
	}
	public function getGenerateView(){

		return $this->load->view($this->absolutePath."GenerateView",null);
	}
	public function add(){
		$data = $this->input->post();

		$this->userGuess->insert($data);
	}
	public function update(){
		$data = $this->input->post();
		$id = $data["id"];
		unset($data["id"]);
		$this->userGuess->update($data,$id);
	}
	public function delete(){
		$data = $this->input->post("id");
		$this->userGuess->delete($data);
	}

}
