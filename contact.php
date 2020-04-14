
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us | Attire Men's Bespoke</title>
	<?php include 'include/head.php';?>
</head>
<?php ?>
<body>
<?php include 'include/menubar.php'; ?>
<?php include 'include/attire_social.php'; ?>

<section class="contact-h" >
	<div class="container">
		<div class="container-fluid">
			<div class="contact-heading">
				<h1>Contact Us</h1>
			</div>
		</div>
	</div>
</section>

<section class="attire-contact-form">
	<div class="container">
		<div class="container-fluid">
			<div class="contact-form">
				<h5 class="text-center text-success" id="msg"></h5>
				<form class="form-control" id="contact-form" action="" method="post">
					<div class="form-inputs">
						<input class="inputs" type="text" name="name" id="name" placeholder="Name" required="">
						<input class="inputs" type="email" id="email" name="email" placeholder="Email" required="">
						<input class="inputs" type="phone" id="phone" name="phone" placeholder="Phone" required="">
						
					</div>
					<textarea class="textarea" type="text" id="message" name="message" placeholder="Tell us your requirements here"></textarea>
					<div class="submit-botton">
						<input class="submit" type="submit" name="submit" value="Submit">
					</div>

					<div class="contact_info">
						<div class="basic-info">
							<span class="basic">Tel:<a href="tel:9868958363">&nbsp;&nbsp;(91)9868958363</a></span>
							<span class="basic"><a href="mailTo:info@attiremensbespoke.com">info@attiremensbespoke.com</a></span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Include Script CDN Links, Files and Jquery function and footer area -->
<?php include 'include/script_function.php'; ?>


<script type="text/javascript">
	$(document).ready(function(){
		$(".submit").click(function(){
			event.preventDefault();
			if ($("#name").val() == "" || $("#email").val() == "" || $("#phone").val() == "" || $("#message").val() == "") {
			} else { 
				var attire = "name=" + $("#name").val() + "&email=" + $("#email").val() + "&phone=" + $("#phone").val() + "&message=" + $("#message").val();
				$.ajax({
					type: "post",
					url: "contact-form-heandler.php",
					dataType: "text",
					data: attire,
					beforeSend: function() {
						$("#msg").html("");
						$("#msg").html("Message Sending, Please Wait !");
					},
					success: function(data) {
						$("#msg").html(data);

					},
				});
			}
		});
	});
</script> 
</body>
</html>