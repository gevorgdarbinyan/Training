<?php include "header.php";?>
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
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=leap">Նահանջ տարի</a>
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
        if(isset($_GET['page'])){
          $page = $_GET['page'];
          $file = "page/".$page.".php";
          if(file_exists($file)){
            include $file;
          }else{
            include "page/error404.php";
          }
        }
      ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="border:1px solid #000;">C</div>
  </div>
</div>
<?php include "footer.php";?>
