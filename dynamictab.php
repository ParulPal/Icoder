<?php 
$conn=mysqli_connect("localhost","root","","learnphp");
$tab_query="select *from category Order By category_id ASC";  
$tab_result=mysqli_query($connect,$tab_query);  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dynamic tab using bootstrap using php</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
		</script>
	</head>
<body>
<div class="container">
	<h2 align ="center">create dynamic tab by using bootstrap in php Mysqli</h2>
	<br/>
	<ul class="nav nav-
	tabs">
	</ul>
</div>
</body>
</html>