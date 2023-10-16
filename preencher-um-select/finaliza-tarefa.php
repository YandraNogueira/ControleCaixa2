<?php
include_once("conexao.php");
//Recebe o id da tarefa selecionada na página index
	$id_tarefas = $_GET['id_tarefas'];

	$up_finaliza = "UPDATE tarefas SET status = 'Pendente' WHERE id_tarefas = '$id_tarefas'";
	$query_up_finaliza = mysqli_query($conn, $up_finaliza);
	if (mysqli_affected_rows($conn) > 0) {
	 	echo '<script language="javascript">alert("Tarefa finalizada com sucesso.")</script>';
		echo '<script language="javascript">window.location="index.php"</script>';
	}else{
		echo '<script language="javascript">alert("Ocorreu um erro ao finalizar a tarefa.")</script>';
		echo '<script language="javascript">window.location="index.php"</script>';
	}
	mysqli_close($conn);
?>