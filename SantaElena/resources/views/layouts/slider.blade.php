<?php /*
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">

<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                <div class="row"><div class="container">
                    <div class="col-md-3 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png">
                    </div>
                    <div class="col-md-9 text-left">
                        <h3 data-animation="animated bounceInDown">Add images, or even your logo!</h3>
                        <h4 data-animation="animated bounceInUp">Easily use stunning effects</h4>             
                     </div>
                </div></div>
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown"> 50 animation options A beautiful</h3>
                        <h4 data-animation="animated bounceInUp">Create beautiful slideshows </h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png">
                    </div>
                </div></div>
            </div>
            <!-- Item 3 -->
            <div class="item slide3">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Simple Bootstrap Carousel</h3>
                        <h4 data-animation="animated bounceInUp">Bootstrap Image Carousel Slider with Animate.css</h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png">
                    </div>     
                </div></div>
            </div>
            <!-- Item 4 -->
            <div class="item slide4">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">We are creative</h3>
                        <h4 data-animation="animated bounceInUp">Get start your next awesome project</h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png">
                    </div>  
                </div></div>
            </div>
            <!-- End Item 4 -->
    
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script>
/*                          TO DO
    jQuery(document).ready(function(){
        console.log('asd');
        function doAnimations( elems ) {
            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';
            
            elems.each(function () {
                var jQuerythis = jQuery(this),
                    jQueryanimationType = jQuerythis.data('animation');
                jQuerythis.addClass(jQueryanimationType).one(animEndEv, function () {
                    jQuerythis.removeClass(jQueryanimationType);
                });
            });
        }
    });

(function( jQuery ) {

    //Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var jQuerythis = jQuery(this),
				jQueryanimationType = jQuerythis.data('animation');
			jQuerythis.addClass(jQueryanimationType).one(animEndEv, function () {
				jQuerythis.removeClass(jQueryanimationType);
			});
		});
	}
	
	//Variables on page load 
	var jQuerymyCarousel = jQuery('#carousel-example-generic'),
		jQueryfirstAnimatingElems = jQuerymyCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel 
	jQuerymyCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations(jQueryfirstAnimatingElems);
	
	//Pause carousel  
	jQuerymyCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	jQuerymyCarousel.on('slide.bs.carousel', function (e) {
		var jQueryanimatingElems = jQuery(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations(jQueryanimatingElems);
	});  
    jQuery('#carousel-example-generic').carousel({
        interval:3000,
        pause: "false"
    });
	
})(jQuery);	
</script>
*/