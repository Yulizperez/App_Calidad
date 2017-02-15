<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    

    <title>Instalador</title>
</head>
<body>
<div class="container center">
    <div class="row">
        <div class="two-half column" >
         
             <form action="configuracion.php" method="post">
                <div class="row" >
                    <div class="sixteen columns vertical-offset-by-one">       
                     
                        <label for="host">Ingresa el nombre del servidor</label>
                        <input class="u-full-width" type="text" name="host" placeholder="localhost" id="host">
                   
                        <label for="user">Ingresa el nombre de usuario del servidor</label>
                        <input class="u-full-width" type="text" name="user" laceholder="root" id="user">
                    
                                
                        <label for="password">Ingresa la contraseña del servidor</label>
                        <input class="u-full-width" type="password" name="password" placeholder="abc123" id="password">
                  
                    </div>
            
                </div>

                <input class="button-primary" type="submit" value="Submit">
            </form>
           
        </div>
    </div>
</div>
</body>
</html>