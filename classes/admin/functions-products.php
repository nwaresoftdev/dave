<?php include_once('classes/generic.class.php'); ?>

<?php
function displaymanageproductshome($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproducts(" . $row['id'] . ");' class='home' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>
<?php
function displaymanageproductsregister($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproducts(" . $row['id'] . ");' class='register' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>
<?php
function displaymanageproductslogin($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproducts(" . $row['id'] . ");' class='login' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>
<?php
function displaymanageproductscontact($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproducts(" . $row['id'] . ");' class='contact' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>
<?php
function displaymanageproductsabout($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproducts(" . $row['id'] . ");' class='about' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>
<?php
function displaymanageproductswelcome($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproducts(" . $row['id'] . ");' class='welcome' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>
<?php
function displaymanageproductsaccountsponser($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproducts(" . $row['id'] . ");' class='accountsponser' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>
<?php
function displaymanageproductscandidateinfo($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproducts(" . $row['id'] . ");' class='candidateinfo' >" . $row['name'] ."</td>"; ?>
        <td><?php echo $row['label']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['sell']; ?></td>
	</tr>
	<?php

}
?>

<?php
function list_manageproductshome() {

	global $generic;
	$user_profile_id = $_SESSION['jigowatt']['user_profile_id'];
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Home' AND `user_profile_id` = '$user_profile_id' AND `sell` = 1 ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductshome($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductsregister() {

	global $generic;
	$user_profile_id = $_SESSION['jigowatt']['user_profile_id'];
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Register' AND `user_profile_id` = '$user_profile_id' AND `sell` = 1 ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductsregister($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductslogin() {

	global $generic;
    $user_profile_id = $_SESSION['jigowatt']['user_profile_id'];

    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Login' AND `user_profile_id` = '$user_profile_id' AND `sell` = 1 ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductslogin($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductcontact() {

	global $generic;
	$user_profile_id = $_SESSION['jigowatt']['user_profile_id'];
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Contact Us' AND `user_profile_id` = '$user_profile_id' AND `sell` = 1 ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductscontact($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductsabout() {

	global $generic;
	$user_profile_id = $_SESSION['jigowatt']['user_profile_id'];
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'About' AND `user_profile_id` = '$user_profile_id' AND `sell` = 1 ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductsabout($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductswelcome() {

	global $generic;
	$user_profile_id = $_SESSION['jigowatt']['user_profile_id'];
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Welcome' AND `user_profile_id` = '$user_profile_id' AND `sell` = 1 ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductswelcome($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductsaccountsponser() {

	global $generic;
	$user_profile_id = $_SESSION['jigowatt']['user_profile_id'];
	
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Account Sponser' AND `user_profile_id` = '$user_profile_id' AND `sell` = 1 ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductsaccountsponser($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductscandidateinfo() {

	global $generic;
	$user_profile_id = $_SESSION['jigowatt']['user_profile_id'];
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Candidate Info' AND `user_profile_id` = '$user_profile_id' AND `sell` = 1 ORDER BY label ASC";
	$query = $generic->query($sql);
	//print_r($query);

	?>
	<table class="table table-hover table-nomargin dataTable table-bordered">
		<thead>
			<tr>
                <th>Name</th>
                <th>Lable</th>
                <th>Price</th>
                <th>Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($row = $query->fetch(PDO::FETCH_ASSOC))
			echo displaymanageproductscandidateinfo($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
?>
