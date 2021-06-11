

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<h2>Success, your payment went through. You can download your ebookk by clicking on the Download button below!</h2>
<table>
    <tr>
        <th> Summary </th>
    </tr>
    <tr>
        <td>First Name : <?php echo $fname; ?> </td>
    </tr>
    <tr>
        <td>Last Name :  <?php echo $lname; ?> </td>
    </tr>
    <tr>
        <td>Email :  <?php echo $email; ?> </td>
    </tr>
    <tr>
        <td>Phone : <?php echo $phone; ?> </td>
    </tr>
    
    <tr>
        <td><a href="#">Download Now!</a> </td>
    </tr>
</table>

</div>
</body>
</html>
