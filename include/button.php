<div class="container-fluid">
  <div class="row d-flex justify-content-start">
    <div class="col-4">
      <a href="index.php"><button type="button" class="btn btn-light btn-block ">Home</button></a>
      <?php
        if(isset($_SESSION['user'])){
          include 'include/ul.php';
        }
      ?>
    </div>
    <div class="col-4 ml-3">
      <?php if (isset($_GET['data'])) {
        include 'include/form.php';
      } else {
      ?> <a href="?data"><button type="button" a class="btn btn-primary "> Ajouter des donnees</button></a><?php
      } include 'include/function.php';?></div>
<div class="col-4">
  <a href="?data2"></a> <button type="button" class="btn btn-secondary">Ajouter plus de donner</button></a>
  <?php if(isset($_GET['data2'])){include 'include/form2.php';}?>
</div>
  </div>
</div>