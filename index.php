<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/reset.css" rel="stylesheet">
 
</head>
<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <form action="insert.php" method="POST">
        <div class="jumbotron">
            <div class="form-inner">
                <legend class="title">ブック登録</legend>
                <div class="form-title">タイトル</div>
                    <div class="form-item"><input type="text" name="bookname" class="form-parts"></div>
                <div class="form-title">著　　者</div>
                    <div class="form-item"><input type="text" name="author" class="form-parts"></div>
                <div class="form-title">アドレス</div>
                    <div class="form-item"><input type="text" name="bookurl" class="form-parts"></div>
                <div class="form-title">コメント</div>
                    <div class="form-item"><textArea name="comment" rows="4" cols="40" class="form-parts2"></textArea></div>
                <input type="submit" value="送信" class="btn">
            </fieldset>
        </div> 
    </form>
    
</body>
</html>