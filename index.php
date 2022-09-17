<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .myHeader{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="col-lg-12 mt-5">
            <div class="myHeader mb-3">
                <h1 class="text-warning">Display Table Data</h1>
                <button class="btn btn-success"><a class="text-white" href="insert.php">Insert Data</a></button>
            </div>

            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>

                <?php
                    include 'conn.php';


                    // $username = $_POST['username'];
                    // $password = $_POST['password'];

                    $q = "select * from user_data";

                    $query = mysqli_query($con, $q);

                    while($res = mysqli_fetch_array($query)){
                ?>

                <tr class="text-center">
                    <td> <?php echo $res['id']; ?> </td>
                    <td> <?php echo $res['username']; ?> </td>
                    <td> <?php echo $res['password']; ?> </td>
                    <td> <button class="btn btn-danger"> 
                        <a class="text-white" href="delete.php?id=<?php echo $res['id']; ?>">Delete</a> 
                    </button> </td>
                    <td> <button class="btn btn-primary"> 
                        <a class="text-white" href="update.php?id=<?php echo $res['id']; ?>">Update</a> 
                    </button> </td>
                </tr>
                <?php
                    }
                ?>

            </table>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>