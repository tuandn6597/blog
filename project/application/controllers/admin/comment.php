<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class 	comment extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserComment');
	}

	public function index()
	{
		
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$comment=$this->input->post('comment');
		$this->load->model('UserComment');
		$id_comment=$this->UserComment->InsertComment($id,$name,$email,$comment);
		if($id_comment)
		{
			$result=$this->UserComment->getCommentById($id_comment);
			$result=array('arr'=>$result);
			echo json_encode($result);
		}


	}
	//lay comment
	public function getAllComment()
	{
		
		$result=$this->UserComment->getAllComment();
		$result=array('result'=>$result);
		$this->load->view('admin/comment', $result, FALSE);
	}
	public function deleteComment($id)
	{
		if($this->UserComment->deleteComment($id))
		{
			echo 'delete comment success';
		}
		else
		{
			echo 'delete error';
		}

	}
	public function updateReply($id)
	{
		$reply=$this->input->post('reply');
		
		if($this->UserComment->updateReply($id,$reply))
			{
			echo 'update comment success';
		}
		else
		{
			echo 'update comment error';
		}
	}
	

}

/* End of file comment.php */
/* Location: ./application/controllers/comment.php */