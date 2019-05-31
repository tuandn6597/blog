<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  new_controller extends CI_Controller {

	private $limit_news;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('New_model');
		$this->limit_news=20;
		$this->load->library('pagination');
		
	}
	
	
	public function index()
	{

		
	}
	
	public function page()
	{

		
			
			
			
			
			
			
			
			

			

			
	}

	//gửi dữ liệu tới model
	public function InsertData()
	{
		
		$ten=$this->input->post('ten');
		$order=$this->input->post('order');
		echo json_encode($this->New_model->Insert($ten,$order));
		
	}
	//lấy dữ liệu từ model truyền xuống view
	public function GetData()
	{
		$result=$this->New_model->GetDanhMuc();

		$result=array('array_result'=>$result);
		
		$this->load->view('admin/Category_view', $result, FALSE);
	}
	//lấy Id từ view truyền tới model
	public function GetId($id)
	{
		$data=$this->New_model->getDataById($id);
		$data=array('data_result'=>$data);

	}
	public function updateById()
	{
			$id=$this->input->post('id');
			$name=$this->input->post('ten');
		$this->New_model->Update($id,$name);
	}
	public function Delete($id)
	{
		if($this->New_model->DeleteById($id))
		{
			echo 'success';
		}
		else

		{
			echo 'lsoer';
		}

	}


//load danh mục vào tin
	public function search()
	{

		 $search = ($this->input->get("keyword"))? $this->input->get("keyword") : "NIL";
		

 /* echo site_url("new_controller/search/$search"); 
 $this->New_model->get_news_count($search);
 die();*/
		   
$data['result'] = $this->New_model->Search($search);
$arr=array('pani'=>$data);
$this->load->view('admin/search_view', $arr, FALSE);
	}
	public function newManagement()
	{		$result=$this->New_model->GetDanhMuc();
			$result2=$this->New_model->getNews();
				
			$config['base_url'] = base_url().'admin/new_controller/newManagement/';   
$config['total_rows'] =$this->New_model->sumNews(); 
$config['per_page'] = 3;     
$config['use_page_numbers'] = TRUE;     
$config['full_tag_open'] = '<ul class="pagination">';        
$config['full_tag_close'] = '</ul>';  
$config['attributes'] = array('class' => 'page-link');   
$config['first_link'] = 'First';        
$config['last_link'] = 'Last';   
$config['first_tag_open'] = '<li>';        
$config['first_tag_close'] = '</li>';        
$config['prev_link'] = '&laquo';        
$config['prev_tag_open'] = '<li class="prev">';        
$config['prev_tag_close'] = '</li>';        
$config['next_link'] = '&raquo';        
$config['next_tag_open'] = '<li>';        
$config['next_tag_close'] = '</li>';        
$config['last_tag_open'] = '<li>';        
$config['last_tag_close'] = '</li>';        
$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';        
$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';        
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';

$start = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
$this->pagination->initialize($config);        
$data['links'] = $this->pagination->create_links();     
$data['result'] = $this->New_model->loadNewsOfPage($config['per_page'],$start); 
			$arr=array('array_result'=>$result,'listNews'=>$result2,'pani'=>$data);
			$this->load->view('admin/new_view',$arr, FALSE);
	}
	//thêm tin
	public function add()

	{
		$result=$this->New_model->GetDanhMuc();
		$result=array('array_result'=>$result);
		$this->load->view('admin/add_new',$result,false);
	}
	public function addNews()
	{
		//xử lý upload file
	
					$target_dir = "uploads/";
					$target_file = $target_dir . basename($_FILES["image"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					// Check if image file is a actual image or fake image
					if(isset($_POST["submit"])) {
					    $check = getimagesize($_FILES["image"]["tmp_name"]);
					    if($check !== false) {
					        echo "File is an image - " . $check["mime"] . ".";
					        $uploadOk = 1;
					    } else {
					        echo "File is not an image.";
					        $uploadOk = 0;
					    }
					}
					// Check if file already exists
					if (file_exists($target_file)) {
					   // echo "Sorry, file already exists.";
					    $uploadOk = 0;
					}
					// Check file size
					if ($_FILES["image"]["size"] > 500000) {
					    echo "Sorry, your file is too large.";
					    $uploadOk = 0;
					}
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
					    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					    $uploadOk = 0;
					}
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
					   // echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
					} else {
					    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
					    } else {
					        echo "Sorry, there was an error uploading your file.";
					    }
					}

//end upload file
		$img=base_url()."uploads/".basename( $_FILES["image"]["name"]);
		$title=$this->input->post('title');
		$id_category=$this->input->post('category');
		$content=$this->input->post('content');
		$desc=$this->input->post('desc');
		$tacgia=$this->input->post('tacgia');
		if($this->New_model->insertNews($title,$id_category,$content,$img,$desc,$tacgia))
		{
			$this->load->view('admin/success');
		}
		else
		{
			$this->load->view('admin/erorr');
		}


	}
	//update new
	public function deleteNews($id)
	{
		if($this->New_model->deleteNew($id))
		{
			$this->load->view('admin/success');
		}
		else

		{
			$this->load->view('admin/erorr');
		}
	}
	//get DatabyID
	public function editNews($id)
	{
		$result=$this->New_model->getElementById($id);
		$category=$this->New_model->GetDanhMuc();

		$arr=array('arrayEdit'=>$result,'arrayCategory'=>$category);
		$this->load->view('admin/EditTinTuc', $arr, FALSE);
	}
	public function updateTintuc()
	{
		$old_image=$this->input->post('old-img');
		
		$img= $_FILES["image"]["name"];
	
		if(empty($img))
		{
			$img=$old_image;
			
		}
		else
		{
			//xử lý upload file
	
					$target_dir = "uploads/";
					$target_file = $target_dir . basename($_FILES["image"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					// Check if image file is a actual image or fake image
					if(isset($_POST["submit"])) {
					    $check = getimagesize($_FILES["image"]["tmp_name"]);
					    if($check !== false) {
					        echo "File is an image - " . $check["mime"] . ".";
					        $uploadOk = 1;
					    } else {
					        echo "File is not an image.";
					        $uploadOk = 0;
					    }
					}
					// Check if file already exists
					if (file_exists($target_file)) {
					  //  echo "Sorry, file already exists.";
					    $uploadOk = 0;
					}
					// Check file size
					if ($_FILES["image"]["size"] > 500000) {
					    echo "Sorry, your file is too large.";
					    $uploadOk = 0;
					}
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
					   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					    $uploadOk = 0;
					}
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
					   //echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
					} else {
					    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
					    } else {
					        echo "Sorry, there was an error uploading your file.";
					    }
					}

//end upload file
		$img=base_url()."uploads/".basename( $_FILES["image"]["name"]);
			//
		}
		
		
		$id=$this->input->post('id');
		
		$title=$this->input->post('title');
		$id_category=$this->input->post('category');
		$content=$this->input->post('content');
		$desc=$this->input->post('desc');
		$tacgia=$this->input->post('tacgia');
		if($this->New_model->updateTin($id,$img,$title,$id_category,$content,$desc,$tacgia))
		{
			$this->load->view('admin/success');
		}
		else
		{
			$this->load->view('admin/erorr');
		}
	}

	


	

}

/* End of file new_controller.php */
/* Location: ./application/controllers/new_controller.php */