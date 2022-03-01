<?php
    include "header.php"

?>

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-6 mx-auto mt-5">
            <form class="m-auto" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                        name="password">
                </div>

                <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                <input type="reset" value="Reset" class="btn btn-warning float-right">
            </form>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br>
<?php
    if(isset($_POST['submit'])){
        $email= $_POST['email'];
        $pass= $_POST['password'];
        
        if($email="admin@gmail.com" && $pass="admin1234"){
            // header("Location: adminhome.php?page=");
            // exit();
            echo "<script>location.replace('adminhome.php?page=')</script>";
            
        }
    }

?>


<?php
    include "footer.php";
?>