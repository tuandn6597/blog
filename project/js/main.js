$(document).ready(function(){
	var fol=$('.fol,.scroll').offset().top;
	var tag=1;
	//scroll to element
	$(window).scroll(function(){
		if($('html,body').scrollTop()>=fol-60)
		{
			if(tag==1)
			{
				$('.fol').addClass('test');
				$('.scroll-top').css({"display":"block"});
				tag=0;
			}

		}
		else
			{
				if(tag==0)
				{
					$('.fol').removeClass('test');
					$('.scroll-top').css({"display":"none"});
					tag=1;
				}	

			}

			

	});
	//scroll to Top
	$('.scroll-top').click(function(){
		
		$('html,body').animate({scrollTop:0},400);
	});
	//search

var tag1=1;
	$('.search').click(function(event) {
				event.preventDefault();
				if(tag1==1)
						{
									
							$('.form-search').removeClass('hideDown').addClass('hideUp');
							tag1=0;
							 event.preventDefault();
						}
						else
						{
							
							$('.form-search').removeClass('hideUp').addClass('hideDown');
							tag1=1;
							 event.preventDefault();
						}
	});
	//nav link active			
	var pathname = window.location.pathname;
	var hostname=window.location.hostname;
	var link="http://"+hostname+":81"+pathname;


		$('.navbar-nav > li > a[href="'+link+'"]').parent().addClass('active');
						
		var link_cate=$('.scroll a.link-cate.ins').attr('href');
		if(link_cate)
		{
			console.log('abc');
			$('.navbar-nav > li > a[href="'+link_cate+'"]').parent().addClass('active');
		}
	
	
})