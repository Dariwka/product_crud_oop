<?php
require_once('products.php');
$res = $database->read();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Junior Developer Test App</title>
	<link rel="stylesheet" href="./assets/styles_index.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
        <h1 class="navbar-brand">Product List</h1>
		<div class="btn-inline">
		<input type="add" onclick="window.location = 'http://localhost/product_crudd_opp/productadd.php';" class="btn btn-primary" value="Add" id="add"/>
        <input id="delete-product-btn" type="delete" class="btn btn-danger" value="Mass Delete"/></div>		
</nav>
<div class="container">
		<?php 
		while($r = mysqli_fetch_assoc($res)){
		?>			
		<div id="product_list" class="box">
			<div class="checkbox">
			<label><input type="checkbox" class="delete-checkbox"> 
				<div class="box_body">
				<h3><?php echo $r['sku']; ?></h3>
				<h1><?php echo $r['name']; ?></h1>
				<p><?php echo $r['price']; ?> €</p>
				<p>Size: <?php echo $r['size']; ?></p>
				<p>Dimension: <?php echo $r['height'] . "x" . $r['width'] . "x" . $r['length']; ?></p>
				<p>Weight: <?php echo $r['weight']; ?></p>
                <a href="delete.php?sku=<?php echo $r['sku']; ?>">Delete</a>
			    </div>
			</label>
			</div>
		</div>
		<?php } ?>
</div>
<script>

// $(document).ready(function(){
//     $("#delete-product-btn").click(function (id) {
//          if ($('.delete-checkbox:checked').length == 0) {
//              alert("Please select atleast one row to perform this action");
//          }
//          else {
//              alert('deleted');
//          }
//     });
// })

</script>
</body>
</html>