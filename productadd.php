<?php
 require_once('products.php');
 if(isset($_POST) & !empty($_POST)){
	 $sku = $_POST['sku'];
	 $name = $_POST['name'];
	 $price = $_POST['price'];
	//  $size = $_POST['size'];
	//  $height = $_POST['height'];
	//  $width = $_POST['width'];
	//  $length = $_POST['length'];
	//  $weight = $_POST['weight'];


	//  $res = $database->create($sku, $name, $price, $size, $height, $width, $length, $weight);
	 $res = $database->create($sku, $name, $price);
	 if($res){
	 	echo "Successfully inserted data";
	 }else{
	 	echo "failed to insert data";
	 }
}



//   // Define variable and set to null by default

//   $skuErr = $nameErr = $priceErr = "";

//   $sku = $name = $price = "";

//   if (isset($_POST))

//   {

//     if (empty($_POST["sku"]))

//     {

//       $skuErr = "SKU is required";

//     }

//     else

//     {

//       $sku = $_POST['sku'];


//     }

//     if (empty($_POST["name"]))

//     {

//       $priceErr = "Name is required";

//     }

// 	else

//     {

//       $name = $_POST['name'];


//     }


//     if (empty($_POST["price"]))

//     {

//       $priceErr = "Price is required";

//     }

// 	else

//     {

//       $price = $_POST['price'];


//     }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Junior Developer Test App</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" href="./assets//styles.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
        <h1 class="navbar-brand">Product Add</h1>
		<div class="btn-inline">
		<input type="submit" class="btn btn-primary" value="save" id="save"/>
        <input type="cancel" onclick="window.location = 'http://localhost/product_crudd_opp/index.php';" class="btn btn-danger" value="cancel" /></div>		
</nav>
<div class="container" >
	
<form method="post" id="product_form" class="form-horizontal needs-validation" novalidate>
<div id="sku" class="form-group">
	<label for="validationTooltip01" class="col-sm-2 control-label">SKU</label>
<div class="col-sm-10">
	<input type="text" name="sku"  class="form-control" id="validationTooltip01" placeholder="sku" required/>
</div>
</div>

<div id="name" class="form-group">
<label for="validationTooltip02" class="col-sm-2 control-label">Name</label>
<div class="col-sm-10">
<input type="text" name="name"  class="form-control" id="validationTooltip02" placeholder="Name" />
</div>
</div>

<div id="price" class="form-group">
<label for="validationTooltip03" class="col-sm-2 control-label">Price(€)</label>
<div class="col-sm-10">
<input type="price" name="price"  class="form-control" id="validationTooltip03" placeholder="price" />
</div>
</div>

<div id="productType" class="form-group">
<label for="input1" class="col-sm-2 control-label">Type Switcher</label>
<div class="col-sm-10">
<select id="switcher" name="switcher" class="form-control">
<option  value="" selected="selected">Type Switcher</option>
<option value="DVD">DVD</option>
<option value="Furniture">Furniture</option>
<option value="Book">Book</option>
</select>
</div>
</div>

<div name="DVD" id="DVD" class="hiddenForm">
<div id="size" class="form-group">
	<label id="size" for="input1" class="col-sm-2 control-label">Size(MB)</label>
	<div class="col-sm-10">
	<input type="number" name="size"  class="form-control" id="size" placeholder="Please, provide size" />
	</div>
</div>
</div>

<div name="Furniture" id="Furniture" class="hiddenForm">
<div id="height" class="form-group">
	<label id="height" for="input1" class="col-sm-2 control-label">Height(cm)</label>
	<div class="col-sm-10">
	<input type="number" name="height"  class="form-control" id="height" placeholder="Please, provide dimensions" />
	</div>
</div>
<div id="width" class="form-group">
	<label id="width" for="input1" class="col-sm-2 control-label">Width(cm)</label>
	<div class="col-sm-10">
	<input type="number" name="width"  class="form-control" id="width" placeholder="Please, provide dimensions"/>
	</div>
</div>
<div id="length" class="form-group">
	<label id="length" for="input1" class="col-sm-2 control-label">Length(cm)</label>
	<div class="col-sm-10">
	<input type="number" name="length"  class="form-control" id="length" placeholder="Please, provide dimensions" />
	</div>
</div>
</div>	

<div name="Book" id="Book" class="hiddenForm">
<div id="weight" class="form-group">
	<label id="weight" for="input1" class="col-sm-2 control-label">Weight(kg)</label>
	<div class="col-sm-10">
	<input type="number" name="weight"  class="form-control" id="weight" placeholder="Please, provide weight" />
	</div>
</div>
</div>

</form>
</div>
<script>
$("#switcher").on("change", function() {
$("#" + $(this).val()).show().siblings(".hiddenForm").hide();
});

$(document).ready(function() {
$("#save").click(function() {
$("#product_form").submit();});
});
</script>
</body>
</html>