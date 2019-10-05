<?php
/**
 * Created by IntelliJ IDEA.
 * User: canerkavak
 * Date: 13.11.2018
 * Time: 20:18
 */

class AdvertisementModel extends CI_Model
{

    private $table = "advertisement";
	private $version= "version";

    public function __construct() {

        parent::__construct();
        $this->load->database();

    }

    public function getAllAdvertisement(){
		return $this->db->select($this->table.".id id,".$this->table.".description description,".$this->table.".header header ,".$this->table.".image image ,".$this->table.".version category_id,"
			.$this->version.".version category_description ,".$this->version.".image category_image ,"
			.$this->version.".key category_header" )->from($this->table)->join($this->version,$this->version.".id=".$this->table.".version","left")->get()->result();
    }

    public function getAdvertisementImages($id){
    	return $this->db->select("*")->from("advertisement_images")->where("ad_id",$id)->get()->result();
	}

    public function getAllAdvertisementFromId($id){
        return  $this->db->select($this->table.".id id,".$this->table.".description description,".$this->table.".header header ,".$this->table.".image image ,".$this->table.".version version,"
			.$this->version.".key category_name,"
			.$this->version.".key")->from($this->table)->join($this->version,$this->version.".id =".$this->table.".version","left")->where($this->table.".id",$id)->get()->result();
    }

	/*public function getAllAdvertisement(){
		return $this->db->select($this->table.".*,".$this->version.".key")->from($this->table)->join($this->version,$this->version.".id=".$this->table.".version")->get()->result();
	}

	public function getAllAdvertisementFromId($id){
		return $this->db->select($this->table.".*,".$this->version.".key")->from($this->table)->join($this->version,$this->version.".id =".$this->table.".version")->where("id",$id)->get()->result();
	}*/

    public function insertAdvertisement($array_data){
        return $this->db->insert($this->table,$array_data);
    }

/*	public function updateAdvertisement($array_data,$id){
		$this->db->where("id",$id);
		$this->db->update($this->table,$array_data);
	}*/

	public function updateAdvertisement($array_data,$id){
		/*    	print_r($array_data);*/
		$this->db->insert("advertisement_images",$array_data);
	}

    public function deleteAdvertisement($id){
		$this->db->where('id', $id);
        $this->db->delete($this->table);
    }
    public function deleteAdvertisementImage($id){
		$this->db->where('id', $id);
        $this->db->delete("advertisement_images");
    }

    public function getAllAdvertisementImageFromId($id){
		return $this->db->select("*")->from("advertisement_images")->where("ad_id",$id)->get()->result();
	}

	public function getAllAdvertisementFromCategoryId($id){
		return $this->db->select("*")->from($this->table)->where("version",$id)->get()->result();
	}

}
