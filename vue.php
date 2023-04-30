    <h1 class="text-primary text-center">bienvenue</h1>
	<table class="table table-striped table-sm container">
		<thead>
			<tr>
				<th>Designation produits</th>

		        <th>Image Produit</th>
				<th>Date_Expiration</th>

	            <th>Categorie Produit</th>

	            
		    </tr>
		 </thead>
		 <tbody>
		 

    <?php 
	include_once('connexion_bd_mysql.php');

	if(isset($_POST['research'])){
		$datas = $_POST['search'];
		$result = $bdd->query("SELECT P.designation, P.image, P.date_expiration, C.libelle FROM produits  AS P INNER JOIN categories AS C ON P.id_categories = C.id_categories WHERE P.designation LIKE '%$datas%' ");
		
		 	// if ($result->num_rows > 0) {
			// 	while($row = $result->fetch_assoc()) {
			// 		echo "Designation: " . $row["designation"]. "<br>";
			// 	}
			// } else {
			// 	echo "Aucun résultat trouvé.";
			// }
		
			while ($reponse = $result->fetch()){
		 		?>
		 		<tr>
		 			<td><?php echo $reponse['designation']?> </td>
		 			<td> <img src="<?php echo $reponse['image']?>" alt="image tomate" class="im" style="width:100px; height:100px"> </td>
		 			<td><?php echo $reponse['date_expiration']?> </td>
		 			<td><?php echo $reponse['libelle']?> </td>
		 		
		 	</tr>
		 	<?php
		 	}
			// if()
		 	$result->closeCursor();
		}
            ?>
			 </tbody>
		
	    
		
		</table>
    