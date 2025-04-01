<?php
require_once "../Models/pets.class.php";

function mensagemErro($elemento) {
    global $msgErro;
    if ($msgErro[$elemento][0] != "") {
        echo $msgErro[$elemento][0];
    }
}

function validacao($info) {
    global $msgErro;
    if (empty($_GET[$info])) {
        $msgErro[$info][0] = $msgErro[$info][1] . " não foi fornecido.";
    }
}

$msgErro = [
    "nome" => ["", "Nome"],
    "idade" => ["", "Idade"],
    "cor" => ["", "Cor"],
    "raca" => ["", "Raça"]
];

if ($_GET) {
    validacao("nome");
    validacao("idade");
    validacao("cor");
    validacao("raca");
}

$ok = isset($_GET["nome"], $_GET["idade"], $_GET["cor"], $_GET["raca"]) 
      && $_GET["nome"] !== "" 
      && $_GET["idade"] !== "" 
      && $_GET["cor"] !== "" 
      && $_GET["raca"] !== "";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css">
    <title>Pets</title>
</head>
<body>
    <form action="#" method="GET">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Nome do Animal" value="<?php if(!$ok && isset($_GET["nome"])){echo $_GET["nome"];} else {echo '';}?>">
        <div class="erro"><?php mensagemErro("nome"); ?></div>

        <label for="idade">Idade</label>
        <input type="number" name="idade" id="idade" placeholder="Idade do Animal" value="<?php if(!$ok && isset($_GET["idade"])){echo $_GET["idade"];} else {echo '';}?>">
        <div class="erro"><?php mensagemErro("idade"); ?></div>

        <label for="cor">Cor</label>
        <input type="text" name="cor" id="cor" placeholder="Cor do Animal" value="<?php if(!$ok && isset($_GET["cor"])){echo $_GET["cor"];} else {echo '';}?>">
        <div class="erro"><?php mensagemErro("cor"); ?></div>

        <label for="raca">Raça</label>
        <select id="raca" name="raca">
            <option disabled selected>Selecione uma opção!</option>
            <?php 
            $racas = ["Golden Retriever", "Pitbull", "Bulldog", "Labrador Retriever", "Siberian Husky"];
            foreach ($racas as $raca) {
				if(isset($_GET["raca"]) && ($_GET["raca"] == $raca)){
					$selected = "selected";
				} else {
					$selected = "";
				}
                echo "<option value=\"$raca\" $selected>$raca</option>";
            }
            ?>
        </select>
        <div class="erro"><?php mensagemErro("raca"); ?></div>

        <button type="submit">Enviar</button>
    </form>

    <?php 
		if($ok){
        	echo "<h2>Dados do Pet</h2>";
        	echo "<p><strong>Nome:</strong> " . $_GET["nome"] . "</p>";
        	echo "<p><strong>Idade:</strong> " . $_GET["idade"] . "</p>";
        	echo "<p><strong>Cor:</strong> " . $_GET["cor"] . "</p>";
        	echo "<p><strong>Raça:</strong> " . $_GET["raca"] . "</p>";
    	}
	?>
</body>
</html>
