<?php include "db.php";?>
<?php include "functions.php";?> 

<?php include "includes/header.php"; ?>
    <div class="container">
        <div class="col-sm-6">
          <h1 class="text-center">Display Data</h1>
          <?php readRows();
            echo "<br>";
            ?>
        </div>
    </div>
<?php include "includes/footer.php";?>