$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
$(document).ready(function(e){
			$("#search-icon").click(function(e){
				$("#search-icon").hide();
				$("#search-div").fadeIn();
				$("#search-txt").focus();
			});
    		$('.sidenav').sidenav();
			$("#close-icon").click(function(e){
				$("#search-div").fadeOut();
				$("#search-icon").fadeIn();
			});
			$("#search-txt").blur(function(e){
				$("#search-div").hide();
				$("#search-icon").fadeIn();
			});
    		
    		$('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:10,
			    responsiveClass:true,
			    responsive:{
			        0:{
			            items:1,
			            nav:true
			        },
			        600:{
			            items:3,
			            nav:false
			        },
			        1000:{
			            items:5,
			            nav:true,
			            loop:false
			        }
			    }
			})
			$('select').formSelect();
			 $('input#input_text, textarea#textarea2').characterCounter();
			 $('.modal').modal();
			 $('.datepicker').datepicker();


		});