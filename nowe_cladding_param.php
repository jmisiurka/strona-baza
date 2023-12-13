<?php include 'header.php'; ?>

<div align="center">
    <form width=75% action="dodaj_do_bazy_cp.php" method="post">
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
                    <p class=" label">Gaz</p>
                </td>
                <td>
                    <input type="text" name="gas" /><br />
                </td>
            </tr>
            <tr>
                <td>
                    <p class="label">Liczba cykli regeneracji</p>
                </td>
                <td>
                    <input type="number" name="reg_cycles" value=0 /><br />
                </td>
            </tr>
            <tr>
                <td>
                    <p class="label">Ścieżka zdjęcia</p>
                </td>
                <td>
                    <input type="text" name="foto"/>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="label">Ścieżka kodu QR</p>
                </td>
                <td>
                    <input type="text" name="qr" />
                </td>
            <tr>
                <td>
                    <p class="label">Parametry pokrycia</p>
                </td>
                <td>
                    <select type="number" name="cladding_id">
                        <?php
                        $sql = "SELECT DISTINCT id FROM cladding_param";
                        $claddings = $conn->query($sql);
                        while ($cladding = $claddings->fetch_assoc()) { ?>
                            <option value="<?php echo $cladding["id"] ?>">
                                <?php echo $cladding["id"] ?>
                            </option>
                            <?php
                        }
                        ?>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="label">Komplet</p>
                </td>
                <td>
                    <select type="number" id="set_id" name="set_id">
                        <?php
                        $sql = "SELECT DISTINCT id, nazwa_kompletu FROM set_id";
                        $sets = $conn->query($sql);
                        while ($set = $sets->fetch_assoc()) { ?>
                            <option value="<?php echo $set["id"] ?>">
                                <?php echo $set["nazwa_kompletu"] ?>
                            </option>
                            <?php
                        }
                        ?>
                </td>
            </tr>
        </table>
        <input type="submit" value="Dodaj" class="center-button" />
    </form>
</div>