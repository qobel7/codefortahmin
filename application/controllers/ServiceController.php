<?php
/**
 * Created by IntelliJ IDEA.
 * User: canerkavak
 * Date: 15.11.2018
 * Time: 02:25
 */

class ServiceController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('advertisementModel');
		$this->load->model('versionModel');
		$this->load->model('userGuess');
		$this->load->model('guessModel');
		$this->load->model('news');
	}

	public function getAllAdvertisement(){
		$data['advertisement'] = $this->advertisementModel->getAllAdvertisement();
		echo json_encode($data['advertisement'],JSON_UNESCAPED_UNICODE);
	}

	public function getAdvertisementImage(){
		$id = $this->input->get("id");
		$data['advertisement'] = $this->advertisementModel->getAllAdvertisementImageFromId($id);
		echo json_encode($data['advertisement'],JSON_UNESCAPED_UNICODE);

	}

	public function getAdvertisementById(){
		$id = $this->input->get("id");
		$data['advertisement'] = $this->advertisementModel->getAllAdvertisementFromId($id);
		echo json_encode($data['advertisement'],JSON_UNESCAPED_UNICODE);
	}

	public function getAdvertisementByCategoryId(){
		$id = $this->input->get("id");
		$data['advertisement'] = $this->advertisementModel->getAllAdvertisementFromCategoryId($id);
		foreach($data['advertisement'] as $key => $value){
			$data['advertisement'][$key]->allImages = $this->advertisementModel->getAllAdvertisementImageFromId($value->id);
		}
		echo json_encode($data['advertisement'],JSON_UNESCAPED_UNICODE);
	}

	public function getAllCategory(){
		$data["version"] = $this->versionModel->getAllVersion();
		echo json_encode($data['version'],JSON_UNESCAPED_UNICODE);
	}

	public function getCategoryById(){
		$key = $this->input->get("id");
		$data["version"] = $this->versionModel->getAllVersionFromId($key);
		echo json_encode($data['version'],JSON_UNESCAPED_UNICODE);
	}

	public function getGuess(){
        echo json_encode($this->guessModel->getAll(),JSON_UNESCAPED_UNICODE);
    }
    public function getNews(){
        echo json_encode($this->news->getAll(),JSON_UNESCAPED_UNICODE);
    }
    public function getAll(){
	    $data["news"] = $this->news->getAll();
	    $data["guess"] = $this->guessModel->getAll();

        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }


	public function userLogin(){
        $data = json_decode($this->input->raw_input_stream, true);
        echo json_encode($this->userGuess->userLoginControl($data),JSON_UNESCAPED_UNICODE);
        
    }

    public function saveUser(){
        $data = json_decode($this->input->raw_input_stream, true);
        if(count($this->userGuess->getByEmail($data["email"])) == 0) {
            echo json_encode($this->userGuess->saveUser($data),JSON_UNESCAPED_UNICODE);
        }else {
            echo "false";
        }
    }

    public function userforgotPassword(){
        $data = json_decode($this->input->raw_input_stream, true);
        echo json_encode($this->userGuess->userforgotPassword($data),JSON_UNESCAPED_UNICODE);

    }

    public function updateUserCredit(){
        $data = json_decode($this->input->raw_input_stream, true);
        $user = $this->userGuess->getById($data["id"])[0];
        if($data["type"]=="up" ) {
//        	print_r($user);
			$user->credit = $user->credit + $data["credit"];
			if($user->referance_from != "false" && $data["status"] != "adv") {
				$update_other_user = $this->userGuess->getByReference($user->referance_from)[0];
//				print_r($update_other_user);
				$this->userGuess->update(array("credit" => $update_other_user->credit + $data["credit"] * 0.1), $update_other_user->id);
//				print_r($user->id);
				//$this->userGuess->update(array("referance_from" => "false"), $user->id);
				$user->referance_from = "false";
			}
        }else {
			$user->credit = $user->credit - $data["credit"];
        }
        echo json_encode($this->userGuess->update($user,$data["id"]),JSON_UNESCAPED_UNICODE);

    }

    public function sendEmail(){
        $to      = 'cnrkvk@gmail.com';
        $subject = 'the subject';
        $message = 'hello';
        $headers = 'From: testmail@2misli.net' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
    }
}
