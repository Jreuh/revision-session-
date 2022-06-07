<?php
if (isset($_GET['debug'])){?><pre><?php
    print_r($_SESSION['user']);
}

if (isset($_GET['concac'])){?><pre><?php
    print_r($_SESSION['user']);
}

if(isset($_GET['fonct'])){
    ReadOnly();
}

function ReadOnly(){
    foreach($_SESSION['user'] as $key => $value){
        echo  "<br>Cette ligne correspont a la clé $key et contient $value.<br>";
    }
}


if(isset($_GET['supp'])){
    session_destroy();?>
    <div class="alert alert-danger mt-3 text-center" role="alert">
        Votre session à été supprimer ! 
</div>
<?php
}
?>
