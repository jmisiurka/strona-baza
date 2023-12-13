<?php
if(isset($_POST['tool'])){
    //echo "Wybrane narzędzie: " . $_POST['tool'];
	$narzedzie = $_POST['tool'];
}
?>



<?PHP include 'header.php'; ?>

<?php

$sql = "SELECT foto, id, tool_type, materiał,qr FROM tool where tool_type = '$narzedzie'";
$result = $conn->query($sql);


?>
<div align="center" class="container">
<br>
<h2><b>Wybierz narzędzie</b><br><br></h2>
<form align="center" name="form" action="wybor_zestawu.php" method="post">
<select align="center" name="tool">
  
    <option align="center" value="widłak">Widłak </option>
    <option align="center"value="dżwignia 1">Matryca na młot</option>
    <option align="center"value="piasta">Piasta</option>
    <option align="center"value="dźwignia 2">Okrojnica</option>
 
</select>
<input type="submit" value="Wybierz" class="center-button" />
</form>

<br>

<h2><b>Wybierz materiał</b><br><br></h2>
<form align="center" name="form" action="wybor_mat.php" method="post">
<select align="center" name="materiał">
    <option align="center"value="WCL">WCL</option>
    <option align="center"value="WNL">WNL</option>
    <option align="center"value="Unimax">UNIMAX</option>

</select>
<input type="submit" value="Wybierz" class="center-button" />
</form>
</div>

<div align="right">
  <a href="index.php" class="button">Powrót</a>
</div>
<br><br>
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>
	 <table align="center" class="tablica" width="60%" cellspacing="0" cellpadding="0" border="1">
	 <tr>
		<td width="100" align="center"><img src="foto/<?php echo $row["foto"] ?>" height="70" width="70" border="0" alt="[Rozmiar: 4189 bajtów]"></td>
		<td width = "30 " align="center"><a href='narzedzie_par.php?id=<?php echo $row["id"];?>' class="link_do_narz"><?php echo $row["id"];?></a></td>
		<td width = "90 "align="center"> <?php echo $row["tool_type"]; ?></td>
		<td width = "80 "align="center"> <?php echo $row["materiał"]; ?></td>
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
