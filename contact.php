<?php include('header.php');
include_once('config.php');
if (isset($_POST['submit'])) {
	
	$name = $_POST['name'];
	$mobile_number = $_POST['mobile_number'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$call_back = $_POST['call_back'];
	$date = date("Y-m-d H:i:s");
	$sql = "insert into contact(name,mobile_number,email,message,call_back,updated_at) values('$name','$mobile_number','$email','$message','$call_back','$date')";

	if (mysqli_query($connection, $sql)) {
		echo "<script>{
                  alert('successfully !!');
                  
                 }
                  </script>";
		echo "<script>window.location='contact.php' </script>";

	} else {

		echo "<script>{
             alert('Not successfully !!');
            
         } 
             </script>";
		echo "<script>window.location='contact.php' </script>";

	}
}
?>
<link href="assets/contact/style.css" rel="stylesheet" />
<!-- **Main** -->
<div id="main">
	<section class="main-title-section-wrapper aligncenter"
		style="background:url(https://assets-global.website-files.com/6009ec8cda7f305645c9d91b/602f1fcf60e64001362b6ca5_6022ed55b5db6c11597f4c5d_hDVT5Z3fP3BOw1mGa-znQmBsV75-ZcVoSpklgn9WzzlwQIOW6UhMZBkhixbDp9yIcsMHYGMfn_sejLy4tCtzmkO9aAn9_fwQGjHvoDrbwUIfJdlQRqH_X5B7dicGGXVLHezW-KZR.jpeg) left top / auto repeat scroll;">
		<div class="container">
			<div class="main-title-section">
				<h1>Contact</h1>
			</div>
			<div class="breadcrumb"><a href="https://dtdance.wpengine.com/">Home</a><span
					class="fa default"></span><span class="current">Contact 2</span></div>
		</div>
	</section> <!-- ** Container ** -->
	<div class="container">
		<section id="primary" class="content-full-width"> <!-- #post-7819 -->
			<div id="post-7819" class="post-7819 page type-page status-publish hentry">
				<div class="vc_row wpb_row vc_row-fluid">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner ">
							` <div class="wpb_wrapper">
								<div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceIn"
									data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1"
									style="opacity:0;" data-opacity_start_effect="">
									<div class='dt-sc-title with-two-border with-sub-title aligncenter'>

										<h3>SoulFul Photography Academy</h3>

									</div>
									<section1>
										<div class="imgBx">
											<img src="https://www.pngall.com/wp-content/uploads/12/Photographer-PNG-Image.png"
												alt="">
										</div>
										<br><br>
										<div class="contentBx ">
											<div class="formBx">

												<form action="" method="post">
													<div class="inputBx">
														<span>Name</span>
														<input type="text" name="name" required>
													</div>
													<div class="inputBx">
														<span>Number</span>
														<input type="text" name="mobile_number" required>
													</div>
													<div class="inputBx">
														<span>Email</span>
														<input type="email" name="email" required>
													</div>
													<div class="inputBx">
														<span>Message</span>
														<textarea name="message" id="" cols="30" rows="1"
															required></textarea>
													</div>
													<div class="inputBx">

														<p>Would you like to arrange a call-back from our counsellor?
														</p>
													</div>
													<div class="remember">
														<label for="">
															<input type="radio" name="call_back">yes <input type="radio"
																name="call_back">no
														</label>
													</div>
													<div class="inputBx mb-5">

														<input type="submit" value="Save" name="submit">
													</div>
													<br><br>
													<br>
												</form>
											</div>
										</div>
									</section1>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
	</div>
	<div class="vc_row-full-width vc_clearfix"></div>
</div><!-- #post-7819 -->
</section><!-- **Primary - End** -->
</div><!-- **Container - End** -->

</div><!-- **Main - End** --> <!-- **Footer** -->
<br>
<br>
<br>
<br><br>
<br>
<?php include('footer.php'); ?>