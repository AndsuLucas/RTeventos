<?php 


//Verifica se existe algum arquivo atrelado ao nome page=.
//exemplo: "?pagina=teste" -> existe algum arquívo chamado teste.php?
function carregarPagina () {

	if(isset($_GET["pagina"])) {
		$arquivo = "./paginas/".$_GET["pagina"].".php";
		
		if(file_exists($arquivo)){
			
			return $arquivo;

		}else{
			echo  "<script>
				alert('este link não existe, favor conferir se o nome do pagina=nome condiz com o arquivo no diretório (paginas)')
			</script>";
		}
		




	}else{
		return "index.php";
	}

}




?>
