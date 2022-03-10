<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content ="text/html" charset="utf-8"/>
<title>作品感想フォーム</title>
</head>

<body>
    <h2>ディズニー作品感想登校サイト</h2>
    <form action="input.php" method="post">

    <table border ='1'>
        <tr>
            <td>名前</td>
            <td><?php echo $_POST['name'] ?></td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td><?php echo $_POST['mail'] ?></td>
        </tr>
        <tr>
            <td>性別</td>
            <td><?php echo $_POST['sex'] ?></td>
        </tr>
        <tr>
            <td>制作</td>
            <td><?php echo $_POST['checkbox'] ?></td>
        </tr>
        <tr>
            <td>作品名</td>
            <td><?php echo $_POST['title'] ?></td>
        </tr>
        <tr>
            <td>作品の感想</td>
            <td><?php echo $_POST['review'] ?></td>
        </tr>
    </table>

    <input type -"submit" value ="送信">



    </form>
</body>





</html>