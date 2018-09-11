<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calidad de Producto de Software</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Juego/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="../Juego/funciones.js"></script>

</head>
<body>
    <!--Aqui es la parte de la CABECERA-->
<div id="particles-js">
    <div class="jumbotron text-center" style="margin-bottom:0; background-color: #2D3E50; border-radius: 0px; padding: 32px">
        <h1 style="color: white;">Calidad de Producto de Software - ISO/IEC 25010</h1>
        <br>
        <div class="container">
        <br>
        <?php include ("../Juego/modal.php");?>
            <div class="row">
                <div class="col-sm">
                    <p style="color: white; font-size: 19px" data-toggle="modal" data-target="#ModalGenerico" onclick="ObtenerCar(3)">USABILIDAD</p>
                    <span class="rounded" style="background-color: #17A2B8"></span>
                </div>
                <div class="col-sm">
                    <p style="color: white; font-size: 19px" data-toggle="modal" data-target="#ModalGenerico" onclick="ObtenerCar(1)">EFICIENCIA DE DESEMPEÑO</p>
                    <span class="rounded" style="background-color: #DC3545"></span>
                </div>
                <div class="col-sm">
                    <p style="color: white; font-size: 19px" data-toggle="modal" data-target="#ModalGenerico" onclick="ObtenerCar(2)">COMPATIBILIDAD</p>
                    <span class="rounded" style="background-color: #FFC107"></span>
                </div>
                <div class="col-sm">
                    <p style="color: white; font-size: 19px" data-toggle="modal" data-target="#ModalGenerico" onclick="ObtenerCar(0)">ADECUACIÓN FUNCIONAL</p>
                    <span class="rounded" style="background-color: #28A745"></span>
                </div>
            </div>
        </div>

        <div class="container">
            <br>
                <div class="row">
                    <div class="col-sm">
                        <span class="rounded" style="background-color: #EE7637"></span>
                        <p style="color: white; font-size: 19px" data-toggle="modal" data-target="#ModalGenerico" onclick="ObtenerCar(4)">FIABILIDAD</p>
                    </div>
                    <div class="col-sm">
                        <span class="rounded" style="background-color: #9AF0CB"></span>
                        <p style="color: white; font-size: 19px" data-toggle="modal" data-target="#ModalGenerico" onclick="ObtenerCar(5)">SEGURIDAD</p>
                    </div>
                    <div class="col-sm">
                        <span class="rounded" style="background-color: #01CAFF"></span>
                        <p style="color: white; font-size: 19px" data-toggle="modal" data-target="#ModalGenerico" onclick="ObtenerCar(6)">MANTENIBILIDAD</p>
                    </div>
                    <div class="col-sm">
                        <span class="rounded" style="background-color: #71A3C4"></span>
                        <p style="color: white; font-size: 19px" data-toggle="modal" data-target="#ModalGenerico" onclick="ObtenerCar(7)">PORTABILIDAD</p>
                    </div>
                </div>
        </div>    
            <hr style="background-color: #E9ECEF">
            <!--Aqui la parte del semibody--> 
        <?php
            include ('../Juego/semBody.php');
        ?>
    </div>
</div>
    <!--Aqui es la parte del FOOTER-->
    <?php
        include ('../Juego/footer.php');
    ?>
    <script type="text/javascript" src="../particles/particles.js"></script>
    <script type="text/javascript" src="../particles/app.js"></script>
</body>
</html>