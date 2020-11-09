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
	
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="section">
					<form id="test_form" action="" method="POST" enctype="multipart/form-data">		    
						<input name ="name" type="text" class="form-control" placeholder="name">
						<input name ="cell" type="text" class="form-control" placeholder="cell">
						<input name ="add" type="submit" class="form-control" value="send">
										
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="section">
					<div class="post"></div>
				</div>
			</div>
		</div>
	</div>

	






	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script>
		
		$('form#test_form').submit(function(e){
			e.preventDefault();
			
			$.ajax({
				url : 'srz-data.php',
				data : new FormData(this),
				contentType : false,
				processData : false,
				method : "POST",
				success : function(my_data){
					$('.post').html(my_data);
				}
			
			});
		});


	</script>

	<!-- JS FILES  -->
	
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>