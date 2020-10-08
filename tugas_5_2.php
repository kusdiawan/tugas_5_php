<!DOCTYPE html>
<html>
<head>
	<title>Tugas 5 - 2</title>
</head>
<body>
<h1>Operator String</h1>	
<table border=1> 
<tr>
<th>Input 1</th>
<th>Input 2</th>
<th>Hasil</th>
</tr>

<tr>
<td><?php echo ($var1="Ayo")?></td>
<td><?php echo ($var2="Belajar")?></td>
<td>
<?php echo $var3=($var1 . " " . $var2) ?>
</td>

<tr>
<td><?php echo ($var1="Bersama")?></td>
<td><?php echo ($var2="Niomic")?></td>
<td>
<?php echo $var4=($var1 . " " . $var2) ?>
</td>
</table>

<?php echo ("<br> Gabungan : " . $var3 . " ". $var4 . " :)" )?></td>

</body>
</html>
