<!DOCTYPE>
<html>
<head>
    <meta http-equiv="content-type" content ="text/html" charset="utf-8"/>
    <title>ディズニーアンケート</title>
</head>

<body>
    <h2></h2>
    <form action ="input.php" method="post">

    ハンドルネーム:<br />
    <input type ="text" name ="name" size ="30" value=""/><br />

    メールアドレス:<br />
    <input type ="text" name ="mail" size ="40" value=""/><br />

    性別:<br />
    <input type ="radio" name ="sex" size ="20" value="男性"/>男性<br />
    <input type ="radio" name ="sex" size ="20" value="女性"/>女性<br />

    制作<br />

    <select name ="checkbox" row ="40">
    <option value ="ピクサー">ピクサー</option>
    <option value ="マーベル">マーベル</option>
    <option value ="ウォルトディズニー">ウォルトディズニー</option>
    </select><br />

    作品名:<br />
    <input type ="text" name ="title" value=""><br />

    作品の感想:<br />
    <textarea type ="text" name ="review" value=""></textarea><br />

    <input type ="submit" value="送信"/>




    
    </form>
</body>
</html>