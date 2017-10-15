<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
		<style type="text/css">
		.auto-style1 {
			margin-left: 116px;
			margin-top: 20px;
		}
		.auto-style2 {
			margin-left: 127px
		}
		.auto-style3 {
			margin-left: 127px;
		}
		</style>
	</head>
	<body background="aa.jpg">
		<center><h1>Calculadora</h1></center>
		<div style="background-color:white; margin-left:500px; margin-top:150px; width:400px">
		<form action="resultado.php" method="post">
			<select name="operador">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicaci&oacute;n</option>
				<option value="division">Divisi&oacute;n</option>
			</select><br />
			Ingresa tu primer n&uacute;mero:<br />
			<input type="text" name="valor1"><br />
			Ingresa tu segundo valor:<br />
			<input type="text" name="valor2"><br>
			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
			
		</form>
		</div>
		<font face="times new roman" color="#2531FF" size="2">
	<i><u><p ALIGN="RIGHT">Diseño realizado por: wiliam de jesus guillen cruz</p></i></u>
	</body>
</html>