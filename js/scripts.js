
$(function(){

	// console.log("It's working");
	$('.carousel').flickity({
	  // options
	  cellAlign: 'left',
	  contain: true,
	  wrapAround: true
	  // autoPlay: true
	  // setGallerySize: false
	});


	var sections = $('section')
	  , nav = $('.fixed_nav')
	  , nav_height = nav.outerHeight();
	$(window).on('scroll', function () {
	  var cur_pos = $(this).scrollTop();
	  
	  sections.each(function() {
	    var top = $(this).offset().top - ($(this).height()/2),
	        bottom = top + $(this).outerHeight();
	    
	    if (cur_pos >= top  && cur_pos <= bottom) {
	      nav.find('a').removeClass('active');
	      sections.removeClass('active');

	      // if((this).hasClass('light-nav')){
	      // 	nav.find('a').addClass('light');
	      // 	console.log('hey ho silver oh!')
	      // } else if (!(this).hasClass('light-nav')){
	      // 	nav.find('a').removeClass('light');
	      // 	console.log(' no no no!')
	      // }
	      
	      $(this).addClass('active');
	      nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');

	      
	    }
	    else if ($(this).attr('id') === "header"){
	    	// nav.find('a').removeClass('active');
	    	// nav.find('a').removeClass('active');
	    	nav.find('a[href="#header"]').addClass('active');
	    	
	    	
	    }
	   
	  });
	});
	nav.find('a').on('click', function () {
	  var $el = $(this)
	    , id = $el.attr('href');
	  
	  $('html, body').animate({
	    scrollTop: $(id).offset().top
	  }, 500);
	  
	  return false;
	});

	// window.sr = ScrollReveal().reveal('p, h1, h2, h3, .tag, .line, .description, .link_to_site, i');


	// var sections = $('section');
	// var nav = $('.fixed_nav');
	// var nav_height = nav.outerHeight();

	// $(window).on('scroll', function () {

	// 	var cur_pos =  $(this).scrollTop() + ($(this).height()/2);
	// 	// console.log(cur_pos);



	// 	sections.each(function() {
	// 		var top = $(this).offset().top;
	// 		var bottom = $(this).outerHeight();
	// 		console.log('working!');

	// 		if(cur_pos >= top && cur_pos <= bottom) {
	// 			nav.find('li').removeClass('active');



	// 			// $(this).addClass('active');
	// 			nav.find('a[href="#' +$(this).attr('id') +'"]').removeClass('inactive').addClass('active');
	// 		}
	// 	});

	// });
	

	// $(window).scroll(function() {
		
	//     var position = $(this).scrollTop();

	//     $('section').each(function() {
	//         var target = $(this).offset().top;
	//         var halfway = $(this).offset().top + ($(this).height()/2);
	//         var id = $(this).attr('id');

	        
	//         if (position >= target) {
	//             $('.fixed_nav > ul > a > li').removeClass('active');
	//             $('.fixed_nav > ul > a[href=#' + id + '] > li').removeClass('inactive');
	//             $('.fixed_nav > ul > a[href=#' + id + '] > li').addClass('active');

	//             console.log("running!");
	//         }

	//         // if (position >= halfway) {
	//         // 	$('.section_nav > ul > a[href=#' + id + '] > li').addClass('inactive');
	//         // }
	//     });
	// });;



});