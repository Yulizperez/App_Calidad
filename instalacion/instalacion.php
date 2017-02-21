<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
     <link rel="stylesheet" href="../../assets/css/instalacion.css" />

    <title>Instalador</title>
</head>
<body>
<div class="container center">
    <div class="row">
        <div class="two-half column" >
         
            <h4 align="center" >Para instalar la aplicasión Ingresa Los datos requeridos solo si es tu primera instalación.</h4>
            
             <form action="configuracion.php" method="post">
                <div class="row" >
                    <div class="sixteen columns vertical-offset-by-one">       
                     
                        <label for="host">Ingresa el nombre del servidor</label>
                        <input class="u-full-width" type="text" name="host" placeholder="localhost" id="host">
                   
                        <label for="user">Ingresa el nombre de usuario del servidor</label>
                        <input class="u-full-width" type="text" name="user" laceholder="root" placeholder="Ejm: root" id="user">
                    
                                
                        <label for="password">Ingresa la contraseña del servidor</label>
                        <input class="u-full-width" type="password" name="password" placeholder="Contraseña" id="password">
                  
                    </div>
            
                </div>

                <input class="button-primary" type="submit" value="Instalar">
            </form>
           
        </div>
    </div>
</div>
</body>

</html>