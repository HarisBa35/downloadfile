<html>
<body>

<form action="welcome1.php"  method="post" onkeyup="name.value = txtFirstName.value +'.'+txtLastName.value"  >
<h3>Unesite broj narudzbe :<br> <input type="text"  name="txtFirstName"  size="25" onfocus="myFunction(this)"/> <br><br></h3>
 <input type="hidden" name="txtLastName"  value='xml' /> <br><br>
 <input type="hidden" name="name"> <br><br>
<input type="submit" value="Preuzmi narudzbu">

</form>
<script>
function myFunction(x) {
  x.style.background = "yellow";
}
</script>

<?php

if (!empty($_POST)){
//$postName = $_POST["name"];
//$postTest = $_POST[$postName];
$file = $_POST["name"];

if (file_exists($file))
	{
		
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="export.xml"');	
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
	
	unlink($file);
	
	}
	

    
	else
	{		
		$a=$_POST["name"];		
       
		echo "<h1> File $a ne postoji </h1>";	
	}	

}	

?>
</body>
</html>


