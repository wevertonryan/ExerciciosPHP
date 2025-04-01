<?php
	$msgErro = ["", "", "", ""];
	function mensagemErro($erro) {
		if($erro != ""){
			echo $erro;
			return "";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Pets</title>
</head>
<body>
	<form action="#" method="GET">
		<label for="nome">Nome</label>
		<input type="text" name="nome" id="nome" placeholder="Nome do Animal" value="<?= $_GET["nome"] ?? '' ?>"></input> </br>
        <div class="erro"><?php
			$msgErro[0] = mensagemErro($msgErro[0]);
		?></div>

		<label for="idade">Idade</label>
		<input type="number" name="idade" id="idade" placeholder="Idade do Animal" value="<?= $_GET["idade"] ?? '' ?>"></input> </br>
		<div class="erro"><?php
			mensagemErro($msgErro[1]);
		?></div>

		<label for="cor">Cor</label>
		<input type="text" name="cor" id="cor" placeholder="Cor do Animal"  value="<?= $_GET["cor"] ?? '' ?>"></input> </br>
		<div class="erro"><?php
			mensagemErro($msgErro[2]);
		?></div>

		<label for="raca">Raça</label>
		<select id="raca" name="raca">
            <option disabled selected>Selecione uma opção!</option>
			<option value="Golden Retriever">Golden Retriever</option>
			<option value="Pitbull">Pitbull</option>
			<option value="Bulldog">Bulldog</option>
			<option value="Labrador Retriever">Labrador Retriever</option>
			<option value="Siberian Husky">Siberian Husky</option>
			<option value="Chihuahua">Chihuahua</option>
			<option value="Pug">Pug</option>
			<option value="Poodle">Poodle</option>
			<option value="Rottweiler">Rottweiler</option>
			<option value="Pomeranian">Pomeranian</option>
			<option value="Pastor Alemão">Pastor Alemão</option>
			<option value="Doberman">Doberman</option>
			<option value="Dalmata">Dalmata</option>
		</select> </br>
		<div class="erro"><?php
			mensagemErro($msgErro[3]);
		?></div>
		
		<button type="submit">Enviar</button>
	</form>
</body>
</html>

<?php
    require_once "../Models/pets.class.php";
    if($_GET){
		if($_GET["nome"] == ""){
			$msgErro[1] = ""
		} else {
			echo "<strong>Nome:</strong> " . $_GET["nome"] . "</br>";
		}
        
        echo "<strong>Idade:</strong> " . $_GET["idade"] . "</br>";
        echo "<strong>Cor:</strong> " . $_GET["cor"] . "</br>";
        echo "<strong>Raça:</strong> " . $_GET["raca"] . "</br>";
    }
?>