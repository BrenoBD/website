<div class="menu">
<h2>Estou na minha página Home!</h2>
<ul>
<?php
	$teste = \Models\HomeModel::pegarTeste();
	foreach($teste as $value){
?>
	<li><?php echo $value['nome'];  ?></li>
<?php  
	}
?>
</ul>
</div>