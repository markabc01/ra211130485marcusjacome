<?php
include "pages/cabecalho.php";
?>


	<div id="main">
		<div class="article">
			<h1>
				<?php
					include_once("function/controlar.php");
					@$valor = $_GET["pg"];
					controlarAcesso($valor);

				 ?>

			</h1>
		</div>
		</div>
	<div id="sidebar">

	</div>
<br>
<?php
		include "pages/rodape.php";
?>
