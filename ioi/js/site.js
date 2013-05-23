
	/* Typograhpy */
	Cufon.replace('#main> li', {
				fontFamily: "Interstate",
				hover: true,
				hoverables: { li: true },
				ignore: { ul: true },
				textless: { li: true }
	});
	
	Cufon.replace('h2.headings', {
				fontFamily: "Interstate",
				hover: true,
				hoverables: { li: true },
				ignore: { ul: true },
				textless: { li: true }
	});
	
	Cufon.replace('.single h2', {
				fontFamily: "Interstate",
				hover: true,
				hoverables: { li: true },
				ignore: { ul: true },
				textless: { li: true }
	});
	
	Cufon.replace ('h1.main_title', {
				fontFamily: "Interstate",
				hover: true,
				hoverables: { li: true },
				ignore: { ul: true },
				textless: { li: true }
	});
	
	Cufon.replace ('h3', {
				fontFamily: "Interstate",
				hover: true,
				hoverables: { li: true },
				ignore: { ul: true },
				textless: { li: true }
	});
	
	Cufon.replace ('h2.tag_line', {
				fontFamily: "Interstate-Light",
				hover: true,
				hoverables: { li: true },
				ignore: { ul: true },
				textless: { li: true }
	});
	
	
	jQuery(document).ready(function($) {
		
		
		
		
		/* Navigation */
		$(".current-menu-item").addClass('active');
		
		/* Navigation SuperFish */
		$('#main-menu ul.sfmenu').superfish({ 
				delay:       1,								// 0.1 second delay on mouseout 
				autoArrows: false,
				speed: 0,
				dropShadows: false								// disable drop shadows 
			});
			
		$("#main-menu ul li").hover(
		  function () {
		    $(this).addClass("lihover");
		  },
		  function () {
		    $(this).removeClass("lihover");
		  }
		);
		
		$('#main').mobileMenu({
		    defaultText: 'Navigate to...',
		    className: 'select-menu',
		    subMenuDash: '&ndash;'
		});
		
	/*publications */
	$(".collapse").collapse();
	
	
		
	/* News Items*/
		$(".show_hide").click(function(e){
		    
			$("div.news_excerpt").show('drop', {direction: 'left',duration: 0,}, function(){});
			
		 	$("div.news_content").hide('drop', { direction: 'left', duration: 0, easing: ''}, function(){});		
			
			$(this).parent("div").next("div.news_content").show('drop', {
		  		direction: 'left',
		  		duration: 500,
			});
			
			$(this).parent("div.news_excerpt").hide('drop', {
			  direction: 'left',
			  duration: 0,
			});

		 
		   
		
		  
		
		   
		 	return false;
		  
		    
		    });
		
	     $(".button_hide").click(function(e){
			 $(this).parent("div").prev("div.news_excerpt").show('drop', {direction: 'left',duration: 1000,}, function(){});
		   $(this).closest("div.news_content").hide('drop', { direction: 'left', duration: 500, });
		  
		 	return false;


		    });
		
	/*Find first paragraph */
	$(function() {
	  $(".news_content").each(function() {
	    $(this).find("p:first").addClass("first");
	  });
	});
	
	$(function() {
	  $(".single").each(function() {
	    $(this).find("p:first").addClass("first");
	  });
	});
		
	/*Workers QTip */
	$('div.worker').each(function() // Retrieve all div elements with class 'event' and an ID
	{
	   $(this).qtip({
	      content: $(this).children('div.myqtip-content'), // Use the contents of the child myqtip-content element.
	      	position: {
			      corner: {
			         target: 'bottomMiddle',
			         tooltip: 'topMiddle'
			      }
			   }
		  
	   });
	});
	
		
	/* Featured Items*/
		$('.big-01').show();
	    $('.small-01').hide();
	

		$('.small-01').click(function() {
		     $('.big-03').hide();
		    $('.big-04').hide();
		    $('.big-02').hide();
		    $('.big-01').show();
		    $(this).hide();
		    $('.small-02').show();
		    $('.small-03').show();
		    $('.small-04').show();

		});

		$('.small-02').click(function() {
		    $('.big-01').hide();
		    $('.big-03').hide();
		    $('.big-04').hide();
		    $('.big-02').show();
		    $(this).hide();
		    $('.small-01').show();
		    $('.small-03').show();
		    $('.small-04').show();

		});

		$('.small-03').click(function() {
		    $('.big-01').hide();
		     $('.big-02').hide();
		    $('.big-04').hide();
		    $('.big-03').show();
		    $(this).hide();
		    $('.small-01').show();
		    $('.small-02').show();
		    $('.small-04').show();

		});

		$('.small-04').click(function() {
		    $('.big-01').hide();
		     $('.big-02').hide();
		    $('.big-03').hide();
		    $('.big-04').show();
		    $(this).hide();
		    $('.small-01').show();
		    $('.small-02').show();
		    $('.small-03').show();

		});
	});

