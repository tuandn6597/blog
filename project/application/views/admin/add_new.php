<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa tin</title>
		<script type="text/javascript" src="<?= base_url() ?>js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css">
	<!--link-->
	 <link rel="stylesheet" href="<?= base_url() ?>fonts/css/all.css">  
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> --> 
	<script src="<?= base_url('public') ?>/ckeditor/ckeditor.js"></script>
	<script src="<?= base_url('public') ?>/ckfinder/ckfinder.js"></script>
</head>
<body>
	
	<div class="container">
		<div class="row">
			
 <div class="col-sm-12">
							
							<div class="card">
								<div class="card-header text-center">Thêm tin</div>
								<div class="card-body">
							<form action="<?= base_url() ?>admin/new_controller/addNews" method="post" enctype="multipart/form-data">
									
								<div class="form-row">
									<div class="col">
									<fieldset class="form-group">
										<label for="formGroupExampleInput">Tiêu đề tin</label>
										<input type="text" class="form-control" id="title" placeholder="Tiêu đề" name="title" >
									</fieldset>
									<fieldset class="form-group">
										<label for="formGroupExampleInput">Ảnh Tin</label>
										<input type="file" class="form-control" id="img" name="image" >
									</fieldset>
								
									<fieldset class="form-group">
										
										<textarea name="desc" id="" cols="30" rows="6" placeholder="Trích dẫn "></textarea>
									</fieldset>
									
								<fieldset class="form-group">
									<label for="formGroupExampleInput">Danh Mục</label>
									<br>
									<select name="category" id="">
									<?php foreach ($array_result as $value): ?>
										<option value="<?= $value['id_danhmuc'] ?>"><?= $value['category_name'] ?></option>
												  
									<?php endforeach ?>
												    
												 
									</select>
									
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput"> Người đăng</label>
									<input type="text" class="form-control" id="tacgia" placeholder="Tên Người đăng" name="tacgia" >
								</fieldset>
							</div>
								
									<fieldset class="form-group col">
										<label for="formGroupExampleInput">Nội dung tin</label>
										<textarea name="content" id="content"  cols="30" rows="10"></textarea>
									</fieldset>

									
							</div>
							<fieldset class="form-group">
									
									<input type="submit" class="form-control btn btn-outline-danger" id="submit" value="Thêm tin">
								</fieldset>
							</form>
							
						</div>
				</div><!-- end cot trai  -->
			</div>
		</div>
	 <script type="text/javascript" src="<?= base_url() ?>js/bootstrap.js"></script>
	 <script>
                // Replace the <textarea id="content"> with a CKEditor
                // instance, using default configuration.
             CKEDITOR.replace( 'content',
					 {
					     filebrowserBrowseUrl: '<?= base_url('public') ?>/ckfinder/ckfinder.html',
					     filebrowserImageBrowseUrl: '<?= base_url('public') ?>/ckfinder/ckfinder.html?type=Images',
					     filebrowserUploadUrl: '<?= base_url('public') ?>/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
					     filebrowserImageUploadUrl: '<?= base_url('public') ?>/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
					 });

      
            </script>
</body>
</html>