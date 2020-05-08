<html>
    <head>
        <title>My Project</title>
    </head>
    <body>
        <?php
        
            function add($a, $b) 
            {
                return $a + $b;
            }

            function getName($name, $surname) // function declaration
            {
                return $name.' '.$surname;
            }
            $n = "Gevorg1";
            $s = "Darbinyan";
        ?>
        <?for($i = 1; $i <= 10; $i++) {?>
            <div id="myNameExpression">My name is <?php echo getName($n, $s); // call function ?></div>
        <?php }?>
       
        <div>5 + 5 =  <?php echo add(5, 5); ?></div>
        <div>5 * 5 =  <?php echo 5 * 5; ?></div>
    </body>
    <script src="js/index.js"></script> <!-- We should include js file at the end because
     in that case DOM will be loaded and document.getElementById('myNameExpression') element will be available-->
</html>