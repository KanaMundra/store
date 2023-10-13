<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nether Store - Store</title>
    <link rel="stylesheet" href="static/styles/store.css">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">

</head>

<body>
    <?php include 'components/connect.php'?>
    <div class="header">
        <?php include "components/navbar.php" ?>
    </div>
    <div class="container-main mb-5">
        <div class="title">
            <h1>Nether Store</h1>
        </div>
        <div class="sub-title rounded-4">
            <h1>Mods</h1>
        </div>
        <div class="shop-container left">

            <?php
           
            $sql = "SELECT * FROM assets";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
               
                while ($row = $result->fetch_assoc()) {
                   
                    echo '<div class="shop-items">';
                    echo '<iframe src="'.$row['youtubeLink'].'" frameborder="0"></iframe>';
                    echo '<span class="product-name">'.$row['assetName'].'</span>';

                    echo '<span class="price"><a style="text-decoration: none;color:black" href="product.php?product='.$row['assetID'].'" target="_blank">$'.$row['price'].'</a></span>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
       


    </div>
    <div class="footer">

        <?php include "components/footer.php" ?>
    </div>
</body>

</html>