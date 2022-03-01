<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="formGroupExampleInput">Title</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="blogname" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Image:</label>
                    <input type="file" name="blogimg" id="" class="form-control" required>
                    
                </div>  

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="blogdetails" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="post">Post</button>
            </form>
        </div>
    </div>
</div>
<?php
    include "connectdb.php";
    if(isset($_POST['post'])){
        $title=filter_var($_POST['blogname'], FILTER_SANITIZE_STRING);
        
        $blogimage=$_FILES['blogimg']['name'] ;
        
        $tempimgname=$_FILES['blogimg']['tmp_name'];
        
        $blogdetails=filter_var($_POST['blogdetails'], FILTER_SANITIZE_STRING);
        if($title!="" && $blogimage!='' && $blogdetails!=""){
            if (move_uploaded_file($tempimgname, "img/blog/$blogimage")){
                
                $sql='';
                $sql="INSERT INTO blog (title, img, details) VALUES ('$title', '$blogimage', '$blogdetails')";
                $conn->query($sql);
                echo "<script>alert('Post Sucessfully')</script>" ;
            }


            
        }
    }
?>