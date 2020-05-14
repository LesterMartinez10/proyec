 <?php
         $user=array("lester,juan");
         $pass=array("123,456");


         $estado=false;

         $nombre=$_POST['nombre'];
         $passsword=$_POST['pass'];

         $tam=count($user);

         for ($x=0 ;$x<$tam; $x++)
         {
                   if ($user[$x]==$nombre && $pass[$x]==$password)
                   {
                          $estado=true;
                   }
		 }
         if ($estado=true;) 
         {
            echo("si");
         }
         else 
         {
	           header("location:index.html");
         }
?>