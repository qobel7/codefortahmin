<?php
/**
 * Created by IntelliJ IDEA.
 * User: canerkavak
 * Date: 13.11.2018
 * Time: 20:18
 */

class VersionModel extends  CI_Model
{

    private $table = "version";

    public function __construct()
    {
        $this->load->database();
    }

	public function getAllVersion(){
		return $this->db->select("*")->from($this->table)->get()->result();
	}

	public function getAllVersionFromId($id){
		return $this->db->select("*")->from($this->table)->where("id",$id)->get()->result();
	}
	public function getAllVersionFromKey($key){
		return $this->db->select("*")->from($this->table)->where("key",$key)->get()->result();
	}
	public function insertVersion($array_data){
    	print_r($array_data);
		return $this->db->insert($this->table,$array_data);
	}

	public function updateVersion($array_data,$id){
		/*    	print_r($array_data);*/
		$this->db->where("id",$id);
		$this->db->update($this->table,$array_data);
	}

	public function deleteVersion($id){
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

}
