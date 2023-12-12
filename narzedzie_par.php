<?php
$id= $_GET["id"];

include 'header.php';
	

$sql  = "SELECT * FROM tool JOIN set_id ON tool.id_set = set_id.id JOIN cladding_param ON tool.id_cladd_prog = cladding_param.id where tool.id = '$id'";



$result = $conn->query($sql);echo "Connected successfully";
$row = mysqli_fetch_assoc($result);
?>


<h1><?php echo $row["tool_type"]; ?><h1><br>

<table>
<tr><td width = "180"> <img src="foto/<?php echo $row["foto"] ?>" height="70" width="70" border="0" alt="[Rozmiar: 4189 bajtów]"></td>
<td width="80"><img src="foto/<?php echo $row["qr"] ?>" height="75" width="75" border="0" alt="[Rozmiar: 4189 bajtów]"></td></tr>
</table>
<br>

<table cellspacing="0" cellpadding="1" border="1">
<tr><td width = "180"><b>Id</b></td><td width="80"><?php  echo $row["id"];?></td></tr>
<tr><td><b>Ile regeneracji</b></td><td><?php  echo $row["reg_cycles"]?></td></tr>
<tr><td><b>Drut</b></td><td><?php  echo $row["wire"]?></td></tr>
<tr><td><b>Gaz osłonowy:</b></td><td><?php  echo $row["gas"]?></td></tr>
<tr><td><b>Przepływ gazu:</b></td><td><?php  echo $row["gas_flow"]?></td></tr>
<tr><td><b>Prąd Spawania</b></td><td><?php  echo $row["current"]?></td></tr>
<tr><td><b>Korekta napięcia łuku</b></td><td><?php  echo $row["voltage_correct"]?></td></tr>
<tr><td><b>Nazwa programu - robot:</b></td><td><?php  echo $row["Prog_Name_Robot"]?></td></tr>
<tr><td><b>Nazwa Programu - źródło:</b></td><td><?php  echo $row["Prog_Name_Source"]?></td></tr> 	


</table>
<br>

<?php
$sql  = "SELECT * FROM tool JOIN set_id ON tool.id_set = set_id.id JOIN cladding_param ON tool.id_cladd_prog = cladding_param.id where tool.id = '$id'";
?>

<table cellspacing="0" cellpadding="1" border="1">

<tr><td width = "180"><b>Numer Kompletu</b></td><td width="80"><?php  echo $row["id_number"]?></td></tr>
<tr><td><b>Nazwa Kompletu</b></td><td><?php  echo $row["nazwa_kompletu"]?></td></tr>
</table>