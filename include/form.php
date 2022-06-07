
<form method="POST" action=''>
  <div class="form-group row">
    <label for="Prenom" class="col-sm-2 col-form-label">Prenom</label>
    <div class="col-sm-10" >
      <input type="text" class="form-control" id="Prenom" name ="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" >
    </div>
  </div>
  <div class="form-group row">
    <label for="last-name" class="col-sm-2 col-form-label">Nom de famille</label>
    <div class="col-sm-10">
      <input type="text" name='last-name' class="form-control" id="last-name" value="<?php echo isset($_POST['last-name']) ? $_POST['last-name'] : '' ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="age" class="col-sm-2 col-form-label">Age</label>
    <div class="col-sm-10">
      <input type="number" name='age' class="form-control" id="age"min="10"max="60" value="<?php echo isset($_POST['age']) ? $_POST['age'] : '' ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="size" class="col-sm-2 col-form-label">Taille(entre 1.6 et 2.00)</label>
    <div class="col-sm-10">
      <input type="number" name='size' class="form-control" id="size"min="1.6"max="2"step="0.01" value="<?php echo isset($_POST['size']) ? $_POST['size'] : '' ?>">
    </div>
  </div>
  <fieldset class="form-group row">
    <legend class="col-form-label col-sm-2 float-sm-left pt-0">Radios</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="apprenant" <?php if (!empty($_POST['status'])) echo 'checked'; ?> >
        <label class="form-check-label" for="gridRadios1">
          Apprenant
        </label>
      
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="formateur" <?php if (!empty($_POST['status'])) echo 'checked'; ?>>
        <label class="form-check-label" for="gridRadios2">
         Formateur
        </label>
      </div>

    </div>
  </fieldset>
  
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="submit">Soummettre</button>
    </div>
  </div>
</form>

<?php
if(isset($_POST['submit'])){
  if (empty($_POST['name'])){?>
    <div class="alert alert-danger" role="alert">
    Veuillez entrer votre prenom
</div><?php
  }
  if (empty($_POST['last-name'])){?>
    <div class="alert alert-danger" role="alert">
    Veuillez entrer votre nom de famille
</div><?php
  }
  if (empty($_POST['age'])){?>
    <div class="alert alert-danger" role="alert">
    Veuillez entrer votre age
</div><?php
  }
  if (empty($_POST['size'])){?>
    <div class="alert alert-danger" role="alert">
    Veuillez entrer votre taille
</div><?php
  }
  if (empty($_POST['status'])){?>
    <div class="alert alert-danger" role="alert">
    Veuillez entrer votre statut
</div><?php
  }
  else {
  $_SESSION['user']=$_POST;
$info= [
 'name'=> htmlspecialchars( $_SESSION['user']['name']),
 'last-name' =>htmlspecialchars( $_SESSION['user']['last-name']),
 'age'=>htmlspecialchars( $_SESSION['user']['age']),
 'size'=>htmlspecialchars( $_SESSION['user']['size']),
 'status'=>htmlspecialchars( $_SESSION['user']['status'])

];
}
session_destroy();
}?>

