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
	
	
		<script type="text/javascript" src="templates/chart/chart.js"></script>

<script src="templates/chart/highcharts.js"></script>
<script src="templates/chart/exporting.js"></script>

		<script type="text/javascript">
$(function () {

    // Make monochrome colors and set them as default for all pies
    Highcharts.getOptions().plotOptions.pie.colors = (function () {
        var colors = [],
            base = Highcharts.getOptions().colors[0],
            i;

        for (i = 0; i < 10; i += 1) {
            // Start out with a darkened base color (negative brighten), and end
            // up with a much brighter color
            colors.push(Highcharts.Color(base).brighten((i - 3) / 7).get());
        }
        return colors;
    }());

    // Build the chart
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Products share of  category as of year <?php echo $date = date("Y"); ?>'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Share',
            data: [
				<?php 
				$result = $conn->query("SELECT 	category FROM product Group by 	category");
				while($row = $result->fetch_array()){
				
				$category = $row['category'];
				
				$result1 = $conn->query("SELECT * FROM product WHERE category = '$category'");
				$row1 = $result1->num_rows;
				
				echo "['".$category."',   ".$row1."],";
				
				}
				?>
				
            ]
        }]
    });
});
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
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a><i class="icon-user icon-white"></i><?php echo $fetch['username']; ?></a></li>
			</ul>
	</div>
	
	<br>

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
	
	<div id="container" style="min-width: 310px; height: 600px; max-width: 1000px; margin: 0 auto; background:none; float:left;"></div>

				
	
	</div>

</body>
</html>
