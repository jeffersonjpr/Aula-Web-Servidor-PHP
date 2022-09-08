<?php
echo "<pre>";
$file_path = $_FILES['utfpr']['tmp_name'];
$file_name = $_FILES['utfpr']['name'];

move_uploaded_file($file_path, "tmp/$file_name");

$file = file_get_contents("tmp/$file_name");
print_r($file);

echo "<br><hr>";

$names = explode("\n", $file);
print_r($names);

#print contents of csv into a html table
?>
<style type="text/css">
    .tg {
        border-collapse: collapse;
        border-spacing: 0;
    }

    .tg td {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg th {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg .tg-wp8o {
        border-color: #000000;
        text-align: center;
        vertical-align: top
    }

    .tg .tg-mqa1 {
        border-color: #000000;
        font-weight: bold;
        text-align: center;
        vertical-align: top
    }
</style>
<table class="tg">
    <?php foreach ($names as $name) : ?>
        <tr>
            <?php foreach (explode(";", $name) as $value) : ?>
                <td class="tg-wp8o"><?php echo $value; ?></td>
                <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>