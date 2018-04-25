<?php
	include("../libs/session.php");
	include("../libs/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>AlphaWare</title>
    <link rel = "stylesheet" type = "text/css" href="templates/css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="templates/css/bootstrap.css">
    <script src="templates/js/bootstrap.js"></script>
    <script src="templates/js/jquery-1.7.2.min.js"></script>
    <script src="templates/js/carousel.js"></script>
    <script src="templates/js/button.js"></script>
    <script src="templates/js/dropdown.js"></script>
    <script src="templates/js/tab.js"></script>
    <script src="templates/js/tooltip.js"></script>
    <script src="templates/js/popover.js"></script>
    <script src="templates/js/collapse.js"></script>
    <script src="templates/js/modal.js"></script>
    <script src="templates/js/scrollspy.js"></script>
    <script src="templates/js/alert.js"></script>
    <script src="templates/js/transition.js"></script>
    <script src="templates/js/bootstrap.min.js"></script>
    <script src="templates/javascripts/filter.js" type="text/javascript" charset="utf-8"></script>
    <script src="templates/jscript/jquery-1.9.1.js" type="text/javascript"></script>

    <!--Le Facebox-->
    <link href="templates/facefiles/facebox.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="templates/facefiles/jquery-1.9.js" type="text/javascript"></script>
    <script src="templates/facefiles/jquery-1.2.2.pack.js" type="text/javascript"></script>
    <script src="templates/facefiles/facebox.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('a[rel*=facebox]').facebox()
        })
    </script>
</head><body>
<div id="header" style="position:fixed;">
    <img src="../templates/img/logo.png">
    <label>control</label>
			<?php
				$id = (int) $_SESSION['id'];
			
					$query = $conn->query ("SELECT * FROM admin WHERE adminid = '$id' ") or die (mysqli_error());
					$fetch = $query->fetch_array ();
			?>
				
			<ul>
				<li><a href="../libs/admin_logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<i class="icon-user icon-white"></i><?php echo $fetch['username']; ?></a></li>
			</ul>
	</div>
	
	<br>

		
		<a href="#add" role="button" class="btn btn-info" data-toggle="modal" style="position:absolute;margin-left:222px; margin-top:140px; z-index:-1000;"><i class="icon-plus-sign icon-white"></i>Add Product</a>
		<div id="add" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Add Product...</h3>
			</div>
				<div class="modal-body">
					<form method="post" enctype="multipart/form-data">
					<center>
						<table>
							<tr>
								<td><input type="file" name="product_image" required></td>
							</tr>
							<?php include("random_id.php"); 
							echo '<tr>
								<td><input type="hidden" name="product_code" value="'.$code.'" required></td>
							<tr/>';
							?>
							<tr>
								<td><input type="text" name="product_name" placeholder="Product Name" style="width:250px;" required></td>
							<tr/>
							<tr>
								<td><input type="text" name="product_price" placeholder="Price" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="text" name="brand" placeholder="Brand Name	" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="number" name="qty" placeholder="No. of Stock" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="hidden" name="category" value="new"></td>
							</tr>
						</table>
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="add" value="Add">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>
		
		<?php
			if (isset($_POST['add']))
				{
					$product_code = $_POST['product_code'];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					$brand = $_POST['brand'];
					$category = $_POST['category'];
					$qty = $_POST['qty'];
					$code = rand(0,10000000);
						
								$name = $code.$_FILES["product_image"] ["name"];
								$type = $_FILES["product_image"] ["type"];
								$size = $_FILES["product_image"] ["size"];
								$temp = $_FILES["product_image"] ["tmp_name"];
								$error = $_FILES["product_image"] ["error"];
										
								if ($error > 0){
									die("Error uploading file! Code $error.");}
								else
								{
									if($size > 30000000000) //conditions for the file
									{
										die("Format is not allowed or file size is too big!");
									}
									else
									{
										move_uploaded_file($temp,"../templates/img/product/new/".$name);
			

				$q1 = $conn->query("INSERT INTO product ( product_id,product_name, product_price, product_image, brand, category)
				VALUES ('$product_code','$product_name','$product_price','$name', '$brand', '$category')");
				
				$q2 = $conn->query("INSERT INTO stock ( product_id, qty) VALUES ('$product_code','$qty')");
				
				header ("location:admin_new.php");
			}}
		}

				?>

    <div id="leftnav">
        <ul>
            <li><a href="admin_home.php" style="color:#333;">Dashboard</a></li>
            <li><a href="#">Products</a>
                <ul>
                    <li><a href="admin_girls.php" style="font-size:15px; margin-left:15px;">girls</a></li>
                    <li><a href="admin_boys.php"style="font-size:15px; margin-left:15px;">boys</a></li>
                    <li><a href="admin_feature.php"style="font-size:15px; margin-left:15px;">feature</a></li>
                    <li><a href="admin_sale.php"style="font-size:15px; margin-left:15px;">sale</a></li>
                    <li><a href="admin_new.php"style="font-size:15px; margin-left:15px;">new</a></li>
                    <li><a href="admin_new.php"style="font-size:15px; margin-left:15px;">new</a></li>
                </ul>
            </li>
        </ul>
    </div>
	
	<div id="rightcontent" style="position:absolute; top:10%;">
			<div class="alert alert-info"><center><h2>Running</h2></center></div>
			<br />
				<label  style="padding:5px; float:right;"><input type="text" name="filter" placeholder="Search Product here..." id="filter"></label>
			<br />
			
		<div class="alert alert-info">
			<table class="table table-hover" style="background-color:;">
				<thead>
				<tr style="font-size:20px;">
					<th>Product Image</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>No. of Stock</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				<?php
					
					$query = $conn->query("SELECT * FROM `product` WHERE category='new' ORDER BY product_id DESC") or die(mysqli_error());
					while($fetch = $query->fetch_array())
						{
						$id = $fetch['product_id'];
				?>
				<tr class="del<?php echo $id?>">
					<td><img class="img-polaroid" src = "../templates/img/product/new/<?php echo $fetch['product_image']?>" height = "70px" width = "80px"></td>
					<td><?php echo $fetch['product_name']?></td>
					<td><?php echo $fetch['product_price']?></td>

					<?php
					$query1 = $conn->query("SELECT * FROM `stock` WHERE product_id='$id'") or die(mysqli_error());
					$fetch1 = $query1->fetch_array();
					
						$qty = $fetch1['qty'];
					?>
					
					<td><?php echo $fetch1['qty']?></td>
					<td style="width:220px;">
					<?php
					echo "<a href='stockin.php?id=".$id."' class='btn btn-success' rel='facebox'><i class='icon-plus-sign icon-white'></i> Stock In</a> ";
					echo "<a href='stockout.php?id=".$id."' class='btn btn-danger' rel='facebox'><i class='icon-minus-sign icon-white'></i> Stock Out</a>";
					?>
					</td>
				</tr>		
				<?php
					}
				?>
				</tbody>
			</table>
		</div>	
  <?php
  /* stock in */
  if(isset($_POST['stockin'])){
  
  $pid = $_POST['pid'];
  
 $result = $conn->query("SELECT * FROM `stock` WHERE product_id='$pid'") or die(mysqli_error());
 $row = $result->fetch_array();
 
  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck + $new_stck;
 
  $que = $conn->query("UPDATE `stock` SET `qty` = '$total' WHERE `product_id`='$pid'") or die(mysql_error());
  echo "<script>window.location = 'admin_new.php'</script>";
  //header("Location:admin_running.php");
 }
 
  /* stock out */
 if(isset($_POST['stockout'])){
  
  $pid = $_POST['pid'];
  
 $result = $conn->query("SELECT * FROM `stock` WHERE product_id='$pid'") or die(mysqli_error());
 $row = $result->fetch_array();
 
  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck - $new_stck;
 
  $que = $conn->query("UPDATE `stock` SET `qty` = '$total' WHERE `product_id`='$pid'") or die(mysqli_error());
  
  echo "<script>window.location = 'admin_new.php'</script>";
  //header("Location:admin_running.php");
 }
  ?>				
			
	
			
</body>
</html>
<script type="text/javascript">
	$(document).ready( function() {
		
		$('.remove').click( function() {
		
		var id = $(this).attr("id");

		
		if(confirm("Are you sure you want to delete this product?")){
			
		
			$.ajax({
			type: "POST",
			url: "../function/remove.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$(".del"+id).fadeOut('slow', function(){ $(this).remove();}); 
			}
			}); 
			}else{
			return false;}
		});				
	});

</script>