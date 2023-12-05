<?php $active = "contact";?>
<?php include('header.php'); ?>

<div class="bg-info">
	<div class="container py-md-5 py-4 text-center text-white">
		<div class="row pb-lg-4">
			<div class="col-lg-10 col-12 mx-auto">
		<h1 class="text-warning text-center fw-bold mb-md-4 mb-md-2">Contact</h1>
		<h3>South County Security Services, Inc.</h3>
				
				<div class="row mt-md-4 mt-2 g-4">
					<div class="col-md-4 col-12 lead">
					<div class="border p-4 h-100 d-flex align-items-center justify-content-center">22551 Second Street<br>
					Suite 240<br>
					Hayward, CA 94541
					</div>
					</div>
					
					<div class="col-md-4 col-12 lead">
					<div class="border p-4 h-100 d-flex align-items-center justify-content-center">
					<div>Phone:<a href="tel:5107832696"> 510-783-2696</a><br>
					Fax: 510-783-0481<br>
					Email:<a href="mailto:info@southcountysecurity.net" style="padding:0 5px;"> info@southcountysecurity.net</a>
					</div>
					</div>
					</div>
					
					<div class="col-md-4 col-12">
					<div class="bg-warning p-4 h-100 text-dark">
						<h5 class="fw-bold">Hours Of Operation:</h5>
						Mon-Fri: 9am-5pm<br>(Closed for lunch from noon To 1pm)
						<p class="fw-bold my-2">Closed: Sat-Sun</p> 
						<p class="fw-bold">Answering Service: 24/7</p>
					</div>
					</div>
				</div>
		
		
		</div>
		</div>
	</div>
</div>

	
<div class="midbanner py-md-5">
	
	<div class="container py-lg-5 py-4 position-relative">

	<div class="row my-lg-5 my-4">

	<div class="col-lg-6 col-12 mx-auto">
		
	<div class="radiusbox">	
	<form name="contactform" id="contactform" action="" method="post" class="p-md-5 p-4 shadow-sm bg-white">
				<div class="row">
					<h3 class="fw-bold">Get In Touch</h3>
					<h5 class="fw-light">Submit form below and we will respond as soon as possible</h5>
					
					<div class="col-md-6 col-12">
					<div class="form-floating">
					<input type="text" name="name" class="form-control" id="floatingInput" placeholder="Name">
					<label for="floatingInput">Name *</label>
					</div>
					</div>
					
					<div class="col-md-6 col-12">
					<div class="form-floating">
					<input type="text" name="companyname" class="form-control" id="floatingInput" placeholder="Comapny Name">
					<label for="floatingInput">Company Name</label>
					</div>
					</div>
					
					<div class="col-md-6 col-12">
					<div class="form-floating">
					<input type="text" name="phone" class="form-control" id="floatingInput" placeholder="Phone">
					<label for="floatingInput">Phone *</label>
					</div>
					</div>
					
					<div class="col-md-6 col-12">
					<div class="form-floating">
					<input type="text" name="email" class="form-control" id="floatingInput" placeholder="Email">
					<label for="floatingInput">Email</label>
					</div>
					</div>
					
					
					
	
					
					<div class="col-12">
					<div class="form-floating">
					<textarea type="text" name="question" class="form-control" id="floatingInput" rows="3" placeholder="Message"></textarea>
					<label for="floatingInput">Questions/Comments/Services Requested *</label>
					</div>
					</div>
					
					<div class="col-12 text-center my-4">
                    
                    <div class="g-recaptcha" data-sitekey="6LcOgQApAAAAAIAKkKyA9LZbIipYz4L1YB5ifBls"></div>
                    </div>

					
					
					
					<div class="col-12 mt-4">
					<button type="submit" class="btn btn-warning">Submit</button>
					<input type="hidden" id="google_captcha" name="google_captcha" value="0">
					<input type="hidden" name="script_type" value="contactform">
					<span id="contactform_error" class="error"></span>
					<span id="contactform_success" class="error text-success"></span>
					</div>
				</div>
				</form>
		</div>
		
	</div>
	</div>	
	</div>
</div>



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3157.891022162052!2d-122.08237812365982!3d37.67526841788483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f93d9df4fb7b3%3A0xe35b702078e19674!2s22551%202nd%20St%20%23240%2C%20Hayward%2C%20CA%2094541%2C%20USA!5e0!3m2!1sen!2sin!4v1699261042993!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


	
	

	
	
	

<?php include('footer.php'); ?>