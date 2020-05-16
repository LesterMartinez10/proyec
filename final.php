  <?php
	      $servidor="localhost";
		  $basadatos="sistema";
		  $usuario="root";
		  $password="";
		  $conc=mysqli_connect($servidor,$usuario, $passwor,$basadatos);
		  mysqli_query($conc,"DELETE from carrito where 1");
		  mysqli_close($conc);
		  header("location:index.html");
 ?>