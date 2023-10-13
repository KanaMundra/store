<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assets</title>
</head>

<body>
    <div class="header">
        <?php include "components/navbar.php" ?>
    </div>

    <div class="container my-5 py-5">
    <?php
    if (isset($_POST['assets'])) {

        $servername = "localhost";
        $username = "root";
        $password = "[Harsh123!]";
        $dbname = "netherstore";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $assetName = $_POST['asset_name'];
        $assetDescription = $_POST['asset_description'];
        $assetPrice = $_POST['asset_price'];
        $installationManual = $_POST['installation_manual'];
        $youtubeLink = $_POST['youtube_link'];
       
        $userManual = $_POST['user_manual'];

        $sql = "INSERT INTO netherstore.assets(assetName,assetDescription,price,youtubeLink,userManual,installationManual) VALUES('$assetName','$assetDescription','$assetPrice','$youtubeLink','$userManual','$installationManual')";

        if ($conn->query($sql) === TRUE) {
            echo "
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong><i class='bi bi-check-circle-fill'></i> Success!</strong>  Asset added successfully.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>
            ";
        } else {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong><i class='bi bi-exclamation-circle-fill'></i> Failed!</strong>  Something is wrong to insert the asset.
            ".$conn->error."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }

        $conn->close();
    }
    
    ?>
        <form action="Assets.php" method="post">

            <h1>
                Add Assets
            </h1>
            <div class="form-floating mb-3">
                <input type="text" name="asset_name" class="form-control" id="Asset-Name" placeholder="Asset Name">
                <label for="Asset-Name">Asset Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="asset_description" class="form-control" id="description" placeholder="Description">
                <label for="description">Description</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="asset_price" class="form-control" id="price" placeholder="price">
                <label for="price">Price</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="installation_manual" class="form-control" id="installationManual" placeholder="installation Manual">
                <label for="installationManual">Installation Manual</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="youtube_link" class="form-control" id="ytlink" placeholder="You Tube Link">
                <label for="ytlink">Youtube Link</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="user_manual" class="form-control" id="usermanual" placeholder="User Manual">
                <label for="usermanual">User Manual</label>
            </div>
            <input type="submit" name="assets" class="btn btn-outline-primary" value="Add" />
        </form>
    </div>

    <div class="footer">

        <?php include "components/footer.php" ?>
    </div>
</body>

</html>