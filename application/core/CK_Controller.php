<?php
/**
 * Created by IntelliJ IDEA.
 * User: canerkavak
 * Date: 13.11.2018
 * Time: 20:47
 */

class CK_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('session');

		if(!isset($this->session->username)){
			redirect('/login');
		}
    }

    public function loadView($page,$data){
        $this->load->view("adminpage/header");
        $this->load->view("adminpage/pages/".$page,$data);
        $this->load->view("adminpage/footer");

/*		print_r(isset($this->session->username));*/

    }

	protected function saveFileVideo(){
		$config['upload_path']  = './uploads/';
		$configVideo['max_size'] = '302400';
		$config['allowed_types'] = 'avi|flv|wmv|mov|mp4';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('video')){
			$error = array('error' => $this->upload->display_errors());
			json_encode($error);
			return array("status"=> "false");
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			//print_r($data);
			return array("status"=> "true","video"=>"/codeForCategory/uploads/". $data["upload_data"]["file_name"]);
		}
	}
	protected function saveFileImage(){
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());
			json_encode($error);
			return array("status"=> "false");
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			return array("status"=> "true","image"=>"/codeForCategory/uploads/" . $data["upload_data"]["file_name"]);
		}
	}

}
