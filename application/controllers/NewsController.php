<?php
/**
 * Created by IntelliJ IDEA.
 * User: canerkavak
 * Date: 13.11.2018
 * Time: 20:30
 */

class NewsController extends CK_Controller
{

    public function __construct() {

        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->model('news');
		$this->absolutePath = "adminpage/pages/".$this->path;
	}
	private $path="news/";
	private $absolutePath ="";

	public function page(){
		$data["data"] = $this->news->getAll();
		return $this->loadView($this->path."Page",$data);
	}

	public function getView(){
		$id = $this->input->post("id");
		$data["data"] = $this->news->getById($id);
		return $this->load->view($this->absolutePath."View",$data);
	}
	public function getUpdateView(){
		$id = $this->input->post("id");
		$data["data"] = $this->news->getById($id);
		//print_r($data);
		return $this->load->view($this->absolutePath."EditView",$data);
	}
	public function getGenerateView(){

		return $this->load->view($this->absolutePath."GenerateView",null);
	}
	public function add(){
		$data = $this->input->post();

		$this->news->insert($data);
	}
	public function update(){
		$data = $this->input->post();
		$id = $data["id"];
		unset($data["id"]);
		$this->news->update($data,$id);
	}
	public function delete(){
		$data = $this->input->post("id");
		$this->news->delete($data);
	}

}
