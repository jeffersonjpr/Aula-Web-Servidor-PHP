<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cv.css">
    <title>Academic hours</title>
</head>

<body>
    <div id="header"></div>
    <div class="left"></div>
    <div class="stuff">
        <br><br>
        <h1>Academic Hours</h1>
        <h2>
            <?php
      include "variables.php";
      echo $name;
    ?>
        </h2>
        <hr />
        <br>
        <p><a href="index.php">
                Home
            </a></p>
        <br>
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

        .tg .tg-baqh {
            text-align: center;
            vertical-align: top
        }

        .tg .tg-ihln {
            font-style: italic;
            font-weight: bold;
            text-align: center;
            vertical-align: top
        }

        .tg .tg-amwm {
            font-weight: bold;
            text-align: center;
            vertical-align: top
        }
        </style>
        <table class="tg">
            <thead>
                <tr>
                    <th class="tg-ihln">Inicio</th>
                    <th class="tg-amwm">Segunda</th>
                    <th class="tg-amwm">Terça</th>
                    <th class="tg-amwm">Quarta</th>
                    <th class="tg-amwm">Quinta</th>
                    <th class="tg-amwm">Sexta</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-amwm">08:20</td>
                    <td class="tg-baqh"></td>
                    <td class="tg-baqh">CC39J</td>
                    <td class="tg-baqh"></td>
                    <td class="tg-baqh"></td>
                    <td class="tg-baqh"></td>
                </tr>
                <tr>
                    <td class="tg-amwm">09:10</td>
                    <td class="tg-baqh"></td>
                    <td class="tg-baqh">CC39J</td>
                    <td class="tg-baqh"></td>
                    <td class="tg-baqh"></td>
                    <td class="tg-baqh"></td>
                </tr>
                <tr>
                    <td class="tg-amwm">10:00</td>
                    <td class="tg-baqh">CC39B</td>
                    <td class="tg-baqh">CC39B</td>
                    <td class="tg-baqh"></td>
                    <td class="tg-baqh">CC39J</td>
                    <td class="tg-baqh"></td>
                </tr>
                <tr>
                    <td class="tg-amwm">11:10</td>
                    <td class="tg-baqh">CC39B</td>
                    <td class="tg-baqh">CC39B</td>
                    <td class="tg-baqh"></td>
                    <td class="tg-baqh">CC39J</td>
                    <td class="tg-baqh"></td>
                </tr>
                <tr>
                    <td class="tg-amwm">13:50</td>
                    <td class="tg-baqh">CC37W</td>
                    <td class="tg-baqh"></td>
                    <td class="tg-baqh">CC02E</td>
                    <td class="tg-baqh">CC02E</td>
                    <td class="tg-baqh">CC37W</td>
                </tr>
                <tr>
                    <td class="tg-amwm">14:40</td>
                    <td class="tg-baqh">CC37W</td>
                    <td class="tg-baqh"></td>
                    <td class="tg-baqh">CC02E</td>
                    <td class="tg-baqh">CC02E</td>
                    <td class="tg-baqh">CC37W</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="right"></div>
    <div id="footer">
        <h2 id="name"><?php
      include "variables.php";
      echo $name;
    ?></h2>
    </div>
</body>

</html>