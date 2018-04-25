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
</head>
<body>
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
				<h3 id="myModalLabel">Add offers...</h3>
			</div>
				<div class="modal-body">
					<form method="post" enctype="multipart/form-data">
					<center>
						<table>
							<tr>
								<td><input type="file" name="offers_image" required></td>
							</tr>
							<?php include("random_id.php"); 
							echo '<tr>
								<td><input type="hidden" name="offers_id" value="'.$code.'" required></td>
							<tr/>';
							?>
							<tr>
								<td><input type="text" name="offers_name" placeholder="offers name" style="width:250px;" required></td>
							<tr/>
							<tr>
								<td><input type="text" name="offers_titles" placeholder="offers titles" style="width:250px;" required></td>
							</tr>

							<tr>
								<td><input type="number" name="offers_prsentage" placeholder="offers prsentage" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="text" name="status" placeholder="status" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="text" name="pharesa" required></td>
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
					$offers_id = $_POST['offers_id'];
					$offers_name = $_POST['offers_name'];
					$offers_titles = $_POST['offers_titles'];
					$offers_prsentage = $_POST['offers_prsentage'];
					$status = $_POST['status'];
					$pharesa = $_POST['pharesa'];
					$code = rand(0,10000000000000);
						
								$name = $code.$_FILES["offers_image"] ["name"];
								$type = $_FILES["offers_image"] ["type"];
								$size = $_FILES["offers_image"] ["size"];
								$temp = $_FILES["offers_image"] ["tmp_name"];
								$error = $_FILES["offers_image"] ["error"];
										
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
										move_uploaded_file($temp,"../templates/img/offers/".$name);
			

				$q1 = $conn->query("INSERT INTO offers ( offers_id, offers_name, offers_titles, offers_prsentage, offers_image, status, pharesa)
				VALUES ('$offers_id','$offers_name','$offers_name','$offers_titles','$offers_prsentage', '$status', '$pharesa')");
				header ("location:admin_offers.php");
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
			<div class="alert alert-info"><center><h2>offers</h2></center></div>
			<br />
				<label  style="padding:5px; float:right;"><input type="text" name="filter" placeholder="Search Product here..." id="filter"></label>
			<br />
			
			<div class="alert alert-info">
			<table class="table table-hover" style="background-color:;">
				<thead>
				<tr style="font-size:20px;">
					<th>offer Image</th>
					<th>offer Name</th>
					<th>offer title</th>
					<th>precentage </th>
					<th>status</th>
					<th>pharesa</th>
				</tr>
				</thead>
				<tbody>
				<?php
					
					$query = $conn->query("SELECT * FROM `offers` ORDER BY offers_id DESC") or die(mysqli_error());
					while($fetch = $query->fetch_array())
						{
						$id = $fetch['offers_id'];
				?>
				<tr class="del<?php echo $id?>">
					<td><img class="img-polaroid" src = "../templates/img/offers/<?php echo $fetch['offers_image']?>" height = "70px" width = "80px"></td>
					<td><?php echo $fetch['offers_name']?></td>
					<td><?php echo $fetch['offers_titles']?></td>
					<td><?php echo $fetch['offers_prsentage']?></td>
					<td><?php echo $fetch['status']?></td>
					<td><?php echo $fetch['pharesa']?></td>
				</tr>
				<?php
					}
				?>
				</tbody>
			</table>
			</div>
			

	
			
</body>
</html>
<script type="text/javascript">
	$(document).ready( function() {
		
		$('.remove').click( function() {
		
		var id = $(this).attr("id");

		
		if(confirm("Are you sure you want to delete this product?")){
			
		
			$.ajax({
			type: "POST",
			url: "../libs/remove.php",
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