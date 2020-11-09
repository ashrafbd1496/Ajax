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
					<div class="tost">
						<input id="name" type="text" placeholder="Name">
						<input id="cell" type="text" placeholder="Cell">
						<input id="sbmt" type="submit" value="Add">
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="section">
					<button class="btn btn-primary btn-sm">ShowContent</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="section">
					<div class="sataConent"></div>
				</div>
			</div>
		</div>
	</div>









	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script>
		
		$('input#sbmt').click(function(){

			let name = $('input#name').val();
			let cell = $('input#cell').val();

			$.ajax({
				url : 'sata.php',
				data : {naam : name, Mobile : cell },
				method : "POST",
				success : function(my_data){
					$('.sataConent').html(my_data);
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