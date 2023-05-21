<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="icon.png">
<head>
    <title>CEP Bertholdo</title>
</head>
<body>
    <div class="container">
        <h1><img src="logo.png" width="280"/></h1>
        <form class="form" method="POST" action="#">
            <input type="text" id="cep" name="cep" required placeholder="Digite o CEP">
            <input type="submit" value="Consultar">
        </form>
        <?php
        
		include_once 'Address.php'; // INCLUSÂO DO ARQUIVO Address.php(classe)
		
		
		if(!empty($_POST['cep'])){      //VERIFICA SE NÃO ESTA VAZIO
			
			$cep = $_POST['cep'];
			$addressCEP = new Address(); // CRIA OBJETO
			
			$addressCEP = $addressCEP->get_address($cep);
			//$address = (get_address($cep)); // ESCRITA DE VARIÁVEL ERRADA $cep EM VEZ DE $cp
		
            echo '<div class="result">';
            echo '<label>CEP</label>'."<span>$cep</span>";
            echo '<label>Rua</label>'."<span>$addressCEP->logradouro</span>";
            echo '<label>Bairro</label>'."<span>$addressCEP->bairro</span>";
            echo '<label>Estado</label>'."<span>$addressCEP->uf</span>";
            echo '</div>';
		 }
		
		?>
        
    </div>
</body>
</html>

