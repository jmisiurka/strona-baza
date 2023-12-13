<?php include 'header.php'; ?>

<?php
$sql = "SELECT DISTINCT tool_type 
        FROM tool
        ORDER BY tool_type";
$tool_types = $conn->query($sql);
?>


<div align="center" class="container">
<br>
<h2><b>Wybierz narzędzie</b><br><br></h2>
  <form name="form" action="wybor_zestawu.php" method="post">
    <select name="tool">
      <?php
      while ($tool_type = $tool_types->fetch_assoc()) { ?>
        <option value="<?php echo $tool_type["tool_type"]  ?>"align="center" >
          <?php echo $tool_type["tool_type"] ?>
        </option>
      <?php } ?>

    </select>
    <input type="submit" value="Wybierz" class="center-button" />
  </form>

  <?php
  $sql = "SELECT DISTINCT materiał
        FROM tool
        ORDER BY materiał";
  $materials = $conn->query($sql);
  ?>
<br>

<h2><b>Wybierz materiał</b><br><br></h2>
  <form name="form" action="wybor_mat.php" method="post">
    <select name="materiał">
      <?php
      while ($material = $materials->fetch_assoc()) { ?>
        <option value="<?php echo $material["materiał"] ?>"align="center">
          <?php echo $material["materiał"] ?>
        </option>
      <?php } ?>

    </select>
    <input type="submit" value="Wybierz" class="center-button" />
  </form>
</div>

<div align="right">
  <a href="nowe_narzedzie.php" class="button">Nowe narzędzie</a>
  <a href="nowe_set_id.php" class="button">Nowy zestaw</a>
  <a href="nowe_cladding_param.php" class="button">Nowe parametry pokrycia</a>
</div>


<?php
$sql = "SELECT foto, id, tool_type, materiał,qr FROM tool";
$result = $conn->query($sql);
?>
<br><br>
  <?php
  if ($result->num_rows > 0) {
    // output data of each row
    
    while ($row = $result->fetch_assoc()) { ?>
      <table class="tablica" align="center" width="75%" cellspacing="0" cellpadding="10" border="5" method="post">
        <tr>
          <td width="100" align="center"><img src="foto/<?php echo $row["foto"] ?>" height="70" width="70" border="0"
              alt="[Rozmiar: 4189 bajtów]"></td>
          <td  width="100" align="center"><a href='narzedzie_par.php?id=<?php echo $row["id"]; ?>'class="button" class="link_do_narz">
              <?php echo $row["id"];?>
            </a></td>
          <td width="100" align="center">
            <?php echo $row["tool_type"]; ?>
          </td>
          <td width="100" align="center">
            <?php echo $row["materiał"]; ?>
          </td>
          <td width="100" align="center"> <img src="foto/<?php echo $row["qr"] ?>" height="75" width="75" border="0"
              alt="[Rozmiar: 4189 bajtów]"> </td>
        </tr>
      </table>

    <?PHP
    }
  } else {
    echo "0 results";
  }
  $conn->close();

  ?>

</body>

</html>