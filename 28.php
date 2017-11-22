<h2 style="text-align:center">28 задача </h2>

<table >
    <tr>
        <td  >X</td>
        <td style="color:red;">2</td>
        <td style="color:red;">3</td>
        <td style="color:red;">4</td>
        <td style="color:red;">5</td>
        <td style="color:red;">6</td>
        <td style="color:red;">7</td>
        <td style="color:red;">8</td>
        <td style="color:red;">9</td>
    </tr>
    <?php for($i=2;$i<=9;$i++) : ?>
        <tr>
            <?= "<td style=\"color:red;\">$i</td>" ?>
            <?php for($j=2;$j<=9;$j++) : ?>

                <?= '<td >' . $i * $j . '</td>' ?>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
