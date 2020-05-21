<form action="#" method="POST">
    <div class="form-group">
        <label for="year" class="text-left">Տարի</label>
        <input type="text" class="form-control" name="year" id="year" placeholder="Գրեք տարին․․․">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Ստուգել">
    </div>
</form>

<?php
if(isset($_POST['year'])){
    $year = $_POST['year'];
    if($year % 4 == 0 || $year % 100 == 0 || $year % 400 == 0){
        echo $year.'<br />';
        $a = (int) ($year / 1000); // 1.992 = 1 + 0.992
        $b = $year / 100 % 10; // 1992 / 100  = 19.92, 19.92 % 10 => 19 bajanel 10-i vra vercnel mnacordy
        $c = $year / 10 % 10; // 1992 / 10 = 199, 199 % 10 = 9
        $d = $year % 10; // 1992 % 10 = 2

        // ' = \'
        // " = \"
        // '   ' = \'   \'
        // "   " = \"   \"

        echo '<h2 class="text-danger">'.$a.'</h2>';
        echo '<h3 class="text-primary">'.$b.'</h3>';
        echo '<h4 class="text-info">'.$c.'</h4>';
        echo '<h5 class="text-success">'.$d.'</h5>';
        echo "<br />";
        // echo "ceil=".ceil(1992 / 1000); // 2  
        // echo "<br />";
        // echo "floor=".floor(1992 / 1000); // 1 
        // echo "<br />";
        // echo "round=".round(1992 / 1000); //  
        // 1992 = 1 * 1000 + 9 * 100 + 9 * 10 + 2 * 1
    }else{
        echo '<span class="text-danger">'.$year." is not leap year!</span>";
    }
}
?>
