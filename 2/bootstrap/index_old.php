<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      console.log(1);
      $('.first-image').click(function(){
        alert("Clicked");
        var firstImageSrc = $('.first-image').attr('src');
        var secondImageSrc = $('.second-image').attr('src');
        console.log(firstImageSrc);
        console.log(secondImageSrc);
        $('.first-image').attr('src',secondImageSrc);
        $('.second-image').attr('src',firstImageSrc);
      });
      $('.third-image-class').click(function(){
        var thirdImageContent = $('.third-image-class').html();
        var fourthImageContent = $('.fourth-image-class').html();
        console.log(thirdImageContent);
        console.log(fourthImageContent);
        $('.third-image-class').html(fourthImageContent);
        $('.fourth-image-class').html(thirdImageContent);
      });
      
    });
  </script>
</head>
<body>

<!-- <nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Գլխավոր</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Գրանցում</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>
</nav> -->

<nav class="navbar navbar-expand-sm bg-light">
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=home">Գլխավոր</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=reg">Գրանցում</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=gallery">Տեսադարան</a>
      </li>
    </ul>
  </div>
</nav>
<br>

<div class="container-fluid">
  <div class="row"> <!-- 12 mas-->
    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="border:1px solid #000;">A</div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="border:1px solid #000;">
      <?php
        // Debugging
        // var_dump($_GET);
        // var_dump($_GET['page']);
        // var_dump(isset($_GET['page']));
        if(isset($_GET['page'])){
          $page = $_GET['page'];
          // var_dump("page index-y ka");
          if($page == 'home'){
            // var_dump("page havasar e home");
            echo "Home";
          }elseif($page == 'reg'){
            // var_dump("page havasar e reg");
            //echo "registration";
            ?>
            <h1 class="text text-danger">Գրանցման ֆորմա</h1>
            <form action="#" method="POST">
              <div class="form-group">
                <label for="name" class="text-left">Անուն</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Գրեք անունը․․․">
              </div>
              <div class="form-group">
                <label for="username">Ծածկանուն</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Գրեք ծածկանունը․․․">
              </div>
              <div class="form-group">
                <label for="password">Ծածկագիր</label>
                <input type="text" class="form-control" name="password" id="password" placeholder="Գրեք ծածկագիրը․․․">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Գրանցվել">
              </div>
            </form>
            <?php
          }elseif($page == 'gallery'){
            // var_dump("page havasar e gallery");
            //echo "gallery";
            ?>
            <div>
              <img src="images/1.jpg" width="300" alt="This is 1st image" title="This is 1st image" class="rounded first-image" />
              <img src="images/2.jpg" width="300" alt="This is 2nd image" title="This is 2nd image" class="rounded-circle second-image" />
            </div>
            <div>
              <span class="third-image-class"><img src="images/1.jpg" width="300" alt="This is 1st image" title="This is 3th image" class="rounded third-image" /></span>
              <span class="fourth-image-class"><img src="images/2.jpg" width="300" alt="This is 2nd image" title="This is 4th image" class="rounded-circle fourth-image" /></span>
            </div>
            <?php
          }
        }

      ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border:1px solid #000;">C</div>
  </div>
</div>

</body>
</html>
