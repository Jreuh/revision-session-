<div class="container-fluid">
    <div class="row d-flex justify-content-start"> <div class="col-4">
     <a href="index.php">   <button type="button" class="btn btn-light btn-block ">Home</button></a></div>
      <div class="col-6 ml-3"> 
    <?php if (isset($_GET['data'])){
    include 'include/form.php';
}else {
  ?>  <a href="?data"><button type="button" a class="btn btn-primary "> Ajouter des donnees</button></a><?php
}?></div>
    </div>
</div>