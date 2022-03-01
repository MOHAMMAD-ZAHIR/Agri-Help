<?php
    $sql110="SELECT * FROM `help` WHERE answer=''";
    $result110 = $conn->query($sql110);

    if ($result110->num_rows > 0) {
    // output data of each row
        while($row110 = $result110->fetch_assoc()) {
            ?>
<div class="card mb-5">
    <div class="card-header">Posted By <h3><?php echo $row110['name'] ?> </h3>
        <span><sub>Phone:<?php echo $row110['contact'] ?></sub></span>
        <span><sub>Email:<?php echo $row110['email'] ?></sub></span>
        <span><sub>Address:<?php echo $row110['address'] ?></sub></span>
        <span><sub><?php  echo "Asked: ".$row110['date']?></sub></span>
    </div>
    <img class="card-img-top" src="img/help/<?php echo $row110['image'] ?>" alt="Card image cap"
        style="height: 200px; width:200px">
    <div class="card-body">
        <p class="card-text"><?php echo $row110['description'] ?></p>
        <form method="post">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="answertext"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="answer">Answer</button>
        </form>

    </div>
</div>
<?php
            if(isset($_POST['answer'])){
                $answer=$_POST['answertext'];
                
                $id=$row110['id'];
                $update="UPDATE `help` SET `answer`='$answer' WHERE id=$id";
                if($conn -> query($update)){
                    echo "<script>alert('Responded')</script>";
                }
            }   
        }
    }
    

?>