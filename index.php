
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

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

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img class="img-fluid rounded" src="uploads/Npru-logo.png"  width="90" alt="..." ></img>
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <h3>Nakhon Pathom Rajabhat University</h3>
                    </li>
                </ul>
            </div>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- viwe -->
    <div class="container mt-2 ">
      <div class="card px-3 p-4 mx-auto">
        <div class="row">
            <div class="col-md-6">
                <h1 style="font-size: 45px;"  >Student ID</h1>
            </div>
             <div class="col-md-6 d-flex justify-content-end ">
                <a type="button" class="btn btn-primary mt-3" href="insert.php" >Insert Student</a>
            </div>
        </div>
        <hr>

    
   
    <table id="mytable" class="table table-bordered table-striped">
        <thead  class="text-center  bg-dark text-white" >
            <th>#</th>
            <th>code_number</th>
            <th>Thai_name</th>
            <th>Eng_name</th>
            <th>major</th>
            <th>brithday</th>
            <th>img</th>
            <th>Actions</th>
            
        </thead>

        <tbody>
            <?php 

                include_once('functions.php');
                $fetchdata = new DB_con();
                $sql = $fetchdata->fetchdata();
                while($row = mysqli_fetch_array($sql)) {

            ?>

                <tr class="text-center">
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['code_number']; ?></td>
                    <td><?php echo $row['Thai_name']; ?></td>
                    <td><?php echo $row['Eng_name']; ?></td>
                    <td><?php echo $row['major']; ?></td>
                    <td><?php echo $row['brithday']; ?></td>
                    <td>
                        <img class="img-fluid rounded" src="uploads/<?=$row['img'];?>"  width="150" alt="..." ></img>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#idModal<?php echo $row['id']; ?>" >Show</button>
                        <!-- <a href="Show.php?id=<?php echo $rowr['id']; ?>" class="btn btn-primary">Show</a> -->
                        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Update</a>
                        <a onclick="return confirm('Are you sure you want to delete?');" href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="idModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="studentLabel"><?php echo $row['Thai_name']; ?></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="card mb-3" style="max-width: 100rem;;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img class="img-fluid rounded" src="uploads/<?=$row['img'];?>"  width="150" alt="..." ></img>
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo $row['code_number']; ?></h3>
                                    <h6 class="card-title">มหาวิทยาลัยราชภัฏนครปฐม</h6>
                                    <h6 class="card-title">ชื่อ-นามสกุล : <?php echo $row['Thai_name']; ?></h6>
                                    <h6 class="card-title">Fristname-lastname : <?php echo $row['Eng_name']; ?></h6>
                                    <h6 class="card-title">Major : <?php echo $row['major']; ?></h6>
                                    <h6 class="card-title">brithday : <?php echo $row['brithday']; ?></h6>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Update</a>
                        </div>
                        </div>
                    </div>
                </div>


            <?php 

                }
            ?>
        </tbody>
    </table>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script></body>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>