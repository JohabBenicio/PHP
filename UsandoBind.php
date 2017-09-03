<?php
	$conn = new PDO(xxxx);
	$stmt = conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES(:LOGIN, :PASSWORD)");

	$login = "johab";
	$password = "12345678"

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);

	$stmt->execute();

?>