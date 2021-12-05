<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>


    <ul class="list">
        <?php
        include('connection.php');

        $sql = "SELECT * FROM PRODUCTS WHERE category_id=1";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
        ?>
                <img src="<?php echo $rows['pictures']; ?>" alt="Preview not Available">
                <section class="list-left">
                    <h5 class="title">
                        <?php echo $rows['description']; ?>
                    </h5>
                    <span class="adprice">
                        <?php echo $rows['price']; ?>
                    </span>
                </section>
        <?php
            }
        } else {
            echo "0 Results";
        }
        ?>
        <!--<a href="single.html">
									<li>
									<img src="images/c1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<span class="adprice">$290</span>
									<p class="catpath">Cars » Other Vehicles</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>-->
    </ul>


    <?php
    /*include('connection.php');

    $sql = "SELECT * FROM PRODUCTS WHERE category_id=2";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {           
          ?>
          <li> 
           <!--<img src='$img' alt='preview not available'>-->
           <section>
           <h5>description: <?php echo $rows['description']; ?></h5>
           </section>
           <div class='clearfix'></div>
           </li>
        <?php
        }
    } else {
        echo "0 Results";
    }*/
    ?>

</body>

</html>