<html>
<head>
    <meta charset="utf-8">
    <title>アンケート確認ページ</title>
</head>
<body>
    <header>アンケート確認ページ</header>
    名前:<?php echo $_POST['name']; ?><br>
    年齢:<?php echo $_POST['age']; ?><br>
    E-mail:<?php echo $_POST['email']; ?><br>
    性別:<?php echo $_POST['gender']; ?><br>
    趣味:<?php
        if(isset($_POST['hobby'])) {
            foreach($_POST['hobby'] as $value) {
                print($value)."　";
                }
                }
        ?>
    <p>この内容で送信してよろしいでしょか？</p>
    <form><input type="submit"></form>
    
    <?php
    session_start();
    if(isset($_POST{'name'})){
        $_SESSION['name'] = $_POST['name']
    }
    if(isset($_POST{'age'})){
        $_SESSION['age'] = $_POST['age']
    }
    if(isset($_POST{'email'})){
        $_SESSION['email'] = $_POST['email']
    }
    if(isset($_POST{'gender'})){
        $_SESSION['gender'] = $_POST['gender']
    }
    if(isset($_POST{'hobby'})){
        $_SESSION['hobby'] = $_POST['hobby']
    }
    
    //SESSIONの情報を取得
    $name = $_SESSION['name'];
    $age = $_SESSION['age'];
    $email = $_SESSION['email'];
    $gender = $_SESSION['gender'];
    if(empty($_SESSION['hobby'])){ 
        $csvhobby = 'なし'; 
    }else{ 
        $csvhobby = implode(',', $_SESSION['hobby']); 
    }
    
    $vararray = [$name,$age,$email,$gender,$hobby]
    $file = fopen("data/data.txt","a");
    flock($file,LOCK_EX);
    fputs($file,$vararray.PHP_EOL);
    flock($file,LOCK_UN);
    fclose($file);
    ?>
</body>
</html>