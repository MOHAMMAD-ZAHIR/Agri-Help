<?php
    include "header.php";
    include "connectdb.php";
?>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $contact = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $problem = $_POST['problem'];
        
        $description = $_POST['description'];

        $image=$_FILES['image']['name'] ;
        $tempimage=$_FILES['image']['tmp_name'] ;
        if(move_uploaded_file($tempimage,"img/help/$image")){
            $sql = "INSERT INTO `help`(`name`, `contact`, `email`, `address`, `problem`, `image`, `description`) VALUES ('$name','$contact','$email','$address','$problem','$image','$description')";
            if($conn-> query($sql)){
                echo "<script>alert('You will Get answer Soon... ...')</script>";
                
            }
        }


        
          
      
    }
?>

<div class="container-fluid pb-5">
    <div class="row mt-5 mb-5 pb-5">
        <div class="col-md-4 mt-3 mb-5">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Enter your name">
                </div>
                <div class="row">
                    <div class="col-5">
                        <label for="">Contact Number</label>
                        <input class="form-control" type="tel" id="phone" name="phone" placeholder="01xxxxxxxxx"
                            pattern="(01){1}[3-9]{1}\d{8}" required>
                    </div>
                    <div class="col-7">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted" style="font-size: 12px;">We'll never share
                            your email with anyone.</small>

                    </div>
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address" recquired>
                </div>
                <div class="form-group">
                    <label for="">Problem Name</label>
                    <input type="text" name="problem" id="" class="form-control" placeholder="Tell about your Problem"
                        required>
                </div>
                <div class="form-group">
                    <label for="">Insert A Photo</label><br>
                    <input class="form-control-file" type="file" name="image" id="" required>
                </div>
                <div class="form-group">
                    <label for=""> Describe your problem</label>
                    <textarea name="description" id="" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-8 mt-3">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0 mx-auto" method="post">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search Your Problem..."
                            aria-label="Search" name="tosearch">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search" value="search">Search</button>
                    </form>
                </div>
            </nav>
            <?php
                if(isset($_POST['search'])){
                    $search=$_POST['tosearch'];
                    $sql0="SELECT * FROM `help` WHERE problem like '%".$search."%'";
                    $result0 = $conn->query($sql0);

                    if ($result0->num_rows > 0) {
                    // output data of each row
                        while($row0 = $result0->fetch_assoc()) {
                            
                            ?>
            <div class="card my-2">
                <div class="card-header">
                    <h3><?php echo $row0['name'];?></h3>
                </div>
                <img class="card-img-top m-3" src="img/help/<?php echo $row0['image'] ?>" alt="Card image cap"
                    style="width: 200px; height:200px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row0['problem'] ?></h5>
                    <p class="card-text"><?php  echo $row0['description'] ?></p>
                    <div class="bg-light rounded p-4">
                        <label for="">Answer:</label>
                        <hr class="m-0">
                        <p><?php echo $row0['answer']?></p>
                    </div>

                </div>
            </div>
            <?php
                        }
                    }
                }else{
                    $sql1="SELECT * FROM `help` WHERE 1";
                    $result1 = $conn->query($sql1);

                    if ($result1->num_rows > 0) {
                    // output data of each row
                        while($row1 = $result1->fetch_assoc()) {
                            
                        //echo $row1['problem'];
                    ?>
            <div class="card my-2">
                <div class="card-header">
                    <h3><?php echo $row1['name'];?></h3>
                </div>
                <img class="card-img-top m-3" src="img/help/<?php echo $row1['image'] ?>" alt="Card image cap"
                    style="width: 200px; height:200px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row1['problem'] ?></h5>
                    <p class="card-text"><?php  echo $row1['description'] ?></p>
                    <div class="bg-light rounded p-4">
                        <label for="" >Answer:</label>
                        <hr class="m-0">
                        <p><?php echo $row1['answer'] ?></p>
                    </div>

                </div>
            </div>
            <?php
                        }
                    }
                }
            ?>
        </div>

    </div>
</div>
<?php
    include "footer.php";
?>