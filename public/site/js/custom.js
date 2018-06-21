/**	
	Custom JS
	
	1. HEADER CONTENT SLIDE
	2. FIXED MENU
	3. COUNTER
	4. TESTIMONIAL SLIDE (SLICK SLIDER)
	5. CLIENT SLIDE (SLICK SLIDER)
	6. SCROLL TOP BUTTON
	7. MENU SMOOTH SCROLLING
	8. LIGHTBOX ( FOR PORTFOLIO POPUP VIEW ) 
	9. MOBILE MENU CLOSE 
	10. PRELOADER 
	11. INSTAGRAM SLIDER (SLICK SLIDER)
	12. WOW ANIMATION 	
	13. CUSTOM EVENTS
	
**/

jQuery(function($){


	/* ----------------------------------------------------------- */
	/*  1. HEADER CONTENT SLIDE (SLICK SLIDER)
	/* ----------------------------------------------------------- */

	jQuery('.header-slide').slick({
		dots: false,
		infinite: true,
		speed: 500,
		arrows:false, 
		autoplay: true,     
		slidesToShow: 1,
		slide: 'span',
		fade: true,
		cssEase: 'linear'
	});

	/* ----------------------------------------------------------- */
	/*  2. FIXED MENU
	/* ----------------------------------------------------------- */
 
	jQuery(window).bind('scroll', function () {
			if ($(window).scrollTop() > 700) {
				$('.main-navbar').addClass('navbar-fixed-top');
				$('.logo').addClass('logo-compressed');
				$('.main-nav li a').addClass('less-padding');
				$('.search-area').css('height','44');
				$('.search-area input[type="text"]').css('top','35%');
				$(".main-navbar").addClass('header-shadow');
		} else {
			$('.main-navbar').removeClass('navbar-fixed-top');
			$('.logo').removeClass('logo-compressed');
			$('.main-nav li a').removeClass('less-padding');
			$('.search-area').css('height','60');
			$('.search-area input[type="text"]').css('top','11%');
				$(".main-navbar").removeClass('header-shadow');
		}
	});

	/* ----------------------------------------------------------- */
	/*  3. COUNTER
	/* ----------------------------------------------------------- */

	jQuery('.counter').counterUp({
		delay: 10,
		time: 1000
	});


	/* ----------------------------------------------------------- */
	/*  4. TESTIMONIAL SLIDE(SLICK SLIDER)
	/* ----------------------------------------------------------- */

	jQuery('.testimonial-slider').slick({
		dots: false,
		infinite: true,
		speed: 500,
		arrows:true, 
		autoplay: true,     
		slidesToShow: 1,
		slide: 'div',		
		cssEase: 'linear'
	});

	/* ----------------------------------------------------------- */
	/*  5. CLIENT SLIDE (SLICK SLIDER)
	/* ----------------------------------------------------------- */

	$('.client-table').slick({
	  dots: false,
	  infinite: true,
	  arrows:false, 
	  speed: 300,
	  autoplay: true,     
	  slidesToShow: 6,
	  slidesToScroll: 6,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 4,
			slidesToScroll: 4,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	  ]
	});

	/* ----------------------------------------------------------- */
	/*  6. SCROLL TOP BUTTON
	/* ----------------------------------------------------------- */

	//Check to see if the window is top if not then display button

	  jQuery(window).scroll(function(){
		if ($(this).scrollTop() > 300) {
		  $('.scrollToTop').fadeIn();
		} else {
		  $('.scrollToTop').fadeOut();
		}
	  });
	   
	  //Click event to scroll to top

	  jQuery('.scrollToTop').on('click',function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	  });

	/* ----------------------------------------------------------- */
	/*  7. MENU SMOOTH SCROLLING
	/* ----------------------------------------------------------- */ 
	
		//MENU SCROLLING WITH ACTIVE ITEM SELECTED

		// Cache selectors
		var lastId,
		topMenu = $(".main-nav"),
		topMenuHeight = topMenu.outerHeight()+13,
		// All list items
		menuItems = topMenu.find('a[href^=\\#]'),
		// Anchors corresponding to menu items
		scrollItems = menuItems.map(function(){
		  var item = $($(this).attr("href"));
		  if (item.length) { return item; }
		});

		// Bind click handler to menu items
		// so we can get a fancy scroll animation
		menuItems.on('click',function(e){
					$( ".main-nav li" ).first().removeClass('active');
		  var href = $(this).attr("href"),
			  offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+32;
		  jQuery('html, body').stop().animate({ 
			  scrollTop: offsetTop
		  }, 1500);
		  e.preventDefault();
		});
				$(".scroll-about").on('click',function(e){
		  var href = $(this).attr("href"),
			  offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+32;
		  jQuery('html, body').stop().animate({ 
			  scrollTop: offsetTop
		  }, 1500);
		  e.preventDefault();
		});

		// Bind to scroll
		jQuery(window).on('scroll',function(){
		   // Get container scroll position
		   var fromTop = $(this).scrollTop()+topMenuHeight;
		   
		   // Get id of current scroll item
		   var cur = scrollItems.map(function(){
			 if ($(this).offset().top < fromTop)
			   return this;
		   });
		   // Get the id of the current element
		   cur = cur[cur.length-1];
		   var id = cur && cur.length ? cur[0].id : "";
		   
		   if (lastId !== id) {
			   lastId = id;
			   // Set/remove active class
			   menuItems
				 .parent().removeClass("active")
				 .end().filter("[href=\\#"+id+"]").parent().addClass("active");
		   }
		})

	/* ----------------------------------------------------------- */
	/*  8. LIGHTBOX ( FOR PORTFOLIO POPUP VIEW ) 
	/* ----------------------------------------------------------- */ 
	
	$('body').append("<div id='portfolio-popup'><div class='portfolio-popup-area'><div class='portfolio-popup-inner'></div></div></div>");
	
	// WHEN CLICK PLAY BUTTON 
	
	jQuery('.portfolio-social-icon').on('click', function(event) {
	  event.preventDefault();
	  $('#portfolio-popup').addClass("portfolio-popup-show");
	  $('#portfolio-popup').animate({
		  "opacity": 1
	  },500);   
	  var portfolio_detailscontent = $(this).parent(".single-item-content").find(".portfolio-detail").html();
	  $(".portfolio-popup-inner").html(portfolio_detailscontent);     

	});  
		   
	// WHEN CLICK CLOSE BUTTON
	
	$(document).on('click','.modal-close-btn', function(event) {     
		event.preventDefault();
		$('#portfolio-popup').removeClass("portfolio-popup-show");
		$('#portfolio-popup').animate({
			  "opacity": 0
		},500);  

	});

	/* ----------------------------------------------------------- */
	/*  9. MOBILE MENU CLOSE 
	/* ----------------------------------------------------------- */ 

	jQuery('.navbar-nav').on('click', 'li a', function() {
	  $('.in').collapse('hide');
	});

	/* ----------------------------------------------------------- */
	/*  10. PRELOADER 
	/* ----------------------------------------------------------- */ 

	jQuery(window).load(function() { // makes sure the whole site is loaded
			$('.loader').fadeOut(); // will first fade out the loading animation
			$('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
			$('body').delay(100).css({'overflow':'visible'});
		});

		/* ----------------------------------------------------------- */
	/*  11. INSTAGRAM SLIDER (SLICK SLIDER)
	/* ----------------------------------------------------------- */ 

	jQuery('.instagram-feed').slick({
		dots: true,
		infinite: true,
		speed: 500,
		arrows:true, 
		autoplay: true,     
				slidesToShow: 1,
		slide: 'div',		
		cssEase: 'linear'
	});

	/* ----------------------------------------------------------- */
	/*  12. WOW ANIMATION
	/* ----------------------------------------------------------- */ 

	wow = new WOW(
	  {
		animateClass: 'animated',
		offset:       100,
		callback:     function(box) {
		  console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
		}
	  }
	);
	wow.init();

	/* ----------------------------------------------------------- */
	/*  13. CUSTOM EVENTS
	/* ----------------------------------------------------------- */
		// map show
		$(".map-show").on('click',function(){
			$("#google-map").slideToggle('slow',function(){
				if($(".map-show i").hasClass( "fa-angle-down" )){
					$(".map-show i").removeClass("fa-angle-down");
					$(".map-show i").addClass("fa-angle-up");
				}else{
					$(".map-show i").removeClass("fa-angle-up");
					$(".map-show i").addClass("fa-angle-down");
				}
			   
			});
		});

	var 	r = $(".alert-danger", e),
			i = $(".alert-success", e);

	var e = $(".contact-form").validate({
		errorElement: 	"span",
		errorClass: 	"help-block help-block-error",
		focusInvalid: 	!1,
		ignore: 		".note-editable.panel-body",
		rules: {
			nome: {
				required: 	true,
				maxlength: 	50,
			},
			email: {
				required: 	true,
				email: 		true,
			},
			descricao: {
				required: 	true,
				minlength:  10
			},
		},
		messages: {
			nome: { 
				required: 	"Nome Obrigatório", 
				maxlength: 	"Nome excede os 50 caracteres"
			},
			email: { 
				required: 	"Email Obrigatório", 
				email: 		"Email inválido" 
			},
			descricao: { 
				required: 	"Campo obrigatório", 
				minlength: jQuery.validator.format("Este campo requer no minimo {0} caracteres!")
			},
		},
		invalidHandler: function(e, t) {
			i.hide(), r.show()
		},
		highlight: function(e) {
			$(e).closest(".form-group").addClass("has-error")
		},
		unhighlight: function(e) {
			$(e).closest(".form-group").removeClass("has-error")
		},
		success: function(e) {
			e.closest(".form-group").removeClass("has-error")
		},
		submitHandler: function (form, event) {
			// console.log("teste");
			 $.ajax({
				type: 		"POST",
				url: 		"/mail",
				data: 		$(form).serialize(),
				dataType: 	'json',
				success: function (data) {
					if( data ){
						$(".contact-form").prepend( data.msg ).delay(3000).queue(function(){ $(".alert.alert-success").fadeOut(); });
						$(".contact-form").find("input[type=text],input[type=email], textarea").val("");
					}
				},
					error: function(data, error) {
					console.log(data);
					console.log(error.responseText);
				}
			});
			return false; // required to block normal submit since you used ajax
		}
	});

	var e = $(".cadastro").validate({
		errorElement: 	"span",
		errorClass: 'help-block',
		errorPlacement: function(error, element) {
			if(element.parent('.input-group').length) {
				error.insertAfter(element.parent());
			} else {
				error.insertAfter(element);
			}
		},
		focusInvalid: 	!1,
		rules: {
			nome: {
				required: 	true,
				maxlength: 	50,
			},
			email: {
				required: 	true,
				email: 		true,
				verificarEmail: true,
			},
			contato: 	{required: 	true,},
			cpf: 		{required: 	true, verificarCPF: true},
			cnpj: 		{required: 	true, verificarCNPJ: true},
			cep: 		{required: 	true,},
			numero: 	{required: 	true, maxlength: 6},
		},
		messages: {
			nome: { 
				required: 	"Nome Obrigatório", 
				maxlength: 	"Nome excede os 50 caracteres"
			},
			email: { 
				required: 	"Email Obrigatório", 
				email: 		"Email inválido",
				verificarEmail: "Email em uso!"
			},
			contato: 	{required: 	"Obrigatório ter um telefone/celular",},
			cpf: 		{required: 	"CPF obrigatório", verificarCPF: "CPF encontra-se em uso ou inválido!"},
			cnpj: 		{required: 	"CNPJ obrigatório", verificarCNPJ: "CNPJ encontra-se em uso ou inválido!"},
			cep: 		{required: 	"CEP obrigatório",},
			numero: 	{required: 	"Número Obrigatório", maxlength: true},
			
		},
		
		highlight: function(element) {
			$(element).closest('.form-group').addClass('has-error');
		},
		unhighlight: function(element) {
			// console.log()
			$(element).closest('.form-group').removeClass('has-error');
		},
		success: function(e) {
			e.closest(".form-group").removeClass("has-error")
		},
		submitHandler: function (form, event) {
			 $.ajax({
				type: 		"POST",
				url: 		"/cadastro/novo",
				data: 		$(form).serialize(),
				dataType: 	'json',
				success: function (data) {
					console.log(data);
					$(".cadastro .modal-alert-info").empty();
					if( data.sucesso ){
						location.reload();
						// $(".cadastro .modal-alert-info").append( data.msg ).delay(3000).queue(function(){ location.reload(); });
						// $(".cadastro").find("input[type=text],input[type=email], input[type=password], textarea").val("");
					} else {
						$(".cadastro .modal-alert-info").append( data.msg );
					}
				}, error: function(data, error) {
					console.log(data);
					console.log(error.responseText);
				}
			});
			return false; // required to block normal submit since you used ajax
		}
	});

	var response = true;
	// Verificar EMAIL
	$.validator.addMethod("verificarEmail", function(value, element){
		$.ajax({
			type: 		"POST",
			url: 		"/cadastro/verificar-email",
			data: 		"email="+value,
			dataType: 	"json",
			success: function(msg){
				response = msg.sucesso;
			}
		});
		return response;
	}, "Este Email encontra-se em uso!");

	// Verificar CPF
	$.validator.addMethod("verificarCPF", function(value, element){
		$.ajax({
			type: 		"POST",
			url: 		"/cadastro/verificar-cpf",
			data: 		"cpf="+value,
			dataType: 	"json",
			success: function(msg){
				response = msg.sucesso;
			}
		});
		return response;
	}, "CPF esta <b>inválido</b> ou <b>encontra-se em uso</b>");

	// VERIFICAR CNPJ
	$.validator.addMethod("verificarCNPJ", function(value, element){
		$.ajax({
			type: 		"POST",
			url: 		"/cadastro/verificar-cnpj",
			data: 		"cnpj="+value,
			dataType: 	"json",
			success: function(msg){
				response = msg.sucesso;
			}
		});
		return response;
	}, "CNPJ esta <b>inválido</b> ou <b>encontra-se em uso</b>");

	$('#cep').mask('00000-000');
	$('#cpf').mask("000.000.000-00");
	$('#contato').mask('(00) 0000-00000');

	var l = $(".login").validate({
		errorElement: 	"span",
		errorClass: 'help-block',
		errorPlacement: function(error, element) {
			if(element.parent('.input-group').length) {
				error.insertAfter(element.parent());
			} else {
				error.insertAfter(element);
			}
		},
		focusInvalid: 	!1,
		rules: {
			login_email: {
				required: 	true,
				email: 		true,
			},
			login_senha: {
				required: 	true,
			}
		},
		messages: {
			login_email: { 
				required: 	"Email Obrigatório", 
				email: 		"Email inválido"
			},
			login_senha: { 
				required: 	"Senha Obrigatória", 
			},
			
		},
		
		highlight: function(element) {
			$(element).closest('.form-group').addClass('has-error');
		},
		unhighlight: function(element) {
			// console.log()
			$(element).closest('.form-group').removeClass('has-error');
		},
		success: function(e) {
			e.closest(".form-group").removeClass("has-error")
		},
		submitHandler: function (form, event) {
			 $.ajax({
				type: 		"POST",
				url: 		"/cadastro/login",
				data: 		$(form).serialize(),
				dataType: 	'json',
				success: function (data) {
					console.log(data);
					if( data.sucesso ){
						location.reload();
					} else {
						$(".login .modal-alert-info").append( '<div class="alert alert-danger">Dados Inválidos</div>' );
					}
				}, error: function(data, error) {
					console.log(data);
					console.log(error.responseText);
				}
			});
			return false; // required to block normal submit since you used ajax
		}
	});

	$('#tp_pessoa').on('change',function(){
		var juridica 	=	'';
		var fisica 		=	'';

		juridica += '<div class="form-group">';
		juridica += '<label>CNPJ*</label>';
		juridica += '<input type="text" id="cnpj" class="form-control" name="cnpj" required>';
		juridica += '</div>';

		fisica += '<div class="form-group">';
		fisica += '<label>CPF*</label>';
		fisica += '<input type="text" name="cpf" id="cpf" class="form-control" value="" required>';
		fisica += '</div>';

		
		if ($(this).is(':checked')) {

			$('.tp-pessoa').empty().append( juridica );
			$('.cadastro').validate('update');
			$('#cnpj').mask('00.000.000/0000-00', {reverse: false});
			// $('#ie').mask("000.000.000.000");
		} else {
			$('.tp-pessoa').empty().append( fisica );
			$('.cadastro').validate('update');
		}

	});

});