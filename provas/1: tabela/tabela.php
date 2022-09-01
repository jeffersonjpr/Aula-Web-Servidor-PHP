<?php
$titulos = array('Nome', 'Email', 'Idade', 'Usuário ativo');
$nomes = array("A", "B", "C", "D", "E", "F");
$idades = array(28, 29, 31, 38, 40, 33);
$active_array = array(true, false, true, false, true, true);
?>

<table class="tg">
    <thead>
        <tr>
            <?php foreach ($titulos as $titulo) : ?>
                <th class="tg-mqa1"><?= $titulo ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($nomes); $i++) : ?>
            <tr>
                <td class="tg-wp8o"><?= $nomes[$i] ?></td>
                <td class="tg-wp8o"><?= $nomes[$i] . "@" . $nomes[$i] . ".com" ?></td>
                <td class="tg-wp8o"><?= $idades[$i] ?></td>
                <td class="tg-wp8o"><?= $active_array[$i] ? "Sim" : "Não"; ?></td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>