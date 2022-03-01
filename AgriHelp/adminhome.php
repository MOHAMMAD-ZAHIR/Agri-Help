<?php
    include "header.php";
    include "connectdb.php";
    $sqlaa="SELECT COUNT(id) FROM `help` WHERE answer=''";
    $resultaa= $conn -> query($sqlaa);
    if ($resultaa->num_rows > 0) {
        // output data of each row
        while($rowaa = $resultaa->fetch_assoc()) {
          $unreplayed= $rowaa['COUNT(id)'];
        }
    }

?>

<style>
    .mainnav {
        display: none;
    }

    .adminnav {
        display: block;
    }
</style>

<div class="container-fluid">
    <div class="row my-5">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar  pt-3" style="height: 93vh;position:fixed">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link text-dark" style="font-weight: 600;"
                            href="adminhome.php?page=">Dashboard <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link text-dark" style="font-weight: 600;"
                            href="adminhome.php?page=blog">Blog Post</a> </li>
                    <li class="nav-item"><a class="nav-link text-dark" style="font-weight: 600;"
                            href="adminhome.php?page=replay">Reply Comments <sup
                                class="text-danger"><?php echo $unreplayed; ?></sup> </a></li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-5 px-4 pb-5">

            <?php
                if($_GET['page']=="blog"){
                    include "blogpost.php";
                }else if($_GET['page']==""){
                    include "adminindex.php";
                }else if($_GET['page']=="replay"){
                    include "replycomment.php";
                }
            ?>
        </main>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php
    include "footer.php";
?>