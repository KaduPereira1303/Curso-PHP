<?php 
require 'vendor/autoload.php';

define('TITLE', 'Editar Vaga');

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

if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])):

    $obVaga->titulo = $_POST['titulo'];
    $obVaga->descricao = $_POST['descricao'];
    $obVaga->ativo = $_POST['ativo'];
    $obVaga->atualizar();

   

    header('Location: index.php?status=success');
    exit;
  
endif;



require 'includes/header.php';
require 'includes/formulario.php';
require 'includes/footer.php';

