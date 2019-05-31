<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css">
	<script type="text/javascript" src="<?= base_url() ?>js/jquery-3.3.1.min.js"></script>
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 
	<!--font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=vietnamese" rel="stylesheet">
	<script type="text/javascript" src="<?= base_url() ?>js/bootstrap.js"></script>
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
			    background-color: #81ecec;
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
</head>
<body>
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
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">

						<div class="card" >
						<h5 class="card-title text-center">Thông tin admin</h5>
						<div class="card-body">
							<div class="row">
						<?php foreach ($arr as $value): ?>
							
						
							<div class="col-sm-6">
								
							   			<div class="card">
										  <img class="card-img-top" src="<?= $value['image'] ?>" height="308" alt="Card image cap">
										  <div class="card-body text-center">
										    <h5 class="card-title">Tên: <?= $value['name'] ?></h5>
										    <p class="card-text">Email: <?= $value['email'] ?></p>
										    <p class="card-text">Số Điện Thoại:<?= $value['phone'] ?></p>
										  
										  </div>
										  <img src="<?= $value['avatar'] ?>" height="100" width="100" alt="..." class="img-thumbnail rounded-circle position-absolute" style="top: 46%;">
										</div>

							 		
							  	</div>
							
							<?php endforeach ?>
							</div>
							</div>
						</div>

					 </div>
						
							
							
							  
			</div>
		</div>
	</div>
</div>
s
<script>
	var pathname = window.location.pathname;
	var hostname=window.location.hostname;
	var link="http://"+hostname+":81"+pathname;
console.log(link);

		$('ul > li > a[href="'+link+'"]').parent().addClass('active1');
</script>
</body>
</html>