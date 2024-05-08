<?PHP include "cabecalho.php"; ?> 

<h2>CADASTRAR UM NOVO POKEMON</h2>
<form  method="post" action="salvar.php" enctype="multipart/form-data">
    <input type="text" name="nome" placeholder="nome" class="form-control">
    <input type="radio" name="tipo" value="Normal" class="form-check-input"> Normal
    <input type="radio" name="tipo" value="Fogo"class="form-check-input"> Fogo
    <input type="radio" name="tipo" value="Água"class="form-check-input"> Agua
    <input type="radio" name="tipo" value="Grama"class="form-check-input"> Grama
    <input type="radio" name="tipo" value="Voador"class="form-check-input"> Voador
    <br>
    foto: <input type="file" name="foto" class="form-control">
    <br>
    <button class="btn btn-dark" type="submit">SALVAR POKEMON</button>
</form>

<?PHP include "rodape.php"; ?>