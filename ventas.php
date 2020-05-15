<!doctype html>
<html lang="en">
    <head>
       

        <title>Ventas</title>
    </head>
        <body style="background: #f2f3f4">
        <br />
        <div align="center">
            <h1>VENTAS</h1>
        </div>

        <div align="right">
            <a href="index.html">Salir</a>
        </div>
        <hr />
        <br />
        <?php
            if(isset($_GET['producto']))
            {
                include('conexion.php');
                $con = new conexiono();
                $producto=$_GET['producto'];
                $precio=$_GET['precio'];

                $query="INSERT INTO `carrito`( `producto`, `precio`) VALUES ('$producto','$precio');";           
                $consulta=$con->query($query);
                $con->close();
             ?>
                <table align="center" border=1>
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
                        }
                    ?>
                </table>
            <?php                   
            }
        ?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="clo-10 ">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Agragar Carrito</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/nintendoswich.jpg" />
                                </td>
                                <td>
                                    <p>
                                        El Samsung Galaxy J3 Prime sale al mercado como uno de los nuevos modelos de gama de entrada del fabricante, con un precio que se sitúa en la órbita de los 100 euros y con el aliciente de debutar con Android 7.0 Nougat de serie.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 100.00</p>
                                </td>
                                <td>
                                    <a href="?producto=nintendoswich&precio=100">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/nintendoswichlite.jpg" />
                                </td>
                                <td>
                                    <p>
                                        El Galaxy A50 es pura estética de primera calidad. Ya sea en sus colores modernos blanco o negro o en los colores brillantes coral o azul, su cuerpo delgado cabe cómodamente en la mano. Además, con la cubierta de plástico vidriado 3D y el escáner de huellas dactilares en la pantalla, sentirás curvas suaves y perfectas en los bordes.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 150.00</p>
                                </td>
                                <td>
                                    <a href="?producto=nintendoswichlite&precio=150">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/xbox.jpg" />
                                </td>
                                <td>
                                    <p>
                                        Hemos diseñado Galaxy S7 y S7 edge dando rienda suelta a nuestra imaginación. El resultado es una usabilidad incomparable, repleta de funciones avanzadas con un aspecto descaradamente moderno. Unos smartphones con un aspecto realmente atractivo y muy fáciles de usar.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 250.00</p>
                                </td>
                                <td>
                                    <a href="?producto=xbox&precio=250">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/xboxx.jpg" />
                                </td>
                                <td>
                                    <p>
                                        Hemos diseñado Galaxy S7 y S7 edge dando rienda suelta a nuestra imaginación. El resultado es una usabilidad incomparable, repleta de funciones avanzadas con un aspecto descaradamente moderno. Unos smartphones con un aspecto realmente atractivo y muy fáciles de usar.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 250.00</p>
                                </td>
                                <td>
                                    <a href="?producto=xboxx&precio=250">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/play.jpg" />
                                </td>
                                <td>
                                    <p>
                                        Hemos diseñado Galaxy S7 y S7 edge dando rienda suelta a nuestra imaginación. El resultado es una usabilidad incomparable, repleta de funciones avanzadas con un aspecto descaradamente moderno. Unos smartphones con un aspecto realmente atractivo y muy fáciles de usar.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 250.00</p>
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