<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
	private $limit_news; // giới hạng tin hiển thị để phân trang

	public function __construct()
	{
		parent::__construct();
		$this->load->model('New_model'); 
		$this->limit_news=10; // số tin hiển thị
	}

	public function index()
	{
		$result=$this->New_model->showNews($this->limit_news);
		
		$page=$this->New_model->calPage($this->limit_news); // tính số trang
		$category=$this->New_model->GetDanhMuc();
		$tinmoi=$this->New_model->laytinmoi();
		$array=$this->New_model->layTinMoiNhatCua1DanhMuc();
		
		
		
		$result=array('arr'=>$result,'page'=>$page,'category'=>$category,'tinmoi'=>$tinmoi,'result'=>$array);
		
		$this->load->view('frontend/index', $result, FALSE);
	}
	public function search()
	{
		$keyword=$this->input->get('keyword');
		$search=$this->New_model->Search($keyword);
		$tinmoi=$this->New_model->laytinmoi();
		$category=$this->New_model->GetDanhMuc();
		$search=array('result'=>$search,'category'=>$category,'tinmoi'=>$tinmoi);

		$this->load->view('frontend/search', $search, FALSE);
	}
	//pagination
	public function page($currentPage)
	{
			
			$offset=($currentPage-1)*$this->limit_news;	//trang hiển thị bắt đầu từ vị trí
			$result=$this->New_model->loadNewsOfPage($this->limit_news,$offset); // hiển thị
			$page=$this->New_model->calPage($this->limit_news); // tính số trang

			$result=array('arr'=>$result,'page'=>$page);
			echo json_encode($result);
			
			//$this->load->view('frontend/index', $result, FALSE);
	}
	//lay noi dung chi tiet tin
	public function news_detail($id_new)

	{	
		$result=$this->New_model->getElementById($id_new);
		
		
		$tinlienquan=$this->New_model->laytinlienquan($result[0]['id_danhmuc'],$id_new);
		
		$tinmoi=$this->New_model->laytinmoi();

		$arr=$this->New_model->getDataFromTwoTableById($id_new);
		$category=$this->New_model->GetDanhMuc();
		$this->load->model('UserComment');
		$comment=$this->UserComment->getComment($id_new);
		$arr=array('result'=>$arr,'category'=>$category,'arr'=>$comment,'tinmoi'=>$tinmoi,'tinlienquan'=>$tinlienquan);
		$this->load->view('frontend/news_detail', $arr, FALSE);
	}
//lấy nội dung tin thuộc danh mục tương ứng
	public function tagdiv_category($id)
	{
		$tinmoi=$this->New_model->laytinmoi();
		$arr=$this->New_model->getNewsfromCategory($id);
		$category=$this->New_model->GetDanhMuc();
		$arr=array('result'=>$arr,'category'=>$category,'tinmoi'=>$tinmoi);
		$this->load->view('frontend/tagdiv_category', $arr, FALSE);

	}


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */