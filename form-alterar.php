<?PHP include "cabecalho.php"; 
include "conexao.php";
$id= $_GET["id"];
$nome = "nome do pokemon";
$tipo = "tipo do pokemon";
$foto = "foto do pokemon";

$sql = "select * from tb_pokemon where id = $id";
$resultado = mysqli_query($conexao, $sql);
while($umPokemon = mysqli_fetch_assoc($resultado)): 
    $nome = $umPokemon['nome'];
    $tipo = $umPokemon['tipo'];
    $foto = $umPokemon['foto'];
endwhile;


?> 

<h2>EDITAR POKEMON NUMERO X <?=$id;?> </h2>
<form  method="post" action="atualizar.php?id=<?=$id;?>" enctype="multipart/form-data">
    <input type="text" name="nome" placeholder="nome" class="form-control" value="<?=$nome; ?>">
    
    <input type="radio" name="tipo" value="Normal" class="form-check-input"> Normal

    <input type="radio" name="tipo" value="Fogo"class="form-check-input" <?php if($tipo == "Fogo"){ echo "checked"; }?>> Fogo

    <input type="radio" name="tipo" value="Água"class="form-check-input" <?php if($tipo == "Água"){ echo "checked"; }?>> Agua

    <input type="radio" name="tipo" value="Grama"class="form-check-input"<?php if($tipo == "Grama"){ echo "checked"; }?>> Grama

    <input type="radio" name="tipo" value="Voador"class="form-check-input"<?php if($tipo == "Voador"){ echo "checked"; }?>> Voador]

    <br>
    foto: <input type="file" name="foto" class="form-control">
    <br>
    <img src="img/<?=$foto;?>" alt="<?=$foto?>" class="img-fluid  w-40 ">
    <br>
    <button class="btn btn-dark" type="submit">SALVAR POKEMON</button>
</form>

<?PHP
mysqli_close($conexao);
 include "rodape.php"; ?>