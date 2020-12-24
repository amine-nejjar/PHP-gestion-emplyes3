
<html>
	<div>
		<center>
		<strong>Inserer un employer : </strong></center>
		<br/>
		<br/>

		<center>
		<table style="border-style: dotted;">

			<form action="FormNewEmploye.php" method="POST">
			<tr>
				<td><label for="nom">Nom de l'employe :</label></td>
				<td> <input type="text" name="nom" /></td>
			</tr>
			<tr>
				<td><label for="prenom">Prenom de l'employe :</label></td>
				<td> <input type="text" name="prenom" /></td>
			</tr>
			<tr>
				<td><label for="sexe">Sexe :</label></td>
				<td> <select name=sexe>
					<option value="F">Female</option>
					<option value="M">Male</option>
					</select> </td>
			</tr>
			<tr>
				<td><label for="address">Address :</label></td>
				<td> <input type="textarea" name="address" /></td>
			</tr>
			<tr>
				<td><label for="date_naissace">Date de naissace :</label></td>
				<td> <input type="date" name="date_naissace" /></td>
			</tr>
			<tr>
				<td><label for="service">Numero de service affecté :</label></td>
				<td> <input type="number" name="service" /></td>
			</tr>
			
	</table>
	<br/>
	<input type="submit" value="submit" name="new"/>
	<input type="reset" value="cancel" />
			</form>

	</center>

	</div>

	<?php if(isset($_POST["new"])){
		require 'ctrl.php';
		$ctrl=new ctrl;
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$sexe = $_POST["sexe"];
		$address = $_POST["address"];
		$date_naissace = $_POST["date_naissace"];
		$service = $_POST["service"];
		$ctrl->addNewEmployeAction($nom,$prenom,$sexe,$address,$date_naissace,$service);

		 }?>
</html>