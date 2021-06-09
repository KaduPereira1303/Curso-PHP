<?php 
require 'vendor/autoload.php';

use \App\entity\Vaga;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])):

    header('Location: index.php?status=error');
    exit;

endif;

$obVaga = Vaga::getVaga($_GET['id']);



if(!$obVaga instanceof Vaga):

    header('Location: index.php?status=error');
    exit;

endif;

if(isset($_POST['deletar'])):


    $obVaga->deletar();

   

    header('Location: index.php?status=success');
    exit;
  
endif;



require 'includes/header.php';
require 'includes/confirmar-exclusao.php';
require 'includes/footer.php';

