<form action="" method="POST">
    <div class="form-group">
        <label>Number of images</label>
        <input type="text" name="number" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-danger" value="Նկարել">
    </div>
</form>
<?php
if( isset($_POST['number']) ){
    $number = $_POST['number'];
    echo $number.'<br />';
    for($k = 1; $k <= $number; $k++) {
        ?>
        <?php //echo '<img src="images/1.jpg" width="200" class="rounded-circle">';?>
        <?='<img src="images/1.jpg" width="200" class="rounded-circle">';?>
        <?php
    }
}
?>
