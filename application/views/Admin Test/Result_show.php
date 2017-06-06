<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
<tr>
   
	<td>Obtan markes</td>
	<td>Worng </td>
	<td>Not attemt</td>
	<td>Total Markes</td>
	 <td>Precentage</td>
	<td> Date</td>
</tr>
<tr>
	
<?php foreach ($get_result as $key) {?>


<td><?php echo $key->obtain_marks; ?></td>
<td><?php echo $key->Wrong; ?></td>
<td><?php echo ($key->total_marks) - ($key->obtain_marks + $key->Wrong); ?></td>

<td><?php echo $key->total_marks; ?></td>
<td><?php echo $key->parcentage; ?></td>
<td><?php echo $key->Date; ?></td>


<?php } ?>

</tr>
</table>
</body>
</html>
<style type="text/css">
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>