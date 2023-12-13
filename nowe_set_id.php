<?php include 'header.php'; ?>

<div align="right">
  <a href="index.php" class="button">Powrót</a>
</div>

<div align="center">
    <form width=75% action="dodaj_set_id.php" method="post">
        <table>
            <tr>
                <td>
                    <p class="label">Numer zestawu</p>
                </td>
                <td>
                    <input type="text" name="id_number" /><br />
                </td>
            </tr>
            <tr>
                <td>
                    <p class="label">Nazwa zestawu</p>
                </td>
                <td>
                    <input type="text" name="set_name" /><br />
                </td>
            </tr>
        </table>
        <input type="submit" value="Dodaj" class="center-button" />
    </form>
</div>

