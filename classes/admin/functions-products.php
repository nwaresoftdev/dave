<?php include_once('classes/generic.class.php'); ?>

<?php
function displaymanageproducts($row) {

	if(empty($row)) return false;
	?>
	<tr>
        <?php echo "<td><a href='javascript:Loadproductshome(" . $row['id'] . ");'>" . $row['name'] ."</td>"; ?>
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
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Home' ORDER BY label ASC";
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
			echo displaymanageproducts($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductsregister() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Register' ORDER BY label ASC";
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
			echo displaymanageproducts($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductslogin() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Login' ORDER BY label ASC";
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
			echo displaymanageproducts($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductcontact() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'contactus' ORDER BY label ASC";
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
			echo displaymanageproducts($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductsabout() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'About' ORDER BY label ASC";
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
			echo displaymanageproducts($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductswelcome() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'Welcome' ORDER BY label ASC";
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
			echo displaymanageproducts($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductsaccountsponser() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'accountsponser' ORDER BY label ASC";
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
			echo displaymanageproducts($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
function list_manageproductscandidateinfo() {

	global $generic;
    $sql = "SELECT * FROM advertisement_products WHERE flag = 0 AND `label` = 'candidateinfo' ORDER BY label ASC";
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
			echo displaymanageproducts($row);
		?>
		</tbody>
        <tfoot>
        </tfoot>
	</table>
	<?php
}
?>
