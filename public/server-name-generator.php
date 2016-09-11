<?php
    function pageController();
    {
$adjectives = ['Nice', '', 'diligent', 'spicey', 'mild', 'zonked', 'filthy', 'loopy', 'cranky', 'moast', 'wet', 'crazy', 'mad', 'sad', 'sleepy'];
$nouns = ['Poop', 'Door', 'Drum', 'Wall', 'Bug', 'Bar', 'ice', 'phone', 'cat', 'Window', 'Bush', 'Floor', 'street', 'liggt', 'sign'];
    }       
function randomServer($array, $array2) {
    $randomAdj = array_rand($array);
    $randomNoun = array_rand($array2);
    $msg = '';
    $msg .= $array[$randomAdj];
    $msg .= " ";
    $msg .= $array2[$randomNoun];
    return $msg;
}
extract(pageController());


?>

<!DOCTYPE html>
<html>
<head>
    <title>server-name</title>
    
    <style type="text/css">
        h1{
            text-align: center;
            
        }
        
    </style>
</head>
<body>
    <div class='container'>
        <h1>server name <br> <?= $serverName ?></h1>
    </div>
    
</body>
</html>