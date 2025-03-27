<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Pets</title>
</head>
<body>
	<form action="#" method="GET">
		<label for="nome">Nome</label>
		<input type="text" name="nome" id="nome" placeholder="Nome do Animal"></input> </br>
        <div></div>
		<label for="idade">Idade</label>
		<input type="number" name="idade" id="idade" placeholder="Idade do Animal"></input> </br>
		<label for="cor">Cor</label>
		<input type="text" name="cor" id="cor" placeholder="Cor do Animal"></input> </br>
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
		
		<button type="submit">Enviar</button>
	</form>
</body>
</html>

<?php
    require_once "../Models/pets.class.php";
    if($_GET){
        echo "<strong>Nome:</strong> " . $_GET["nome"] . "</br>";
        echo "<strong>Idade:</strong> " . $_GET["idade"] . "</br>";
        echo "<strong>Cor:</strong> " . $_GET["cor"] . "</br>";
        echo "<strong>Raça:</strong> " . $_GET["raca"] . "</br>";
    }
?>