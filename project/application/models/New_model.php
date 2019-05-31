<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class New_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function get_news_count($keyword)
	{
		 if ($keyword == "NIL") $keyword = "";
       $this->db->select('*');
		$this->db->from('tintuc');
		if($keyword){

			$this->db->like(('title'),$keyword);
			$this->db->or_like(('description'),$keyword);
			$this->db->or_like(('tacgia'),$keyword);
		}
        $arr=$this->db->get('');
		$arr=$arr->result_array($arr);
		/*echo '<pre>';
		var_dump($arr);
		die();*/
		return count($arr);
	}
//tạo danh mục cha con test
	public function createPath($id, $except = null) {
		$this->db->select('*');
		$this->db->where('id_danhmuc', $id);
    $row 	=$this->db->get('danhmuc');
    $row = $row->result_array();
       echo $row[0]['parent_id'];
	    if($row[0]['parent_id'] == 0) {
	     
	      $name = $row[0]['category_name']; 
	        return "<a href='index.php'>Admin</a> > <a href='index.php?folder_id=$id'>".$name."</a> > ";
	    } 
	    else {
	       $name = $row[0]['category_name']; 
	       
	        if(!empty($except) && $except == $name)
	            return $this->createPath($row[0]['parent_id'], $except)." ".$name;
	        
			}
	    return $this->createPath($row[0]['parent_id'], $except). " <a href='index.php?folder_id=$id'>".$name."</a> >";

	    
	
	   	
	}
	
	//
	public function Search($keyword)
	{
		
		$this->db->select('*');
		$this->db->from('tintuc');
		if($keyword){

			$this->db->like(('title'),$keyword);
			$this->db->or_like(('description'),$keyword);
			$this->db->or_like(('tacgia'),$keyword);
		}
		$this->db->join('danhmuc', 'danhmuc.id_danhmuc = tintuc.id_danhmuc');
		$arr=$this->db->get('');
		$arr=$arr->result_array($arr);
		
		return $arr;

	}
	//insert vào database
	public function Insert($ten,$order)
	{
		$array=array('category_name'=>$ten,'sort_order'=>$order);
		$this->db->insert('danhmuc', $array);
		return $this->db->insert_id();

	}
	//lấy tất cả danh mục
	public function GetDanhMuc()
	{
		$keyword=$this->input->post('keyword');
		$this->db->select('*');
		
		if($keyword){

			$this->db->like(('category_name'),$keyword);
			
		}
		$array=$this->db->get('danhmuc');
		$array=$array->result_array();
		return $array;
	}
	//
	public function getDataById($id)
	{
		$this->db->select('*');
		$this->db->where('id_danhmuc', $id);
		$array=$this->db->get('danhmuc');
		$array=$array->result_array();
		return $array;
	}
	//
	public function Update($id,$name)
	{
		$obj=array('id_danhmuc'=>$id,
					'category_name'=>$name);
		$this->db->where('id_danhmuc', $id);
		return $this->db->update('danhmuc', $obj);
	}
	//
	public function DeleteById($id)
	{
		$this->db->where('id_danhmuc', $id);
		return $this->db->delete('danhmuc');
	}
	//insert tin
	public function insertNews($title,$id_category,$content,$img,$desc,$tacgia)
	{
			$arr=array('title'=>$title,
						'id_danhmuc'=>$id_category,
						'content'=>$content,
						'image'=>$img,
						'description'=>$desc,
						'tacgia'=>$tacgia
						);
			$this->db->insert('tintuc', $arr);
			return $this->db->insert_id();
	}
	// get list news
	public function getNews()
	{
		$keyword=$this->input->post('keyword');
		$this->db->select('*');
		if($keyword){

			$this->db->like(('title'),$keyword);
			$this->db->or_like(('description'),$keyword);
			$this->db->or_like(('tacgia'),$keyword);
		}
		$arr=$this->db->get('tintuc');
		$arr=$arr->result_array($arr);
		return $arr;
	}
	

	//delete new
	public function deleteNew($id)
	{
		$this->db->where('id_new', $id);
		return $this->db->delete('tintuc');
	}
	//get element by id Tintin
	public function getElementById($id)
	{
		$this->db->where('id_new', $id);
		$arr=$this->db->get('tintuc');
		$arr=$arr->result_array();
		return $arr;
	}
	//update Tintuc
	public function updateTin($id,$img,$title,$id_category,$content,$desc,$tacgia)
	{
		$arr=array('title'=>$title,
						'id_danhmuc'=>$id_category,
						'content'=>$content,
						'image'=>$img,
						'description'=>$desc,
						'id_new'=>$id,
						'tacgia'=>$tacgia
						);
		$this->db->where('id_new', $id);
		return $this->db->update('tintuc', $arr);
	}
	//get data from 2 table
	public function getDataFromTwoTable()
	{
		$this->db->select('*');		
		$this->db->from('tintuc');
		$this->db->join('danhmuc', 'danhmuc.id_danhmuc = tintuc.id_danhmuc');
		$result=$this->db->get('');
		$result=$result->result_array();
		return $result;
	}
	//tính tổng tất cả số tin hiện có
	public function sumNews()
	{
		$this->db->select('*');
		$result=$this->db->get('tintuc');
		$result=$result->result_array();	

		return count($result);
	}
	//số tin muốn hiển thị
	public function showNews($limit)
	{
		$this->db->select('*');		
		$this->db->from('tintuc');
		$this->db->order_by('tintuc.id_new', 'desc');
		$this->db->join('danhmuc', 'danhmuc.id_danhmuc = tintuc.id_danhmuc');
		$result=$this->db->get('',$limit,0);
		$result=$result->result_array();
		
		return $result;
	}
	//Tính số trang
	public function calPage($limit)
	{
		$sumNew=$this->sumNews();
		
		return ceil($sumNew/$limit);		
	}
	public function loadNewsOfPage($limit,$offset)
	{
		$this->db->select('*');		
		$this->db->from('tintuc');
		$this->db->order_by('tintuc.id_new', 'desc');
		$this->db->join('danhmuc', 'danhmuc.id_danhmuc = tintuc.id_danhmuc');
		$result=$this->db->get('',$limit,$offset);
		$result=$result->result_array();
		return $result;
	}
	public function getDataFromTwoTableById($id)
	{
		$this->db->select('*');
		$this->db->where('id_new', $id);
		$this->db->from('tintuc');
		$this->db->join('danhmuc', 'danhmuc.id_danhmuc = tintuc.id_danhmuc');
		$result=$this->db->get();
		$result=$result->result_array();
		return $result;
	}
	//model lấy tin theo danh mục
	public function getNewsfromCategory($id)
	{
		$this->db->select('*');
		$this->db->where('danhmuc.id_danhmuc', $id);
		$this->db->from('danhmuc');
		$this->db->join('tintuc', 'tintuc.id_danhmuc = danhmuc.id_danhmuc');

		$result=$this->db->get();
		$result=$result->result_array();
		
		return $result;

	}
	//lấy email và password
	public function getLogin()
	{
		$this->db->select('email,password');
		$this->db->from('login');
		$result=$this->db->get();
		$result=$result->result_array();
		return $result;
	}
	//lay 5 tin moi nhat
	public function laytinmoi()
	{
		$this->db->select('*');
		
		$this->db->order_by('tintuc.date', 'desc');
		$result=$this->db->get('tintuc', 5, 0);
		$result=$result->result_array();
		return $result;
	}
	//lay 3 tin lien quan va moi nhat
	public function laytinlienquan($id_danhmuc,$id_new)
	{
		$this->db->select('*');
		$this->db->where('id_new !=', $id_new);
		$this->db->where('id_danhmuc', $id_danhmuc);
		$this->db->order_by('tintuc.date', 'desc');
		$result=$this->db->get('tintuc', 3, 0);
		$result=$result->result_array();
		return $result;

	}
	//lấy tin mới nhất của 1 danh mục
	public function layTinMoiNhatCua1DanhMuc()
	{
		 $i=0;
		$arr=$this->GetDanhMuc();
		foreach ($arr as $value) {
			if($i<6)
		{	$this->db->select('*');
		$this->db->from('tintuc');
		$this->db->where('tintuc.id_danhmuc', $value['id_danhmuc']);
		$this->db->join('danhmuc', 'tintuc.id_danhmuc = danhmuc.id_danhmuc');
		
		$this->db->order_by('tintuc.date', 'desc');
		$this->db->limit(1);
		$result=$this->db->get();
		$array[$i]=$result->result_array();
		$i=$i+1;
	}
			
		}
		return $array;
	}
}

/* End of file New_model.php */
/* Location: ./application/models/New_model.php */