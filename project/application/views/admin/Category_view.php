<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Category</title>
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
	<!-- <link rel="stylesheet" href="css/fontawesome.css"> -->
	<!--link js-->
	<script type="text/javascript" src="<?= base_url() ?>js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css">
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
	<!--link-->
	 <link rel="stylesheet" href="<?= base_url() ?>fonts/css/all.css">  
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  -->
	
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
	  <form  action="<?= base_url() ?>admin/new_controller/GetData" method="post" class="form-inline ml-auto">
	    <input class="form-control mr-sm-2" type="search" placeholder="Search"  name="keyword">
	    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="search">
	  </form>
	</nav>
	     <div class="container">
	     	<div class="row">
	     		<div class="col-sm-4 text-center">
	     			<h5 class="text-success">Thêm Danh Mục</h5>
	     			<!-- <form action="<?= base_url() ?>new_controller/InsertData" method="post"> -->
	     			<fieldset class="form-group">
	     				
	     				<input type="text" name="ten" class="form-control" id="tendm" placeholder="Tên danh mục">
	     		
	     			</fieldset>
	     			<fieldset class="form-group">
	     				
	     				<input type="text" name="order" class="form-control" id="order" placeholder="số thứ tự hiển thị">
	     		
	     			</fieldset>
	     			<fieldset class="form-group">
	     			<!-- <input type="submit"  class="form-control" value="Add" > -->
	     			<button type="button" class="btn btn-outline-info btn-block" id="btn-add">Add</button>
	     			</fieldset>
	     		<!-- </form> -->
	     		</div>

			
	     		<div class="col-sm-8">
	     			<h5 class="text-success text-center">List Danh Mục</h5>
	     			<div class="card-group">
							
	     			<?php foreach ($array_result as $value): ?>
	     				<div class="col-sm-4 mb-3">
	     					<div class="card text-white bg-success">
	     						
		     					<div class="card-block">
		     						
		     						<p class="card-text text-center name"><?= $value['category_name'] ?></p>
		     						
		     						<input type="text" id="u-name" value="<?= $value['category_name'] ?>" class="d-none">
		     						<a data-href="<?= $value['id_danhmuc'] ?>" class="fas fa-pen btn btn-info" id="edit"> </a>
		     						<a data-href="<?= $value['id_danhmuc'] ?>" class="fas fa-trash-alt btn btn-warning" id="delete"> </a>
		     						<a data-href="<?= $value['id_danhmuc'] ?>" class="fas fa-check btn btn-primary d-none" id="save">Save</a>
		     						
		     					</div>
	     					</div>
	     				</div><!--end col-sm-4-->
	     			<?php endforeach ?>
	     				


	     				
	     			</div>
	     	</div>
	     		
	     		

	     	</div>
	     </div>
	    </div>
	    </div>
	    <script type="text/javascript" src="<?= base_url() ?>js/bootstrap.js"></script>
	     <script>
var pathname = window.location.pathname;
	var hostname=window.location.hostname;
	var link="http://"+hostname+":81"+pathname;
console.log(link);

		$('ul > li > a[href="'+link+'"]').parent().addClass('active1');
						
		/*var link_cate=$('.scroll a.link-cate.ins').attr('href');
		if(link_cate)
		{
			console.log('abc');
			$('.navbar-nav > li > a[href="'+link_cate+'"]').parent().addClass('active');
		}*/
	
	     	//ajax update
	     	//click vào edit
	     		$('body').on('click', '#edit', function(event) { // lắng nghe toàn bộ phần tử được thêm vào
				event.preventDefault();
				/* Act on the event */
						$(this).parent().children('.name,#edit,#delete').addClass('d-none');
						$(this).parent().children('#u-name,#save').removeClass('d-none');

				
				
				return false; // để cho không chuyển đến link khác
			});
	     		//click vào save
	     		$('body').on('click', '#save', function(event) { // lắng nghe toàn bộ phần tử được thêm vào
				event.preventDefault();
				/* Act on the event */
					var id=$(this).data('href');
					var ten=$(this).parent().children('#u-name').val();
						
						$(this).parent().children('#u-name,#save').addClass('d-none');
						$(this).parent().children('#edit,#delete').removeClass('d-none');
						$(this).parent().children('.name').html(ten).removeClass('d-none');
						$(this).parent().children('#u-name').value=ten;


						$.ajax({
							url: '<?= base_url() ?>admin/new_controller/updateById',
							type: 'post',
							dataType: 'json',
							data: {id: id,ten:ten},
						})
						.done(function() {
							console.log("success");
						})
						.fail(function() {
							console.log("error");
						})
						.always(function() {
							console.log("complete");
						
						});
						

				
				
				return false; // để cho không chuyển đến link khác
			});

	     	//ajax add
	     	$('#btn-add').click(function(event) {

	     		/* Act on the event */
	     		$.ajax({
	     			url: '<?= base_url() ?>admin/new_controller/InsertData',
	     			type: 'post',
	     			dataType: 'json',
	     			data: {ten: $('#tendm').val(),order:$('#order').val()},
	     		})
	     		.done(function() {
	     			//console.log("success");
	     		})
	     		.fail(function() {
	     			console.log("error");
	     		})
	     		.always(function(res) {
	     			//console.log("complete");
	     			
	     			content='<div class="col-sm-4 mb-3">';
	     				content+='<div class="card text-white bg-success">';
	     					content+='<div class="card-block">';
	     						content+='<p class="card-text text-center name">'+$('#tendm').val()+'</p>';
	     						
	     							content+='<input type="text" id="u-name" class="d-none" value="'+$('#tendm').val()+'">';
	     							content+='<a data-href="'+res+'" class="fas fa-pen btn btn-info" id="edit"> </a>';
	     								content+='<a data-href="'+res+'" class="fas fa-trash-alt btn btn-warning" id="delete"> </a>';
	     								content+='<a data-href="'+res+'" class="fas fa-check btn btn-primary d-none" id="save">Save</a>';
	     					content+='</div>';
	     				content+='</div>';
	     			content+='</div>';
	     			$('.card-group').append(content);

	     		});
	     		
	     	});
	     	//ajax delete
	     		$('body').on('click', '#delete', function(event) { // lắng nghe toàn bộ phần tử được thêm vào
				event.preventDefault();
				/* Act on the event */
				var obj=$(this).parent().parent().parent();

				/* Act on the event */
				var id=$(this).data('href');
				$.ajax({
					url: '<?= base_url() ?>admin/new_controller/Delete/'+id,
					type: 'post',
					dataType: 'json',
					
				})
				.done(function() {
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
						obj.remove();
				});
				
				return false; // để cho không chuyển đến link khác
			});
	     </script>
</body>
</html>