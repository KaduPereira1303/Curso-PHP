<?php 
require 'vendor/autoload.php';

define('TITLE', 'Cadastrar Vaga');

use \App\entity\Vaga;

if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])):

    $obVaga = new Vaga;
    $obVaga->titulo = $_POST['titulo'];
    $obVaga->descricao = $_POST['descricao'];
    $obVaga->ativo = $_POST['ativo'];
    $obVaga->cadastrar();
    
    header('Location: index.php?status=success');
    exit;
  
endif;



require 'includes/header.php';
require 'includes/formulario.php';
require 'includes/footer.php';

