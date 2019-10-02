<?php
/**
 * Created by IntelliJ IDEA.
 * User: canerkavak
 * Date: 13.11.2018
 * Time: 20:18
 */

class GuessModel extends CI_Model
{

    private $table = "guess";

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
		$this->db->update($this->table,$array_data);
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
}
