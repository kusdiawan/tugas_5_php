<!DOCTYPE html>
<html>
<head>
	<title>Tugas 5 - 1</title>
</head>
<body>
<h1>Operator String</h1>
<table border=1> 
<tr>
<th>Input 1</th>
<th>Input 2</th>
<th>AND</th>
<th>OR</th>
</tr>

<tr>
<td>false</td>
<td>false</td>
<td>
<?php echo printf(false && false) ?>
</td>
<td>
<?php echo printf(false || false) ?>
</td>
</tr>

<tr>
<td>false</td>
<td>true</td>
<td>
<?php echo printf(false && true) ?>
</td>
<td>
<?php echo(false || true) ?>
</td>
</tr>

<tr>
<td>true</td>
<td>false</td>
<td>
<?php echo printf(true && false) ?>
</td>
<td>
<?php echo(true || false) ?>
</td>
</tr>

<tr>
<td>true</td>
<td>true</td>
<td>
<?php echo(true && true) ?>
</td>
<td>
<?php echo(true || true) ?>
</td>
</tr>

</table>

</body>
</html>
