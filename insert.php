<?php 

    include_once('functions.php');

    $insertdata = new DB_con();


    if (isset($_POST['insert'])) {
        $codenumber = $_POST['code_number'];
        $Thainame = $_POST['Thai_name'];
        $Engname = $_POST['Eng_name'];
        $major = $_POST['major'];
        $brithday = $_POST['brithday'];
        $img = $_POST['img'];
        
        $sql = $insertdata->insert($codenumber, $Thainame, $Engname, $major, $brithday,  $img);

        if ($sql) {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
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
        <a href="index.php" class="btn btn-primary mt-3 mb-3 ">Go Back</a>
        <div class="card px-3 p-4 mx-auto">
        
        <h1 class="mt-4 text-center">Insert Page</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3">
                <label for="code_number" class="form-label">code_number</label>
                <input type="text" class="form-control" name="code_number" placeholder="Please enter your codenumber" required>
            </div>
            <div class="mb-3">
                <label for="Thai_name" class="form-label">Thai_name</label>
                <input type="text" class="form-control" name="Thai_name" placeholder="Please enter your Thai name" required>
            </div>
            <div class="mb-3">
                <label for="Eng_name">Eng_name</label>
                <input type="text" class="form-control" name="Eng_name" placeholder="Please enter your English name" required>
            </div>
            <div class="mb-3">
                <label for="major">major</label>
                <input type="text" class="form-control" name="major" placeholder="Please enter your Major" required>
            </div>
            <div class="mb-3">
                <label for="brithday">brithday</label>
                <input type="text" class="form-control" name="brithday" placeholder="Please enter your brithday" required>
            </div>
            <div class="mb-3">
                <label for="staticImge" class="col-sm-1 col-form-label">img</label>
                <input type="text" name="img" class="form-control" id="img" placeholder="Please enter your Image" required>
            </div>
            <button type="submit" name="insert" class="btn btn-success">Insert</button>
        </form>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script></body>
</body>
</html>