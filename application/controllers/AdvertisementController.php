<?php
/**
 * Created by IntelliJ IDEA.
 * User: canerkavak
 * Date: 13.11.2018
 * Time: 20:30
 */



class AdvertisementController extends CK_Controller
{

    public function __construct() {

        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url','form'));
        $this->load->model('advertisementModel');
        $this->load->model('versionModel');

    }

    public function getAllAdvertisementPage(){
        $data['advertisement'] = $this->advertisementModel->getAllAdvertisement();
        $data['categories'] = $this->versionModel->getAllVersion();
        return $this->loadView("AdvertisementPage",$data);
    }

    public function getAdvertisementImages(){
		$id = $this->input->post("id");
		$data['advertisementImages'] = $this->advertisementModel->getAdvertisementImages($id);
		$data['id'] = $id;
		return $this->load->view("adminpage/pages/AdvertisementImage",$data);

	}
	public function addAdvertisementImage(){
		$id = $this->input->post("id");
		$data['id'] = $id;
		return $this->load->view("adminpage/pages/AddAdvertisementImage",$data);
    }
    public function getAdvertisementView(){
        $id = $this->input->post("id");
		$data['advertisement'] = $this->advertisementModel->getAllAdvertisementFromId($id);

		return $this->load->view("adminpage/pages/AdvertisementView",$data);
    }
	public function getAdvertisementForm(){
		$data['categories'] = $this->versionModel->getAllVersion();
		return $this->load->view("adminpage/pages/AdvertisementForm",$data);
	}

	public function getAdvertisementEditForm(){
		$id = $this->input->post("id");
		$data['advertisement'] = $this->advertisementModel->getAllAdvertisementFromId($id);
		$data['categories'] = $this->versionModel->getAllVersion();
		/*		print_r($data);*/
		return $this->load->view("adminpage/pages/AdvertisementEditForm",$data);
	}

    public function addAdvertisement(){
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
        $this->advertisementModel->insertAdvertisement($data);
    }

	public function UpdateAdvertisement(){
		$data = $this->input->post();
		$id = $data["id"];
		unset($data["id"]);

		$this->advertisementModel->updateAdvertisement($data,$id);
	}

	public function UpdateAdvertisementVideo(){
		$id = $this->input->post("id");
		$video = $this->saveFileVideo();

		if($video["status"]=="true") {
			$data["video"] = $video["video"];
			$this->advertisementModel->updateAdvertisement($data,$id);
			echo json_encode(array("status"=>true));
		}else{
			echo json_encode(array("status"=>false));
		}
	}

	public function UpdateAdvertisementImage(){
		$id = $this->input->post("id");
		$image = $this->saveFileImage();
		if($image["status"]=="true") {
			$data["image"] = $image["image"];
			$this->advertisementModel->updateAdvertisement($data,$id);
			echo json_encode(array("status"=>true));
		}else{
			echo json_encode(array("status"=>false));
		}
	}
	public function addAdvertisementImageToImage(){
		$id = $this->input->post("id");
		$image = $this->saveFileImage();
		if($image["status"]=="true") {
			$data["path"] = $image["image"];
			$data["ad_id"] = $id;
			$this->advertisementModel->updateAdvertisement($data,$id);
			echo json_encode(array("status"=>true));
		}else{
			echo json_encode(array("status"=>false));
		}
	}


    public function deleteAdvertisement(){
        $data = $this->input->post("id");
        //print_r($data);
        $this->advertisementModel->deleteAdvertisement($data);
    }

    public function deleteAdvertisementImage(){
		$data = $this->input->post("id");
		$this->advertisementModel->deleteAdvertisementImage($data);

	}

}
