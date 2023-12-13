<?php include 'header.php'; ?>

<div align="right">
  <a href="index.php" class="button">Powrót</a>
</div>

<div align="center">
    <form width=75% action="dodaj_cladding_param.php" method="post">
        <table>
            <tr>
                <td>
                    <p class="label">Drut</p>
                </td>
                <td>
                    <input type="text" name="wire" /><br />
                </td>
            </tr>
            <tr>
                <td>
                    <p class="label">Gaz</p>
                </td>
                <td>
                    <input type="text" name="gas" /><br />
                </td>
            </tr>
            <tr>
                <td>
                    <p class="label">Natężenie [A]</p>
                </td>
                <td>
                    <input type="number" name="current" value=230 />
                </td>
            </tr>
            <tr>
                <td>
                    <p class="label">Korekta napięcia [V]</p>
                </td>
                <td>
                    <input type="number" name="voltage_correct" value=1/>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="label">Przepływ gazu [l/min]</p>
                </td>
                <td>
                    <input type="number" name="gas_flow" value=10/>
                </td>
            <tr>
                <td>
                    <p class="label">Nazwa programu robota</p>
                </td>
                <td>
                    <input type="text" name="prog_name_robot"/>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="label">Nazwa programu źródłowego</p>
                </td>
                <td>
                    <input type="text" name="prog_name_source"/>
                </td>
            </tr>
        </table>
        <input type="submit" value="Dodaj" class="center-button" />
    </form>
</div>