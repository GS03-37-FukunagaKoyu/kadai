<html>
<head>
    <meta charset="utf-8">
    <title>アンケート表示</title>
</head>
<body>
    <P>アンケート表示</P>
    
    <?php
    
    $fp = fopen("data/data.txt", "r");
    flock($fp, LOCK_SH);
    while ($array = fgetcsv( $fp )) {
    $num = count($array); 
    for($i=0;$i<$num;$i++){
    echo $array[$i];
    }
    }
    flock($fp, LOCK_UN);
    fclose($fp);
    
    ?>
</body>
</html>