<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
  </head>
  <body>

       
    

    <?php
      //commentがPOSTされているなら
      if(!empty($_POST["comment"])){
        //エスケープしてから表示
        $comment = htmlspecialchars($_POST["comment"]);
		$name = htmlspecialchars($_POST["name"]);
		$mail = htmlspecialchars($_POST["mail"]);
        $span = "<span style='color:red'> ${name}のコメントは「 ${comment} 」です。</span>" . "</br>";
		echo $span;
		print("${name}のemailは「 ${mail} 」です。");
      } else {
    ?>
		
		<p>名前を入力してください。</p>
        <form method="POST" action="index.php">
        <input name="name" />

		<p>emailを入力してください。</p>
        <input name="mail" />
  
        <p>コメントしてください。</p>
          <input name="comment" />
          <input type="submit" value="送信" />
        </form>

		 

    <?php
      }
    ?>
  </body>
</html>