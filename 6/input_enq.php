<html>
<head>
    <meta charset="utf-8">
    <title>アンケート入力ページ</title>
</head>
<body>
    <header>アンケート入力ページ</header>
    <form action="comfirm_enq.php" method="post">
        名前: <input type="text" name="name" /><br>
        年齢: <input type="text" name="age" /><br>
        E-mail: <input type="text" name="email" /><br>
        性別: <input type="radio" name="gender" value="男" />男 <input type="radio" name="gender" value="女" />女<br>
        趣味: <input type="checkbox" name="hobby[]" value="野球" />野球 
        <input type="checkbox" name="hobby[]" value="サッカー" />サッカー 
        <input type="checkbox" name="hobby[]" value="テニス" />テニス<br>
        <input type="submit" value="内容を確認" />
    </form>
    <p><a href="index.php">TOPに戻る！</a></p>
</body>
</html>