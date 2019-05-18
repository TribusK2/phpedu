<?php 
    $name = 'Andrzej';
    $vorName = 'Konarski';
    define('SECNAME', 'Tomasz');
    $pi = 3.14;
    $radius = 25;
    $arrayOne = ['aaa','bbb','ccc'];
    $arrayTwo = array('ddd','eee','fff');
    $arBelt = ['Tomek'=>'żółty','Marcin'=>'czerwony','Ala'=>"biały"];
    $multi = [
        [10, 20, 30],
        ['aaa','bbb','ccc']
    ]
?>



<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Edu</title>
</head>
<body>
    <h1><?php echo "My name is $name" ?></h1>
    <h1><?php echo $name.' '.$vorName ?></h1>
    <h1><?php echo "I am $name $vorName "?></h1>
    <h1><?php echo "My second name is ".SECNAME ?></h1>
    <h2><?php echo $name[2]; ?></h2>
    <p>
        <?php 
            $x = strlen($name);
            echo $x;
            ?><hr><?php
            echo strtoupper($name);
            ?><br><?php
            echo str_replace('i','a',$vorName);
            ?><br><?php
            echo $pi*$radius**2;
            ?>
            <hr>
            <?php
            echo $radius++;
            ?><br><?php
            echo $radius;
            ?>
            <hr>
            <?php
            echo $arrayOne[2];
            ?><br><?php
            print_r($arrayTwo);
            ?><br><?php
            $arrayTwo[] = 'zzz';
            print_r($arrayTwo);
            ?><br><?php
            array_push($arrayTwo,'xxx');
            print_r($arrayTwo);
            ?><br><?php
            $arrayThree = array_merge($arrayOne, $arrayTwo);
            print_r($arrayThree);
            ?>
            <hr>
            <?php
            echo $arBelt['Ala'];
            ?>
            <hr>
            <?php
            print_r($multi);
            ?><br><?php
            print_r($multi[1][1]);
            ?><br><?php
            $poped = array_pop($multi);
            print_r($poped);
            ?><br><?php
            print_r($multi);
            ?>
            <hr>Loops<br>
            <?php
            for ($i=0;$i<count($arrayOne);$i++){
                echo $arrayOne[$i];
                echo '<br>';
            };
            echo '<br>';
            echo '<br>';
            foreach($arrayOne as $i){
                echo $i.' trala';
                echo '<br>';
            };
        ?>
    </p>
<hr>
    <?php
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
    echo $x;
}

        myTest(); ?><br>
<?php   myTest(); ?><br>
<?php   myTest(); ?><br>
<hr>

</body>
</html>