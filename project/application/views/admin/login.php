<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng Nhập</title>
	<link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
	<!-- <link rel="stylesheet" href="css/fontawesome.css"> -->
	<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> --> 
	<!--font-->
	 <link rel="stylesheet" href="<?= base_url() ?>fonts/css/all.css">  
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=vietnamese" rel="stylesheet">
	<script type="text/javascript" src="<?= base_url() ?>js/bootstrap.js"></script>
</head>
<body>
	<div class="menu-top">
		<div class="container">
			<div class="icon">
				<a href="https://www.facebook.com/kevjl.kjss" class="fab fa-facebook-f"></a>
				<a class="fab fa-twitter" href="https://www.facebook.com/kevjl.kjss"></a>
				<a href="https://github.com/tuandn6597" class="fab fa-github"></a>
				<a class="fab fa-google-plus-g" href="https://www.facebook.com/kevjl.kjss"></a>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-white rounded menu-center">
		<div class="container">
				 <a class="navbar-brand" href="#"><img src="<?= base_url() ?>images/logo.png" height="50" alt=""></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav ml-auto">
				      <li class="nav-item">
							        <a class="nav-link" href="<?= base_url() ?>home/home?>">Trang Chủ<span class="sr-only">(current)</span></a>
							     </li>
				    	<?php foreach ($category as $value): ?>
				    		
							     	 <li class="nav-item">
								        <a class="nav-link" href="<?= base_url() ?>home/home/tagdiv_category/<?= $value['id_danhmuc'] ?>"><?= $value['category_name'] ?></a>
								      </li>
								 
				    	<?php endforeach ?>
				      <li class="nav-item">
				        <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>

							<div class="card form-search">
								
									 	 <div class="card-body">
										   	<form action="<?= base_url() ?>home/home/search" method="get">
												  <div class="form-group input-group">
												  
												    <input type="text" class="form-control" id="formGroupExampleInput" name="keyword">
												    	 <div class="input-group-append">
													    <button class="btn btn-outline-danger" type="submit">search</button>
													  </div>
												  </div>
												 
											</form>
										</div>
							 </div>
						
				      </li>
				     
				    </ul>
				  
				  </div>
				 </div> <!-- end container -->
</nav> <!--end navbar-->
	<form class="form-login" action="<?= base_url() ?>admin/login/verify" method="post">
		<h5 class="text-center">Đăng Nhập</h5>
		  <div class="form-group">
		 
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="your email" name="email">
		  
		  </div>
		  <div class="form-group">
		  
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		  </div>
		 
		  <button type="submit" class="btn btn-outline-info btn-block">Đăng nhập</button>
</form>
<footer>
	<div class="container">
		<div class="row">
				<div class="col-sm-4">
					<div class="f-left">
						 <a class="navbar-brand" href="#"><img src="<?= base_url() ?>images/logo.png"  alt=""></a>
					</div><!-- end f-left -->
				</div>
				<div class="col-sm-4">
					<div class="f-center">
						<h5 class="f-title title-sec2 mb-2">
							About us
						</h5>
						<p class="f-center-content">
							Web này là blog về công nghệ,chúng tôi sẽ luôn chia sẽ về nhưng công nghệ mới nhất.

						</p>
						<p class="f-contact">
							<a href="https://www.facebook.com/kevjl.kjss" style="text-decoration: none;"><span style="color:white;">contact us:</span> <span style="color:#00cff3;">tuandn6597@gmail.com</span></a>
						</p>
					</div><!-- end f-center -->
				</div>
				<div class="col-sm-4">
					<div class="f-right">
						<h5 class="f-title title-sec2 mb-2">
							FOLLOW US
						</h5>
						<div class="f-icon">
							<a href="https://www.facebook.com/kevjl.kjss" class="fab fa-facebook-f"></a>
							<a class="fab fa-twitter" href="https://www.facebook.com/kevjl.kjss"></a>
							<a href="https://github.com/tuandn6597" class="fab fa-github"></a>
							<a class="fab fa-google-plus-g" href="https://www.facebook.com/kevjl.kjss"></a>
						</div>
					</div> <!-- end f-right -->
				</div>
	</div>
</div><!--  end container -->
</footer>
<div class="footer-producer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<a href="" class="title-sec2-bot">© Producer by Nhóm</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>