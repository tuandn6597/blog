<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>News</title>
	<style>
		.main{
			display:flex;
			height:100%;
		}
		.left .card-header{
			 background-color: #81ecec;
			 color:white;
		}
			.left .card {
		 
		    height: 100%;
		   
			}
			.right{
				width:80%;

				
			}
			.card .list-group-item:hover,.active1 {
			    background-color: #81ecec !important;
			}
			.card .list-group-item:hover a{
			  text-decoration: none;
			}
			.card .list-group-item {
			    transition: 0.4s;
			    margin-bottom: 5px;
			    border: initial;
			    border-bottom: 1px solid #80808026;
			    border-radius: 6px;
			    transition:0.4s;
			}
			a{
				color:black !important;
			}
			body, html {
				width:100%;
			    height: 100%;
			}
			.left{
				width:25%;
			}
			.right {
		    position: relative;
		    width: 75%;
		}
	</style>
	<script type="text/javascript" src="<?= base_url() ?>js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css">
 <link rel="stylesheet" href="<?= base_url() ?>fonts/css/all.css">  
	<!--link-->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> --> 
	<script src="<?= base_url('public') ?>/ckeditor/ckeditor.js"></script>
	<script src="<?= base_url('public') ?>/ckfinder/ckfinder.js"></script>

</head>
<body>
<?php 
/*echo '<pre>';
var_dump( $pani['result']);*/

/*foreach ($pani['result'] as $value) {
echo '<pre>';
		var_dump($value['id_new']);

	
}*/


 ?>
<div class="main">
	<div class="left">
		<div class="card">
		  <div class="card-header text-center">
		   ADMIN
		  </div>
		  <div class="card-body">
			   <ul class="list-group list-group-flush">
			   <li class="list-group-item"> <a href="<?= base_url() ?>admin/Dashboard/user"><i class="fas fa-user-tie"></i> Thông tin Admin </a></li>
			     <li class="list-group-item"><a href="<?= base_url() ?>admin/new_controller/newManagement"><i class="fas fa-cog"></i> Quản lý tin</a></li>
			    <li class="list-group-item"><a href="<?= base_url() ?>admin/new_controller/GetData""><i class="far fa-list-alt"></i> Quản lý danh mục</a></li>
			    <li class="list-group-item"><a href="<?= base_url() ?>admin/comment/getAllComment""><i class="fas fa-comment"></i> Quản lý comment</a></li>
			       <li class="list-group-item"><a href="<?= base_url() ?>admin/Dashboard/logout"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>
			  </ul>
		  </div>
		</div>	
	</div><!--end left-->
<div class="right">

	<nav class="navbar navbar-light bg-light mb-4">
		<a href="<?= base_url() ?>admin/new_controller/add">
													<button type="button" class="btn btn-outline-danger fas fa-plus"></button>
												</a>
	  <form  action="<?= base_url() ?>admin/new_controller/search" method="get" class="form-inline ml-auto">
	    <input class="form-control mr-sm-2" type="search" placeholder="Search"  name="keyword">
	    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="search">
	  </form>
	</nav>
	<div class="container-fluid">
		<div class="row">
				
			 <div class="col-sm-12">
					
						
						<h5 class="card-header bg-primary text-light mb-4">Danh sách tin</h5>
						
						
								
					<div class="row">
									
						<?php	foreach ($pani['result'] as $value): ?> 
									<div class="col-sm-4">

										<div class="card h-100">
											
												<img class="card-img-top img-fluid" src="<?= $value['image'] ?>" alt="Card image cap">
												<div class="card-block">
													<h4 class="card-title" style="font-size:14px"><?= $value['title'] ?></h4>
													<p class="card-text" style="font-size:14px"><?= $value['description'] ?></p>
													<p class="card-text"><small class="text-muted"><?= date('d/m/Y - G:i -A',$value['date']) ?></small></p>
													<p class="card-text"> <?= $value['tacgia'] ?></p>
												</div>
												<div class="icon">
													<a href="<?= base_url() ?>admin/new_controller/deleteNews/<?= $value['id_new'] ?>">
													<button type="button" class="btn btn-outline-danger fas fa-trash-alt"></button>
												</a>
												<a href="<?= base_url() ?>admin/new_controller/editNews/<?= $value['id_new'] ?>">
													<button type="button" class="btn btn-outline-danger fas fa-pen"></button>
												</a>
												
												
												</div>
										</div>
									</div>
									<?php endforeach ?>
									<div style="margin-top:20px;margin-left:15px;">
									<?= $pani['links'] ?>
								</div>
							
							</div>
					
						
			</div> 
		</div>
		</div>
	</div>
</div>
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
             var pathname = window.location.pathname;
	var hostname=window.location.hostname;
	var link="http://"+hostname+":81"+pathname;
console.log(link);

		$('ul > li > a[href="'+link+'"]').parent().addClass('active1');
      
            </script>
	 <script type="text/javascript" src="<?= base_url() ?>js/bootstrap.js"></script>
	 
</body>
</html>