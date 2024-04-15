<?php
    session_start();
    include_once('zconexao.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Central de pedidos</title>
	<link rel="stylesheet" href="">

	<style>

		.todo1{
			background-color: #7b4ff4;
			width: 1500px;
			height: 1850px;
			margin-left: 300px;
			margin-top: 150px;
		
			
		}

		.todo{
			background-color: #1006a3;
			width: 1020px;
			height: 1280px;
			margin-top:-120px;
			margin-left: 200px;
			border-radius: 20px;
			border: solid 30px #1809cc;
			box-shadow: 0 0 100px 0 #76C0E6; 
		}

		.d1{
			background-color:  #7555da;
			border-radius: 10px;
			width: 200px;
			height: 580px;
			justify-items: center;
			padding: 20px;
			margin: 20px;

		}

		.d2{
			background-color: #764af4;
			border-radius: 10px;
			width: 200px;
			height: 580px;
			left: 250px;
			top: -640px;
			position: relative;
			justify-items: center;
			padding: 20px;
			margin: 20px;
		}

		.d3{
			background-color: #c68bfd;
			border-radius: 10px;
			width: 200px;
			height: 580px;
			left: 500px;
			top: -1280px;
			position: relative;
			justify-items: center;
			padding: 20px;
			margin: 20px;
		}

		.d4{
			background-color: #8255ff;
			border-radius: 10px;
			width: 200px;
			height: 580px;
			left: 750px;
			top: -1920px;
			position: relative;
			justify-items: center;
			padding: 20px;
			margin: 20px;
		}

		.d5{
			
			background-color: #7354de;
			border-radius: 10px;
			width: 200px;
			height: 580px;
			top: -1910px;
			position: relative;
			justify-items: center;
			padding: 20px;
			margin: 20px;
		}

		.d6{
			background-color:#7349f3;
			border-radius: 10px;
			width: 200px;
			height: 580px;
			left: 500px;
			top: -2550px;
			position: relative;
			justify-items: center;
			padding: 20px;
			margin: 20px;
		}

		.d7{
			background-color: #3b1de0;
			border-radius: 10px;
			width: 200px;
			height: 580px;
			left: 750px;
			top: -3190px;
			position: relative;
			justify-items: center;
			padding: 20px;
			margin: 20px;
		}

		.d8{
			
			background-color: #ae79ff;
			border-radius: 10px;
			width: 200px;
			height: 580px;
			top: -3830px;
			left: 250px;
			position: relative;
			justify-items: center;
			padding: 20px;
			margin: 20px;
		}

		.h1{

			background-color: #000079;
			top: -1400px;
			width: 1500px;
			height: 220px;
			color: white;
			padding-top: 100px;
			text-align: center;
			font-family: Lucida Console;
			font-size: 20px;
		}

		input{
			border-radius: 10px;
		}

		label{
			font-family: verdana;
			font-weight: bold;
		}
		h2{
			font-family: verdana;
		}

		.texto{
			
			top: -1200px;
			width: 1500px;
			height: 220px;
			color: white;
			text-align: center;
			font-family: Lucida Console;
			font-size: 20px;
			margin-top: 70px;
		}
		
	</style>
</head>
<body>

<div class="todo1">

	<div class="h1">
		<h1>Meus pedidos</h1>
	<?php
        echo "<h1> <u>$logado</u></h1>";
    ?>
</div>

<div class="texto">
		<p> Reúna todos os seus <b>PEDIDOS</b> em um só lugar, sem a necessidade de ficar navegando de site em site. Facilite sua vida de compras!</p>
</div>

<div class="todo">
		
		<div class="d1"> 

			<h2>Pedido 1</h2>

			<label> Empresa: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Cidade-Estado: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Itens: 
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Valor <br> <br> <input type="text" name="pedido1" value=""> </label>
		</div>

		<div class="d2"> 

			<h2>Pedido 2</h2>

			<label> Empresa: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Cidade-Estado: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Itens: 
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Valor <br> <br> <input type="text" name="pedido1" value=""> </label>
		</div>

		<div class="d3"> 

			<h2>Pedido 3</h2>

			<label> Empresa: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Cidade-Estado: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Itens: 
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Valor <br> <br> <input type="text" name="pedido1" value=""> </label>
		</div>

		<div class="d4"> 

			<h2>Pedido 4</h2>

			<label> Empresa: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Cidade-Estado: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Itens: 
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Valor <br> <br> <input type="text" name="pedido1" value=""> </label>
		</div>

		<div class="d5"> 

			<h2>Pedido 5</h2>

			<label> Empresa: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Cidade-Estado: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Itens: 
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Valor <br> <br> <input type="text" name="pedido1" value=""> </label>
		</div>

		<div class="d6"> 

			<h2>Pedido 7</h2>

			<label> Empresa: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Cidade-Estado: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Itens: 
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Valor <br> <br> <input type="text" name="pedido1" value=""> </label>
		</div>

		<div class="d7"> 

			<h2>Pedido 8</h2>

			<label> Empresa: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Cidade-Estado: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Itens: 
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Valor <br> <br> <input type="text" name="pedido1" value=""> </label>
		</div>

		<div class="d8"> 

			<h2>Pedido 6</h2>

			<label> Empresa: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Cidade-Estado: <br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Itens: 
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value="">
			<br> <br> <input type="text" name="pedido1" value=""> </label>
			<label> <br> <br> Valor <br> <br> <input type="text" name="pedido1" value=""> </label>
		</div>


		
</div>

</div>
	
</body>
</html>             
