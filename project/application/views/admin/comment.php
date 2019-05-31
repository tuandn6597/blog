<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css">
	<script type="text/javascript" src="<?= base_url() ?>js/jquery-3.3.1.min.js"></script>
	 <link rel="stylesheet" href="<?= base_url() ?>fonts/css/all.css">  
	<!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> --> 
	<!--font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=vietnamese" rel="stylesheet">
	<script type="text/javascript" src="<?= base_url() ?>js/bootstrap.js"></script>
	<style>
	.left{
				width:25%;
			}
			.right {
		    position: relative;
		    width: 75%;
		}
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
			<nav class="navbar navbar-light bg-light mb-4">
			  <form  action="<?= base_url() ?>admin/comment/getAllComment" method="get" class="form-inline ml-auto">
			    <input class="form-control mr-sm-2" type="search" placeholder="Search"  name="keyword">
			    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="search">
			  </form>
			</nav>
			<div class="container">
				<div class="row">
					<?php foreach ($result as $value): ?>
						
					
					<div class="col-sm-4 mb-3">
						<div class="card-body">
							<div class='d-flex mb-3'>
								<img src='<?= base_url() ?>images/user.png' alt='' height='50'>
														
								<div class='sec2-b-content'>
									<a href=''  class='title-sec2-bot'>
										<?= $value['name'] ?>
									</a>
									<br>
							
									<p class='time mb-0'>
							
										 <span class='date'>
											<?= date('d/m/Y - G:i -A',$value['date']) ?>
										</span>
									</p>
									<p class='content-s3 mt-0'>					
									<?= $value['content'] ?>						
									</p>					
								</div>	
							</div>
							<div class="icon">
												<a href="<?= base_url() ?>admin/comment/deleteComment/<?= $value['id'] ?>">
												<button type="button" class="btn btn-outline-danger fas fa-trash-alt"></button>
												</a>
												
												<div class="reply">
													<form action="<?= base_url() ?>admin/comment/updateReply/<?= $value['id'] ?>" method="post">
														 <div class="form-group">
														    <label for="exampleFormControlTextarea1">Trả lời</label>
														    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="reply"></textarea>
														  </div>
														 
													<button type="submit" class="btn btn-outline-danger">OK</button>

													</form>
													
												</div>
							</div>
							<hr>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</div>
	</div>
</div>
<script>
	var pathname = window.location.pathname;
	var hostname=window.location.hostname;
	var link="http://"+hostname+":81"+pathname;
console.log(link);

		$('ul > li > a[href="'+link+'"]').parent().addClass('active1');
</script>
</body>
</html>