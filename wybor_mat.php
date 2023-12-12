<?php
if(isset($_POST['materiał'])){
    //echo "Wybrane narzędzie: " . $_POST['materiał'];
	$narzedzie = $_POST['materiał'];
}
?>



<?PHP  include 'header.php'; ?>

<?php

$sql = "SELECT foto, qr, id, tool_type, materiał FROM tool where materiał = '$narzedzie'";
$result = $conn->query($sql);

?>

<br>
<b>Wybierz narzędzie</b><br><br>
<form name="form" action="wybor_zestawu.php" method="post">
<select name="tool">
    <option value="widłak">Widłak</option>
    <option value="dżwignia 1">Matryca na młot</option>
    <option value="piasta">Piasta</option>
    <option value="dźwignia 2">Okrojnica</option>

</select>
<input type="submit" value="Wybierz" />
</form>

<br>

<b>Wybierz materiał</b><br><br>
<form name="form" action="wybor_mat.php" method="post">
<select name="materiał">
    <option value="WCL">WCL</option>
    <option value="WNL">WNL</option>
    <option value="Unimax">UNIMAX</option>

</select>
<input type="submit" value="Wybierz" />
</form>

<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>
	 <table width="30%" cellspacing="0" cellpadding="0" border="1">
	 <tr>
		<td width="70" align="center">
		<img src="foto/<?php echo $row["foto"] ?>" height="70" width="70" border="0" alt="[Rozmiar: 4189 bajtów]">
		</td>
		
		<td width = "30 " align="center">
		<a href='narzedzie_par.php?id=<?php echo $row["id"];?>' class="link_do_narz">

		<?php echo $row["id"];?>
		</a>
		</td>
		<td width = "90 "align="left"> <?php echo $row["tool_type"]; ?></td>
		<td width = "80 " align="center"> <?php echo $row["materiał"]; ?></td>
		<td width = "80 " align ="center"><img src="foto/<?php echo $row["qr"] ?>" height="75" width="75" border="0" alt="[Rozmiar: 4189 bajtów]"></td>
	</tr>
	</table>
	

<?PHP
  }
} else {
  echo "0 results";
}
$conn->close();

?>
