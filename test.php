<!DOCTYPE html>
<html lang="x-default" dir="rtl" data-ng-app="app" class="">
    
    <style>
body {background-color: powderblue;}
h1   {color: blue;}
p    {color: red;}

.bas {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 35px;
}

.textarea {
  font-size: 22px;
  width: 100%;
    height: 200px;
}
</style>

<head>
<title>لسان عثمانى</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

<div class="Paragraph">
<h2> لسان عثمانى توركچه</h2>



</div><br />

<div class="Paragraph">
<h2 dir="rtl" id="example-1">
لسان عثمانى  </h2>
<?php

error_reporting(E_STRICT);

require 'ot-php/src/Ottoman.php';
$Ottoman = new \OtPHP\I18N\Ottoman();

if(isset($_POST['submit'])) 
{ 

    $description = $_POST['description'];

 echo "<br/><h1>".$Ottoman->tr2ot("$description"). "</h1><br/>";

}
?>
</div><br />
 <textarea class="textarea" form="mygeeks" id="description" name="description" placeholder="---Çevirilecek latin harfli Türkçe yazıyı yapıştırınız---"><?php echo $description; ?></textarea><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="mygeeks">

   <input type="submit" name="submit" class="bas" value="يازييي چوير"><br>
</form>
<hr/>
مسعود سزر
<hr/><p>بويوك دستك
</p>
</div>
<footer><i><a href="https://github.com/khaled-alshamaa/ar-php">عر-پهپ</a>, عرپچه لسان ایچون</i></footer>
</body>
</html>
