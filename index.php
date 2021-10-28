<?php
$program = [
    'Politeknik Ungku Omar' => [
        'Sarjana Muda Teknologi Kejuruteraan Awam Dengan Kepujian' => [
            'STPM',
            'Matrikkulasi',
            'Diploma'
        ],
        'Sarjana Muda Teknologi Kejuruteraan Pembuatan (Pengurusan Rangkaian Bekalan ) Dengan Kepujian' => [
            'STPM',
            'Matrikkulasi',
            'Diploma'
        ],
        'Diploma Kejuruteraan Awam' => [
            'STPM',
            'Sijil Kolej Komuniti',
        ],
        'Diploma Seni Bina' => [
            'STPM',
            'Sijil Kolej Komuniti',
        ],
    ],
    'Politeknik Sultan Haji Ahmad Shah' => [
        'Diploma Kejuruteraan Awam' => [
            'STPM',
            'Sijil Kolej Komuniti',
        ],
        'Diploma Seni Bina' => [
            'STPM',
            'Sijil Kolej Komuniti',
        ],
        'Diploma Geomatik' => [
            'STPM',
            'Sijil Kolej Komuniti'
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulangkaji Array</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        li {
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <h1> Senarai Program Di Politeknik</h1>

    <!-- <pre><?php
                print_r($program); ?></pre> -->

    <ul>
        <?php
        foreach ($program as $poli => $value) {
            echo "<li>$poli";
            echo '<ul>';
            foreach ($value as $course => $test) {
                echo "<li>$course";
                echo "<ul>";
                foreach ($test as $kelayakan) {
                    echo "<li>$kelayakan</li>";
                }
                echo '</ul>';
                echo "<li>";
            }
            echo '</ul>';
            echo "</li>";
        }
        ?>
    </ul>
</body>

</html>
<?php
$program = [
    'Politeknik Ungku Omar'=> [
        'Sarjana Muda Teknologi Kejuruteraan Awam Dengan Kepujian'=> [
            'STPM',
            'Matrikkulasi',
            'Diploma'
        ],
        'Sarjana Muda Teknologi Kejuruteraan Pembuatan (Pengurusan Rangkaian Bekalan ) Dengan Kepujian'=> [
            'STPM',
            'Matrikkulasi',
            'Diploma'
        ],
        'Diploma Kejuruteraan Awam'=>[
            'STPM',
            'Sijil Kolej Komuniti',
        ],
        'Diploma Seni Bina' => [
            'STPM',
            'Sijil Kolej Komuniti',
        ],
    ],//end array poli PUO
    $example = [
        'Politeknik Ungku Omar' => [
            'Sarjana Muda Teknologi Kejuteraan Awam Dengan Kepujian'=>[
                'SPM',
                'STPM'
            ],
            
        ],
        'Politeknik Sultan Haji Ahmad Shah' => [
            'Diploma Kejuruteraan Awam'=>[
                'SPM',
                'Sijil Kolej Komuniti'
            ],
            'Diploma Seni Bina'=>[
                'SPM',
                'Sijil Kolej Komuniti'
            ],
            'Diploma Geomatik'=>[
                'SPM',
                'Sijil Kolej Komuniti'
            ]
        ]
    ]
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        table,
        {
            border: 3px solid black;
        }
    </style>
</head>

<body>

<table>
        <tr style="background: pink; color: white">
            <td><b>PROGRAM</b></td>
            <td><b>KELAYAKAN</b></td>
        </tr>
    <?php
    foreach ($example as $poli => $value){
        echo "<th colspan=2>$poli</th>";
        echo "<tr>";
        foreach ($value as $course =>$test){
            echo "<td rowspan=2>$course</td>";
            
            foreach($test as $kelayakan){
                echo "<td>$kelayakan</td>";
                echo "<tr>";
                
            }
            echo '</td>';
            echo "</tr>";
        }
        echo '</tr>';
        
    }
    ?>
    </table>
</body>

</html>