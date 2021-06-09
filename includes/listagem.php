<?php

    $mensagem ='';
    if(isset($_GET['status'])):
        switch($_GET['status']):
            case 'success':
                $mensagem  = '<div class="alert alert-success">Acão executada com sucesso!</div>';
                break;
            case 'error':
                $mensagem  = '<div class="alert alert-danger">Acão não executada!</div>';
                break;
                    

        endswitch;
    endif;


    $resultados = '';
    foreach($vagas as $vaga):
        $resultados .= '<tr>
                        <td>'.$vaga->id.'</td>
                        <td>'.$vaga->titulo.'</td>
                        <td>'.$vaga->descricao.'</td>
                        <td>'.($vaga->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
                        <td>'.date('d/m/Y à\s H:i:s', strtotime($vaga->data)).'</td>
                        <td>
                       
                        <a href="editar.php?id='.$vaga->id.'"><button type="button" class="btn btn-primary">Editar</button></a>
                        <a href="deletar.php?id='.$vaga->id.'"><button type="button" class="btn btn-danger">Deletar</button></a>
                        
                        </td>
                        </tr>';
    endforeach;

?>

<main>

    <?=$mensagem?>

    <section>

       <a href="cadastrar.php">
          <button class="btn btn-success">Cadastrar</button>
        </a>
    </section>
    <section>
    
        <table class="table bg-light mt-3" >
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Titulo</td>
                    <td>Descricao</td>
                    <td>Status</td>
                    <td>Data</td>
                    <td>Ações</td>
                </tr>
            </thead>
            
            <tbody>

                <?=$resultados?>
           
            </tbody>
        </table>

    </section>




</main>