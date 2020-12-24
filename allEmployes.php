<html>
<?php

require 'model.php';
$model=new modele;
$employes=$model->allEmployes();
?>
<br/>
<center><h1><strong> liste des employes</strong></h1></center>
<br/><br/><br/><br/>
<center>
		<table border="1">
			<th align="center">numero </th>
			<th>nom     </th>
			<th>prenom     </th>
			<th>sexe     </th>
			<th>address    </th>
			<th>date naissance    </th>
			<th>numero de service    </th>
	<?php foreach($employes as $employe) { ?>
	<tr align="center">
		<td><?php echo $employe['id'];?></td>
		<td><?php echo $employe['nom'];?></td>
		<td><?php echo $employe['prenom'];?></td>
		<td><?php echo $employe['sexe'];?></td>
		<td><?php echo $employe['address'];?></td>
		<td><?php echo $employe['date_naissance'];?></td>
		<td><?php echo $employe['id_service'];?></td><?php } ?>
	</tr>
	</table>
</center>
</html>