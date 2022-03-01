    
<?php
    include "header.php";
    include "connectdb.php";?>
    
    <div class="container pt-5 mt-5 pb-5">
    <div class="row mb-5">
    <?php
    $sql="";
    $sql="SELECT * FROM blog WHERE 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            
    
?>

        <div class="col-md-6 col-sm-12 col-12 pb-5">
            <div class="card">
                <div class="card-body bg-light">
                    <img src="img/blog/<?php echo $row['img'] ; ?>" class="card-img-top" alt="..." height="250">
                    <div class="card-title bg-success px-2 text-light py-1">
                        <h3 class="pb-2"><?php echo $row["title"]; ?></h3>
                        <p class="" style="font-size:10pt">Date: <?php echo $row["time"]; ?></p>
                    </div>
                    <!-- <div class="card-text text-justify p-2 bg-white"
                        style="border: 1px solid black;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; border-radius:5px">
                        <?php //echo $row["details"]; ?>
                    </div> -->
                    <textarea name="" id="" style="width:100%;border: 0px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; border-radius:5px" rows="10" class="card-text text-justify p-2 bg-light" readonly><?php echo $row["details"]; ?></textarea>
                </div>
            </div>
        </div>
        <?php
              }
        } else {
        echo "0 results";
        }
        ?>
    </div>
</div>

<?php
    
    include "footer.php";
?>