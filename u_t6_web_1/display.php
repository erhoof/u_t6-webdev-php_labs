<HTML>
<HEAD><TITLE>В РНР ИЗ ФОРМЫ F_POST.html</title></head>
<BODY><H3>П Р И В Е Т С Т В И Е</h3>
<?php
$name=$_POST["name"];
$age=$_POST["age"];
if($age>50)
{echo "Привет! $name. Вы - старейшина!<p>";}
elseif($age>30)
{echo "Привет! $name, you are very old!<p>";}
else
{echo "Привет! $name.";}
echo '<P>Вы работаете с версией PHP : ' . phpversion();
?>
<p></p><a href=index.html>Возврат</a>

</body>
</html>