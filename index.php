<?php 
require 'vendor/autoload.php';

use \App\entity\Vaga;
$vagas = Vaga::getVagas();

require 'includes/header.php';
require 'includes/listagem.php';
require 'includes/footer.php';

