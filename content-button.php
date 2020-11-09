<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="section">
					<div class="tost"></div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="section">
					<button class="btn btn-primary btn-sm">ShowContent</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="section">
					<div class="post"></div>
				</div>
			</div>
		</div>
	</div>









	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script>
		

			$('button').click(function(){

		$.ajax({

			url : 'data.php',
			success : function(my_data){

				// $('.tost').html(my_data); 
				$('.tost').append(my_data); //append function will add content many times as it's clicked

			}

		});

			});




		$.ajax({

			url : 'post.php',
			success : function(my_data){

				$('.post').html(my_data);

			}

		});


	</script>

	<!-- JS FILES  -->
	
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>