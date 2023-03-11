<html>
<head>
	<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {  background-image: url("deniz.jpg");

  
  height: 100%;

 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
} 
</style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<br><br>

<br>
<center>
Add name
<br><br>
<?php
$nota = $_GET['not'];
if(isset($nota)){
echo "Your name is available."; 
}
?>
<a href="agroup/agroup.php"><button type="button" class="btn btn-warning">A Group</button></a>
<br><br>
<a href="bgroup/bgroup.php"><button type="button" class="btn btn-warning">B Group</button></a>
<br><br>
<a href="cgroup/cgroup.php"><button type="button" class="btn btn-warning">C Group</button></a>
<br><br>
<a href="dgroup/dgroup.php"><button type="button" class="btn btn-warning">D Group</button></a>
</center>
</body>
</html>