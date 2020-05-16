<!doctype html>
<html lang="en">
    <head>
        <title>Ventas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>       
        <br />
        <div align="center">
            <h1 class="card-title"><span class="badge badge-secondary">VENTAS </span></h1>
        </div>
        <div align="right">
            <a  class="btn btn-secondary btn-lg" href="index.html">Salir si no a comprado nada</a>
             <button type="button" class="btn btn-light">
		     <a href="final.php">Finalizar compra</a>
        </div>
        <br />        
        <?php
            if(isset($_GET['producto']))
            {
                include('conexion.php');
                $con = new conexion;
                $producto=$_GET['producto'];
                $precio=$_GET['precio'];

                $query="INSERT INTO `carrito`( `producto`, `precio`) VALUES ('$producto','$precio');";           
                $consulta=$con->query($query);
                $con->close();
             ?>
                <table align="center" class="table table-dark" >
                    <tr>
                        <td>
                            <p>Producto</p>
                        </td>
                        <td>
                            <p>Precio</p>
                        </td>
                    </tr>
                    <?php
                         
                        $con = new Conexion();
                        $query="SELECT * FROM `carrito` WHERE 1;";
                        $pro=$con->query($query);
                        $con->close();
                         $total=0;
                        while($row=mysqli_fetch_assoc($pro))
                        {
                            echo "
                                <tr>
                                    <td>
                                        <p>".$row['producto']."</p>
                                    </td>
                                    <td>
                                        <p>".$row['precio']."</p>
                                    </td>
                                </tr>
                            ";
                            $total=($total+$row['precio']);
						  
                        }
                        ?>
							   <p>Total de la compra=<?php echo $total; ?> </p>			  
					    <?php
                    ?>
                </table>
            <?php                   
            }
        ?>
        <body background="Fondo3.JPG">
        <div class="container">
            <div class="row justify-content-center">
                <div class="clo-10 ">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Agregar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/nintendoswich.jpg"width="250" height="200"/>
                                </td>
                                <td>
                                    <p class="text-justify">
                                      Switch es diferente a todas las consolas que hemos visto hasta el momento.</br>
                                      El ultimo juguete de Nintendo es una maquina que tanto puede utilizarse conectada a la television y a una toma de corriente,
                                      como de forma portatil gracias a una pantalla y bateria propias.
                                      De hecho, casi podria decirse que en lugar de una consola se trata de una tableta pensada exclusivamente para jugar.                               
                                    </p>
                                </td>
                                <td>
                                    <p>$350.00</p>
                                </td>
                                <td>
                                    <a href="?producto=nintendoswich&precio=350">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/nintendoswichlite.jpg"width="250" height="200"/>
                                </td>
                                <td>
                                    <p class="text-justify">
                                       Nintendo Switch Lite es la nueva incorporacion a la familia Nintendo Switch:
                                       se trata de una consola compacta y ligera que se puede llevar a cualquier sitio con facilidad.</br> 
                                       Con Nintendo Switch Lite se puede jugar a todos los programas de Nintendo Switch que son compatibles con el modo portatil
                                    </p>
                                </td>
                                <td>
                                    <p>$200.00</p>
                                </td>
                                <td>
                                    <a href="?producto=nintendoswichlite&precio=200">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/xbox.jpg"width="250" height="200" />
                                </td>
                                <td>
                                    <p class="text-justify">
                                        Ya sea que estes disfrutando de tus juegos, mirando tus series favoritas o haciendo streaming de tu juego.</br>
                                        Xbox One S ofrece impresionantes graficos con tecnologia HDR,
                                        audio de primera calidad y capacidad de juego rapido y confiable con tus amigos.
                                    </p>
                                </td>
                                <td>
                                    <p> $250.00</p>
                                </td>
                                <td>
                                    <a href="?producto=xbox&precio=250">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/xboxx.jpg"width="250" height="200" />
                                </td>
                                <td>
                                    <p class="text-justify">
                                        Todos los juegos se ven y juegan bien en Xbox One X.<br/> 
                                        Pero los titulos seleccionados estan optimizados para aprovechar la consola mas potente del mundo.<br/>
                                        Estos juegos son para Xbox One X Enhanced.<br/>
                                    </p>
                                </td>
                                <td>
                                    <p>$450.00</p>
                                </td>
                                <td>
                                    <a href="?producto=xboxx&precio=450">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/play.jpg"width="250" height="200" />
                                </td>
                                <td>
                                    <p class="text-justify">
                                        Presentamos la consola PlayStation 4.<br/>
                                        Ahora con una construccion mas liviano y mas delgado que nunca<br/>
                                        Disco duro de 1 TB<br/>
                                        Todos los mejores juegos, programas de television, musica y mucho mas.<br/>
                                    </p>
                                </td>
                                <td>
                                    <p>             $250.00</p>
                                </td>
                                <td>
                                    <a href="?producto=play&precio=250">Comprar</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>          
   </body>
</html>