<?php 
session_start();
include "db_conn.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        img{
            width:100px;
        }
        td.data {
            padding: 27px 0px;
        }
        a{
            text-decoration: none;
            color:white;
        }
        .box{
            width: 100vw;
            height: 100vh;
            background-image: url('img/welcome-page.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .bg{
            position: absolute;
            right: 40px;
            bottom: 40px;
            background-color: transparent;
            border: 2px solid red;
            border-radius: 20px;
            padding: 0px 20px;
        }
        .bgTwo{
            position: absolute;
            left: 40px;
            bottom: 40px;
            background-color: transparent;
            border: 2px solid red;
            border-radius: 20px;
            padding: 0px 20px;
        }
    </style>
  </head>
  <body>
      <div class="box">
          <div class="url">
              <span class="bg"><a href="userData.php">View Data</a></span>
          </div>
          <div class="urlTwo">
              <span class="bgTwo"><a href="index.php">Back</a></span>
          </div>
      </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                    $user = $_SESSION['user'];
                    $sql = "SELECT * from `form` where email='$user'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){ ?>
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Image </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Gender </th>
                                    <th> Country </th>
                                </tr>
                            </thead>
                            <tbody><?php
                                while($row = mysqli_fetch_assoc($result)){ ?>
                                    <tr>
                                        <td class="data"><?=$row['id']?></td>
                                        <td><img src="uploads/<?=$row['image_url']?>"></td>
                                        <td  class="data"><?=$row['name']?></td>
                                        <td class="data"><?=$row['email']?></td>
                                        <td class="data"><?=$row['gender']?></td>
                                        <td class="data"><?=$row['country']?></td>
                                    </tr>
                            <?php   }  ?>
                             </tbody>
                        </table>
                        <button type="submit" class="btn btn-warning" name="view"><a href="login.php">Back</a></button>
                <?php    } else {
                        echo "0 Results";
                        }
                        ?>
                        
            </div>
        </div>
    </div> -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>