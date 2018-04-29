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
        <h3 id="myModalLabel">Add Product...</h3>
    </div>
    <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
            <center>
                <table>
                    <tr>
                        <td><input type="file" name="product_image" required></td>
                    </tr>
                    <tr>
                        <td><input type="file" name="product_image2" required></td>
                    </tr>
                    <tr>
                        <td><input type="file" name="product_image3" required></td>
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
                        <td><input type="text" name="size" placeholder="size" style="width:250px;" required></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="color" placeholder="color" style="width:250px;" required></td>
                    </tr>
                    <tr>
                        <td><textarea type="text" name="description" placeholder="description" style="width:250px;" required rows="3"></textarea></td>
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
    $description = $_POST['description'];
    $category = $_POST['category'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $code = rand(0,10000000);

    $name = $code.$_FILES["product_image"] ["name"];
    $type = $_FILES["product_image"] ["type"];
    $size = $_FILES["product_image"] ["size"];
    $temp = $_FILES["product_image"] ["tmp_name"];
    $error = $_FILES["product_image"] ["error"];
    $name2 = $code.$_FILES["product_image2"] ["name"];
    $type2 = $_FILES["product_image2"] ["type"];
    $size2 = $_FILES["product_image2"] ["size"];
    $temp2 = $_FILES["product_image2"] ["tmp_name"];
    $error2 = $_FILES["product_image2"] ["error"];
    $name3 = $code.$_FILES["product_image3"] ["name"];
    $type3 = $_FILES["product_image3"] ["type"];
    $size3 = $_FILES["product_image3"] ["size"];
    $temp3 = $_FILES["product_image3"] ["tmp_name"];
    $error3 = $_FILES["product_image3"] ["error"];

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
            move_uploaded_file($temp2,"../templates/img/product/new/".$name2);
            move_uploaded_file($temp3,"../templates/img/product/new/".$name3);


            $q1 = $conn->query("INSERT INTO product ( product_id, product_name, product_price, product_image, product_image2, product_image3, brand, category, description, color , size)
				VALUES ('$product_code','$product_name','$product_price','$name','$name2','$name3' , '$brand', '$category', '$description', '$color', '$size')");
            header ("location:admin_girls.php");
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
    <div class="alert alert-info"><center><h2>Girls</h2></center></div>
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
                <th>description</th>
                <th>color</th>
                <th>size</th>
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
                    <td><img class="img-polaroid" src = "../templates/img/product/new/<?php echo $fetch['product_image']?>" height = "30px" width = "30px">
                        <img class="img-polaroid" src = "../templates/img/product/new/<?php echo $fetch['product_image2']?>" height = "30px" width = "30px">
                        <img class="img-polaroid" src = "../templates/img/product/new/<?php echo $fetch['product_image3']?>" height = "30px" width = "30px"></td>
                    <td><?php echo $fetch['product_name']?></td>
                    <td><?php echo $fetch['product_price']?></td>
                    <td><?php echo $fetch['description']?></td>
                    <td><?php echo $fetch['color']?></td>
                    <td><?php echo $fetch['size']?></td>
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