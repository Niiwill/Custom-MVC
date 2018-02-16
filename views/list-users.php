<a href="/">Back</a>
<br>
<?php
foreach ($users as $user) {
	?>

	<li><?= $user->email ?></li>

	<?php
}
?>