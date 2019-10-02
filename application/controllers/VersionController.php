<?php
/**
 * Created by IntelliJ IDEA.
 * User: canerkavak
 * Date: 13.11.2018
 * Time: 20:30
 */

class VersionController extends CK_Controller
{

    public function __construct() {

        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->model('versionModel');

    }

    public function VersionPage(){
        $data["version"] = $this->versionModel->getAllVersion();
        return $this->loadView("VersionPage",$data);
    }

    public function getVersionView(){
        $id = $this->input->post("id");
			$data["version"] = $this->versionModel->getAllVersionFromId($id);
        return $this->load->view("adminpage/pages/VersionView",$data);
    }
	public function getVersionUpdateView(){
		$id = $this->input->post("id");
		$data["version"] = $this->versionModel->getAllVersionFromId($id);
		//print_r($data);
		return $this->load->view("adminpage/pages/VersionEditView",$data);
	}
	public function getVersionGenerateView(){

		return $this->load->view("adminpage/pages/VersionGenerateView",null);
	}
    public function addVersion(){
		$data = $this->input->post();
		$video = $this->saveFileVideo();
		$image = $this->saveFileImage();

		if($video["status"]=="true") {
			$data["video"] = $video["video"];
		}else{
			echo json_encode(array("status"=>false));
		}
		if($image["status"]=="true") {
			$data["image"] = $image["image"];
		}else{
			echo json_encode(array("status"=>false));
		}
        $this->versionModel->insertVersion($data);
    }
	public function updateVersion(){
		$data = $this->input->post();
		$id = $data["id"];
		unset($data["id"]);


		$this->versionModel->updateVersion($data,$id);
	}
    public function deleteVersion(){
        $data = $this->input->post("id");
        $this->versionModel->deleteVersion($data);
    }

	public function updateVersionImage(){
		$id = $this->input->post("id");
		$image = $this->saveFileImage();
		if($image["status"]=="true") {
			$data["image"] = $image["image"];
			$this->versionModel->updateVersion($data,$id);
			echo json_encode(array("status"=>true));
		}else{
			echo json_encode(array("status"=>false));
		}
	}
}
