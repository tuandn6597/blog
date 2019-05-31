<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserComment extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function InsertComment($id,$name,$email,$content)
	{
		$arr=array('name'=>$name,'email'=>$email,'id_new'=>$id,'content'=>$content);
		$this->db->insert('comment', $arr);
		return $this->db->insert_id();

	}
	//lấy tất cả comment
	public function getAllComment()
	{
		$keyword=$this->input->get('keyword');
		$this->db->select('*');
		if($keyword){

			$this->db->like(('name'),$keyword);
			$this->db->or_like(('email'),$keyword);
			$this->db->or_like(('content'),$keyword);
		}
		$arr=$this->db->get('comment');
		$arr=$arr->result_array();
		return $arr;
	}
	//lấy comment của của tin
	public function getComment($id)
	{
		$this->db->select('*');
		$this->db->where('id_new', $id);
		$arr=$this->db->get('comment');
		$arr=$arr->result_array();
		return $arr;
	}
	//lấy comment theo id của comment
	public function getCommentById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$arr=$this->db->get('comment');
		$arr=$arr->result_array();
		return $arr;
	}
	public function deleteComment($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		return $this->db->delete('comment');
	}
	public function updateReply($id,$reply)
	{
		$result=array('id'=>$id,'reply'=>$reply);
		$this->db->where('id', $id);
		
		return $this->db->update('comment', $result);

	}


}

/* End of file UserComment.php */
/* Location: ./application/models/UserComment.php */