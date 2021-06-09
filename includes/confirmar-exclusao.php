<main>





<h2 class="mt-3">Excluir Vaga</h2>
<form method="post">
    
    <div class="form-group">
      
      <p>Voce deseja realmente excluir a vaga?<strong><?=$obVaga->titulo?></strong></p>
    </div>

    

        <div class="form-group">
        <a href="index.php"><button type="button" class="btn btn-success">Cancelar</button></a>
            <button type="submit" name="deletar" class="btn btn-danger">Excluir</button>
        </div>
    </div>
</form>
</main>