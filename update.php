<?php 

    include_once('functions.php');

    $updatedata = new DB_con();

    if (isset($_POST['update'])) {

        $userid = $_GET['id'];
        $codenumber = $_POST['code_number'];
        $Thainame = $_POST['Thai_name'];
        $Engname = $_POST['Eng_name'];
        $major = $_POST['major'];
        $brithday = $_POST['brithday'];
        $img = $_POST['img'];

        $sql = $updatedata->update($codenumber, $Thainame, $Engname, $major, $brithday, $img, $userid);
        if ($sql) {
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='update.php'</script>";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style type="text/css">
        body {
            font-family: 'Kanit', sans-serif;
            background-color:#F5F8FF;
            
        }
    </style>

</head>
<body>


    

    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3 mb-3">Go Back</a>
        <div class="card px-3 p-4 mx-auto">
        <h1 class="mt-4 text-center">Update Page</h1>
        <hr>

        <?php 

            $userid = $_GET['id'];
            $updateuser = new DB_con();
            $sql = $updateuser->fetchonerecord($userid);
            while($row = mysqli_fetch_array($sql)) {
        ?>

        <form action="" method="post">
            <div class="mb-3">
                <label for="code_number" class="form-label">code_number</label>
                <input type="text" class="form-control" name="code_number" 
                value="<?php echo $row['code_number']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="Thai_name" class="form-label">Thai_name</label>
                <input type="text" class="form-control" name="Thai_name" 
                value="<?php echo $row['Thai_name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="Eng_name">Eng_name</label>
                <input type="text" class="form-control" name="Eng_name" 
                value="<?php echo $row['Eng_name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="major">major</label>
                <input type="text" class="form-control" name="major"
                value="<?php echo $row['major']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="brithday">brithday</label>
                <input type="text" class="form-control" name="brithday"
                value="<?php echo $row['brithday']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="staticImge" class="col-sm-1 col-form-label">img</label>
                <input type="text" name="img" class="form-control" id="img" 
                value="<?php echo $row['img']; ?>" required>
            </div>
            <?php } ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script></body>
</body>
</html>
