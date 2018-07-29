<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php 
// get the data from the form
$product_description = $_POST['product_description'];
$list_price = $_POST['list_price'];
$discount_percent = $_POST['discount_percent'];

 // calculate the discount
$discount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount;
 ?>

<html>
<head> 
<title>Product Discount Calculator</title> 
</head> 
<body>

<div class="container jumbotron">
<div><h1>Product Discount Calculator</h1>

<table class="table table-striped ">    
    <thead class="bg-light"> 
        <tr><th>Customer Details</th><th>Calculations</th> </tr>
    </thead>

    <tbody>
        <tr><td>    Product Description:   </td>  <td><?php echo $product_description; ?> </td> </tr> 
        <tr><td>    List Price:            </td>  <td><?php echo $list_price; ?>          </td> </tr>
        <tr><td>    Standard Discount:     </td>  <td><?php echo $discount_percent; ?>    </td> </tr>
        <tr><td>    Discount Amount:       </td>  <td><?php echo $discount; ?>            </td> </tr> 
        <tr class="bg-success"><td>Discount Price:</td><td><?php echo $discount_price; ?>      </td> </tr> 
    </tbody>
</table>
</div>
</div>
</body>  </html>
