<?php
    

if (isset($_GET['debug'])){?><pre><?php
    print_r($_SESSION['user']);
}

if (isset($_GET['concac'])){?><pre><?php
    if (isset($_GET['concac'])){?>
        <p> <?=$_SESSION['user']['name'].' '.$_SESSION['user']['last-name']?><br>
        <?=$_SESSION['user']['age']?> ans , je mesure <?=$_SESSION['user']['size']?>
        et je fais partie des <?=$_SESSION['user']['status']?> de L'AFCI </p>
        
        <p> <?=$_SESSION['user']['name'].' '.strtoupper($_SESSION['user']['last-name'])?><br>
        <?=$_SESSION['user']['age']?> ans , je mesure <?=$_SESSION['user']['size']?>
        et je fais partie des <?=$_SESSION['user']['status']?> de L'AFCI </p>
        
        <p> <?=$_SESSION['user']['name'].' '.strtoupper($_SESSION['user']['last-name'])?><br>
        <?=$_SESSION['user']['age']?> ans , je mesure <?=str_replace('.',',',$_SESSION['user']['size'])?>
        et je fais partie des <?=$_SESSION['user']['status']?> de L'AFCI </p>

        <?php ;}
}


if (isset($_GET['boucle'])){
    for ($i=1;$i<=10;$i++){?>
     <p> <?=$i,' ',$_SESSION['user']['name'].' '.$_SESSION['user']['last-name']?>
     <?=$_SESSION['user']['age']?> ans , je mesure <?=$_SESSION['user']['size']?>
     et je fais partie des <?=$_SESSION['user']['status']?> de L'AFCI </p><?php
    } ;
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

