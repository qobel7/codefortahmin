<?php
/**
 * Created by IntelliJ IDEA.
 * User: canerkavak
 * Date: 13.11.2018
 * Time: 20:18
 */

class UserGuess extends CI_Model
{

    private $table = "guess_users";

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function insert($array_data){
		return $this->db->insert($this->table,$array_data);
	}

	public function getAll(){
		return $this->db->select("*")->from($this->table)->get()->result();
	}

	public function getById($id){
		return $this->db->select("*")->from($this->table)->where("id",$id)->get()->result();
	}

	public function update($array_data,$id){
		/*    	print_r($array_data);*/
		$this->db->where("id",$id);
		return $this->db->update($this->table,$array_data);
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	public function saveUser($data){
       // print_r($this->getByEmail($data["email"]));
		$count = 1;
		while($count > 0) {
		    $key = mt_rand(1000, 99999);
			$count = $this->keyControl($key);
			if($count == 0) {
                $data["referance"] = $key;
                break;
            }
			//print_r("referans".$data["referance"]);
		}
		//print_r("count".$count);
        if(count($this->getByEmail($data["email"])) == 0) {
            $this->db->insert($this->table, $data);
            return true;
        }else
            return false;
    }

    private function keyControl($key){
    	return count($this->db->select("*")->from($this->table)->where("referance","$key")->get()->result());
	}
	private function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	public function userLoginControl($data){
        return $this->db->select("*")->from($this->table)->where($data)->get()->result();
    }
	public function  getByReference($ref){
		return $this->db->select("*")->from($this->table)->where("referance",$ref)->get()->result();
    }
    public function userforgotPassword($data){
        return $this->db->select("*")->from($this->table)->where($data)->get()->result();
    }

    public function getByEmail($email){
        return $this->db->select("*")->from($this->table)->where("email",$email)->get()->result();
    }
    
    

}
