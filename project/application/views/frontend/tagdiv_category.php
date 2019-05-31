<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project Đồ Án 1</title>

	<link rel="shortcut icon" href="<?= base_url() ?>images/logo-title.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- link css -->
	<link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
	<!-- <link rel="stylesheet" href="css/fontawesome.css"> -->
	<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css">
	 <link rel="stylesheet" href="<?= base_url() ?>fonts/css/all.css">  
	<!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  -->
	<!--font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=vietnamese" rel="stylesheet">
	
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
				  <a class="navbar-brand" href="<?= base_url() ?>home/home"><img src="<?= base_url() ?>images/logo.png" height="50" alt=""></a>
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
<!--section1-->

	<div class="container scroll">
		<div class="row">
			<div class="col-md-8 mt-4">
				<div class="content-sec2">
						<div class="card-body">
							<div class="sec2-top">
								<div class="row">
									<?php foreach ($result as $value): ?>
										
								
										<div class="col-lg-6">
											<div class="sec2-top-b1">
												<a href="<?= base_url() ?>home/home/news_detail/<?= $value['id_new'] ?>"><img src="<?= $value['image'] ?>" alt=""></a>
												<a href="<?= base_url() ?>home/home/news_detail/<?= $value['id_new'] ?>"class="sec2-title"><?= $value['title'] ?></a>
												<p class="time"><span class="date">by -</span><span class="tacgia"><?= $value['tacgia'] ?></span> <span class="date"><?= date('d/m/Y - G:i -A',$value['date']) ?></span>
												<a href="" class="link-cate ins"><?= $value['category_name'] ?></a>
												</p>
												<p class="sec2-content"><?= $value['description'] ?></p>
											</div><!--end sec2-top-b1-->
										</div>
									<?php endforeach ?>
								</div><!--end row-->
							</div><!--end sec2-top-->
						</div><!--end cardbody-->
				</div>
			
			</div><!--end col-sm-8-->
			
			<div class="col-md-4 mt-4">
				<div class="card mb-4" >
					<h5 class="title-sec2 sec3 removesec">Category
					</h5>
					  <div class="card-body">
					  	<?php foreach ($category as $value): ?>
					  		<a href="<?= $value['id_danhmuc'] ?>" class="category">
					  			<?= $value['category_name'] ?>
					  		</a>
					  	<?php endforeach ?>
					  		
					  		
					  </div>
					</div>
					<div class="card content-sec2 sec3" >
					 <div class="card-header bg-white">Tin mới nhất</div>
						  <div class="card-body">
						  	<?php foreach ($tinmoi as $value): ?>
						  		
						  	
						    	<div class="d-flex mt-3 remove-flex">
									
									<a class="news-detail-img" href="<?= base_url() ?>home/home/news_detail/<?= $value['id_new'] ?>"><img src="<?= $value['image'] ?>" width="130" height="100" alt=""></a>
									
									<div class="sec2-b-content remove-ml">
										<a href="" class="title-sec2-bot s-14"><?= $value['title'] ?></a>
										<br>
										<span class="date"><?= date('d/m/Y - G:i -A',$value['date']) ?></span>
									</div>
								</div> <!--end 1block-->
							<?php endforeach ?>
						  </div>
					</div>
				</div>
			</div><!--end col-sm-4-->
		</div>	
		<div class="container">
		<div class="row">
			<div class="col-md-8" class="fol">
				<hr>
				<div class="fol-icon" style="margin-top:20px;">
					<div class="row">
						<div class="col-lg-3 col-xs-6" ">
								
								
									<a href="https://www.facebook.com/kevjl.kjss" id="i1" class="fab fa-facebook-f brline a-one">	<span style="font-size:12px;margin-left: 20px;">facebook</span>	</a>
								
								
						</div> <!--end col-sm-3-->
						<div class="col-lg-3 col-xs-6"">
								
									<a href="https://www.facebook.com/kevjl.kjss" id="i2"  class="fab fa-twitter brline a-one"><span style="font-size:12px;margin-left: 18px;">twitter</span></a>
									
								
								
						</div> <!--end col-sm-3-->
						<div class="col-lg-3 col-xs-6" ">
								
									<a href="https://www.facebook.com/kevjl.kjss" id="i3"  class="fab fa-github brline a-one"><span style="font-size:12px;margin-left: 18px;">github</span></a>

									
								
							
						</div> <!--end col-sm-3-->
						<div class="col-lg-3 col-xs-6">
								
									<a href="https://www.facebook.com/kevjl.kjss" id="i4"  class="fab fa-google-plus-g brline a-one">
										<span style="font-size:12px;margin-left: 10px;">gmail</span>
									</a>
									
									
								
						</div> <!--end col-sm-3-->
					</div>
								

								
								
				</div><!--end icon icon-follow-->
				<hr>
			</div>

		</div>	
	</div>
	</div>	
	


 <footer>
	<div class="container">
		<div class="row">
				<div class="col-sm-4">
					<div class="f-left">
						 <a class="navbar-brand" href="<?= base_url() ?>home/home"><img src="<?= base_url() ?>images/logo-footer.png"  alt=""></a>
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
							<a href="https://www.facebook.com/kevjl.kjss" class="fab fa-facebook-f mb-3"></a>
							<a class="fab fa-twitter mb-3"  href="https://www.facebook.com/kevjl.kjss"></a>
							<a href="https://github.com/tuandn6597" class="fab fa-github mb-3"></a>
							<a class="fab fa-google-plus-g mb-3" href="https://www.facebook.com/kevjl.kjss"></a>
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

<!--scrollTop-->
<div class="container">
	<div class="scroll-top">
	<i class="fas fa-chevron-up"></i>
	</div>
</div>

	<!--link js-->
	<script type="text/javascript" src="<?= base_url() ?>js/jquery-3.3.1.min.js"></script>
	<!--<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>-->
	<script type="text/javascript" src="<?= base_url() ?>js/main.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>js/bootstrap.js"></script>

</body>
</html>