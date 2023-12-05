
<div class="container py-md-5 py-4 my-md-5 text-center" id="s4">
  <h1 class="fw-bold h1 text-white mb-5">Get White Paper</h1>
  <form name="footerform" id="footerform" action="" method="post">
    <div class="row">
      <div class="col-lg-6 col-12 mx-auto">
        <div class="row">
          <div class="col-lg-12 col-sm-6 col-12">
            <div class="form-floating">
              <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Name">
              <label for="floatingInput">Name *</label>
            </div>
          </div>
          <div class="col-lg-12 col-sm-6 col-12">
            <div class="form-floating">
              <input type="text" name="title" class="form-control" id="floatingInput" placeholder="Title">
              <label for="floatingInput">Title *</label>
            </div>
          </div>
          <div class="col-lg-12 col-sm-6 col-12">
            <div class="form-floating">
              <input type="text" name="email" class="form-control" id="floatingInput" placeholder="Email">
              <label for="floatingInput">E-mail *</label>
            </div>
          </div>
          <div class="col-lg-12 col-sm-6 col-12">
            <div class="form-floating">
              <input type="text" name="company" class="form-control" id="floatingInput" placeholder="Company">
              <label for="floatingInput">Company *</label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-floating">
              <textarea type="text" name="comments" class="form-control" id="floatingInput" rows="3" placeholder="Message"></textarea>
              <label for="floatingInput">Message</label>
            </div>
          </div>
          <div class="col-12 mt-4">
            <button type="submit" class="btn btn-light btn-lg text-dark">Submit</button>
            <input type="hidden" name="script_type" value="footerform">
            <span id="footerform_error" class="error text-center"></span> <span id="footerform_success" class="error text-success text-center"></span> </div>
        </div>
      </div>
    </div>
  </form>
</div>
<div class="footer py-md-5 py-4 text-center">
  <div class="container"> © 2023 Cassia.Ai | All Rights Reserved. <span class="ms-4 me-4">|</span> Designed & Developed by <a href="https://digitalvertex.com/" target="_blank" style="display: inline-block;">DigitalVertex.</a> </div>
</div>
<script src="//cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
<script>
$(document).ready(function(){
	$(".nav-link").click(function (event) {
//		alert("ok");
		$("#navbarNavDropdown .nav-item a").removeClass('active');
		event.preventDefault();
		$(this).addClass('active');
		div=$(this).attr('href');
		//alert(div);

		var path = window.location.pathname;
		var page = path.split("/").pop();
		if(page == 'news.php'){
			var urlBase = location.href.substring(0, location.href.lastIndexOf("/")+1);
			window.location = urlBase+'index.php'+div;
		}
		//
		
		
		/**/	
		window.location.hash = div;
		$("#navbarNavDropdown").removeClass('show');
		//alert($(div).offset().top);
		/*$('html,body').animate({
			scrollTop: $(window).scrollTop() + 100
		});*/
		
	});
	
	
	});
	
	
	$(document).ready(function(){
		var path = window.location.pathname;
		var page = path.split("/").pop();
		if(page == 'index.php'){
			var hash = window.location.hash.substring(1);
			if(hash.length){
				$("#"+hash+"_link").click();
				
				//alert($(window).scrollTop());
				//$("#navbarNavDropdown .nav-item a").removeClass('active');
				//$("#"+hash+"_link").addClass('active');
				/*$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 500);*/
			}
		}
 	});
	
	
</script>

<script>
	$(document).on("scroll", function(){
	if
	(
	$(document).scrollTop() > 45){
	$(".navbar-expand-md").addClass("shrink");
	}
	else
	{
	$(".navbar-expand-md").removeClass("shrink");
	}
	});
	</script>

<script>
$(document).ready(function(){

	 $('.groupslider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  autoplay:false,
  asNavFor: '.slider-group'
});
	
$('.slider-group').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.groupslider',
  dots: false,
  centerMode: false,
  focusOnSelect: true,
	responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
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
	})
</script> 
<script>
	$(document).ready(function(){
	$(".snav").click(function () {
	$(this).toggleClass('openbtn');

	$('#nav').animate({
	height: "toggle"
	}, 500, function() {

	});
	});
	});
	</script> 

<script>

	$(document).ready(function() {

	$("#contactform").submit(function(){

		$("#contactform_error").html('<img src="images/loading.gif" align="absmiddle" />');

		$.post("script.php",
			$("#contactform").serialize(),
			function(data){
				if(data == 12){
					$("#contactform")[0].reset();
					$("#contactform_success").html('Thank you for contacting us.');
					$("#contactform_error").html('');
					grecaptcha.reset();
				}else{
					$("#contactform_success").html('');
					$("#contactform_error").html(data);
				}
			}
		);
	return false;
	});
	});

	</script>

<script>

	$(document).ready(function() {

	$("#footerform").submit(function(){

		$("#footerform_error").html('<img src="images/loading.gif" align="absmiddle" />');

		$.post("script.php",
			$("#footerform").serialize(),
			function(data){
				if(data == 12){
					$("#footerform")[0].reset();
					$("#footerform_success").html('Thank you for contacting us.');
					$("#footerform_error").html('');
					grecaptcha.reset();
				}else{
					$("#footerform_success").html('');
					$("#footerform_error").html(data);
				}
			}
		);
	return false;
	});
	});

	</script> 

</body>
</html>