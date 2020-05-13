    
<html>
    <head>
        <title>Registration page</title>
        <link rel="stylesheet" href="css/form.css"/>
    </head>
    <body>
        <div id="wrapper">
            <form action="form.php" method="GET">
                <div class="form-row active">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="Tom" placeholder="Username">
                </div>
                <div class="form-row">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="tom">
                </div>
                <div class="form-row">
                    <label for="password">Password</label>
                    <input type="password" id="password">
                </div>

                <div class="form-row">
                    <label for="day">Date of birth</label>
                    <select name="day" id="day">
                        <option>Select day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                    <select name="month" id="month">
                        <option>Select Month</option>
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="March">March</option>
                        <option value="May">May</option>
                    </select>
                    <select name="year" id="year">
                        <option>Select Year</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                    </select>
                </div>
                <input type="hidden" name="user_id" value="456" />

                <div class="form-row">
                    <label>Favorite Instructor</label>
                    <label for="elie">Elie</label>
                    <input type="radio" name="favorite_instructor" value="elie" id="elie">
                    <label for="matt">Matt</label>
                    <input type="radio" name="favorite_instructor" id="matt" value="matt" checked="checked">
                    <label for="tim">Tim</label>
                    <input type="radio" name="favorite_instructor" value="tim" id="tim">
                </div>
                <div class="form-row">
                    <label>Favorite Programming Language(s)</label>
                    <label for="ruby">Ruby</label>
                    <input type="checkbox" name="favorite_language1" value="Ruby" id="ruby">
                    <label for="javascript">JavaScript</label>
                    <input type="checkbox" name="favorite_language2" value="JavaScript" id="javascript" checked="checked">
                    <label for="python">Python</label>
                    <input type="checkbox" name="favorite_language3" value="Python" id="python">
                    <label for="go">Go</label>
                    <input type="checkbox" name="favorite_language4" value="Go" id="go">
                </div>
                
                <div class="form-row">
                    <label for="comment">Additional Comments</label>
                    <textarea name="comment" id="comment" cols="50" rows="7">Here is the text</textarea>
                </div>
                <div>
                    <!-- <input type="button" value="Proceed"> -->
                    <!-- <input type="reset" value="Reset"> -->
                   <input type="submit" value="Proceed">
                </div>
            </form>
        </div>
    </body>
</html>

<?php 
    $user_list_relations = 1; // snake case
    $userListRelations = 1; // camel case
    //$a-b = 2; don't permit
    // var_dump($_GET);
    //LIFO (Last Input First Ouput) - Stack
    $a = "Home";
    $b = $a;
    echo $a.'< -- >'.gettype($a).'<br />';
    $a = 1;
    echo $a.'< -- >'.gettype($a).'<br />';
    //boolean
    if(isset($_GET['name'])) {// if $_GET exists, isset-y veradardznum e 1 ,if(1) => true
        $name = $_GET['name'];
    }
    if(isset($_GET['username'])) {
        $username = $_GET['username'];
    }
    if($name && $username){
        echo 'Registered User| Name: '.$name.' Username: '.$username;
        //    echo 'Registered User| Name: '.$_POST['name'].' Username: '.$_POST['username'];
    }


    $number1 = 5;
    $number2 = 6;
    // change places of number1 and number2 variables
    $temp = $number1; // 5
    $number1 = $number2;  // 6
    $number2 = $temp;

    //unset($number1);

    //var_dump($number1);

    // !0 = 1
    // !1 = 0

    /**
     * a b &&
     * 0 0 0
     * 0 1 0
     * 1 0 0
     * 1 1 1
     */

?>
