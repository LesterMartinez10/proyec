 <?php
         include('validaruser.php');
         $validar = new validarusuario;
       


         $nombre=$_POST['nombre'];
         $password=$_POST['pass'];

         $resultado=$validar->validaruser($nombre,$password);
 


         if ($resultado->num_rows== 1) 
         {
           header("location:ventas.php");
                               
         }
         else 
         {
	        header("location:index.html");
                     
         }
?>