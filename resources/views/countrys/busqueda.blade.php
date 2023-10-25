<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Img/todo_fnaf.jpg">
    <link rel="stylesheet" href="./Estilo/estilos.css">
    <link rel="stylesheet" href="./Estilo/busqueda.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Busqueda</title>
    <style>
        
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,200&family=Mulish:ital,wght@0,300;0,400;1,200&family=Oswald:wght@200;600;700&family=Roboto:wght@100&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,200&family=Mulish:ital,wght@0,300;0,400;1,200&family=Oswald:wght@200;600;700&family=Roboto:wght@100&family=Victor+Mono:wght@100&display=swap');
/*--------
Estilo Global
----------*/

*{
    padding: 0;
    margin: 0;
}

body{
    background: rgb(44, 43, 43);
}

.logo{
    position: absolute;
    width: 80px;
    height: 80px;
    margin-left: 50px;
    padding-top: 10px;
    border-radius: 50%;
}

h1{
    text-align: center;
    position: relative;
    float: center;
    padding: 30px;
    font-family: Arial, Helvetica, sans-serif,cursive;
    color: rgb(0, 0, 0);
}
header{
    box-sizing: border-box;
    background-color: rgb(44, 43, 43);
    width: 100%;
    height: 100%;
}


.menu{
    background: rgb(81, 34, 34);;
    list-style: none;
    text-align: center;
    width: 100%;
    height: 100px;
    display: inline-block;
    
}
ul{
    display: flex;
    justify-content: space-around;
    list-style: none;  
}
ul a{
    text-decoration: none;
    color: #000000;
    background-color: rgb(0, 0, 0);
    padding: 10px 16px;
    border-radius: 30px;
    opacity: 0.5;
    font-size: 26px;
    display: inline-block;
    outline: none;
    margin: 4px;
    transition: 0.2s ease;
    font-family: 'Mulish', sans-serif;
}
li a{
    background: rgb(93, 86, 86);
    color: rgb(255, 255, 255);
    padding: 10px;
    border: 30px;
    text-decoration: none;
}
ul li a.activo{
    background-color: rgb(255, 191, 0);
    transform: none;
}
ul li a:hover{
    opacity: 1;
}
footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
  }
  
.footer {
    max-width: 600px;
    margin: 0 auto;
    margin-top: 100px;
  }
.footer p{
    text-align: center;
    margin: 0;
 }
 .img-footer{
    margin: auto;
    display: block;
    width: 20px;
    height: 20px;
    padding-top: 20px;
}
        .contenedor {
    margin: 30px auto;
    max-width: 600px;
    padding: 20px;
    border: 1px solid #b64040;
    border-radius: 5px;
  }
  
  input[type="text"] {
    width: 30%;
    padding: 10px;
    margin-top: 10px;
    
    
  }
  
  .boton{
    background: rgb(26, 83, 255);
    font-size: 1.25em;
    padding: 14px 22px;
    border: 0;

    width: 200px;
    text-decoration: none;
}
  
  button:hover {
    background-color: #a04545;
  }
  
  #resultado {
    margin-top: 20px;
    text-align: left;
  }
  h1{
    text-align: center;
    position: relative;
    float: center;
    padding: 30px;
    font-family: Arial, Helvetica, sans-serif,cursive;
    color: rgb(0, 0, 0);
}
header{
    box-sizing: border-box;
    background-color: rgb(44, 43, 43);
    width: 100%;
    height: 100%;
}
.Imagen_d{
  margin: auto;
  display: block;
  margin-top: 30px;
  border-radius: 10%;
  width: 350px;
  height: 350px;
  padding-top: 20px;
}
.S{
  background: rgb(26, 83, 255);
  display: inline-block;
  font-size: 1.25em;
  padding: 14px 22px;
  border: 0;
  margin: 0 41%  0;
  text-align: center;
  width: 200px;
  text-decoration: none;
}

    </style>
    <script>
         function actualizarTexto() {
        const filtroSeleccionado = document.getElementById("filtro");
        const buscarInput = document.getElementById("buscar");
        buscarInput.value = filtroSeleccionado.value;
    }

    actualizarTexto();


        async function buscarPalabra(event) {
        event.preventDefault();
    
        const palabraABuscar = document.getElementById("buscar").value.toLowerCase();
        const resultadoContenedor = document.getElementById("resultado-contenedor");
    
        if (palabraABuscar ==="fnaf 1") {
            resultadoContenedor.style.display = "block";
            resultadoContenedor.innerHTML = `
            <p><h1>FIVE NIGHTS AT FREDDYS</h1>
            <br>Five Nights at Freddy's es un videojuego de terror independiente del género point and click desarrollado por Scott Cawthon. El juego se hizo popular por medio de la emisión de sesiones de juego y videos virales El videojuego se centra en una pizzería llamada «Freddy Fazbear's Pizza», donde el jugador interpreta a un guardia de seguridad nocturno que durante su turno de vigilancia se ve obligado a defenderse del constante acoso y ataque de los defectuosos animales animatrónicos. La única forma que tiene el jugador de protegerse es realizar el seguimiento de los muñecos a través de las cámaras de seguridad de circuito cerrado distribuidas por el establecimiento y cerrando una serie de puertas de seguridad, con el agravante de que éstas únicamente pueden permanecer cerradas por tiempo limitado. <br>
            <img class="Imagen_d" src="./Img/fnaf1.jpg" alt=""><br>
            <h1>Enlace de Descarga</h1>
            <a href="https://store.steampowered.com/app/319510/Five_Nights_at_Freddys/?l=spanish" class="S"><i class="fa-brands fa-steam"></i>Steam</a>     </p>

            `;
        } else if (palabraABuscar ==="fnaf 2") {
            resultadoContenedor.style.display = "block";
            resultadoContenedor.innerHTML = `
            <h1>FIVE NIGHTS AT FREDDYS 2</h1>
            <br>Las diferencias de este juego con su antecesor es la encarnación del jugador en el vigilante de seguridad Jeremy Fitzgerald, en lugar de Mike Schmidt. Además de los cuatro personajes originales (Freddy, Chica, Bonnie y Foxy) además de Golden Freddy también aparecen seis nuevos animatrónicos: The Mangle, Toy Freddy, Toy Chica, Toy Bonnie, Balloon Boy y Puppet. A diferencia del juego anterior, el jugador está más indefenso al no existir puertas para protegerse de los ataques; en su lugar, tiene como protección una máscara de Freddy Fazbear para hacerles creer que él es Freddy. <br>
            <img class="Imagen_d" src="./Img/Fnaf2.jpg" alt=""><br>
            <h1>Enlace de Descarga</h1><br>
            <a href="https://store.steampowered.com/app/332800/Five_Nights_at_Freddys_2/?l=spanish" class="S"><i class="fa-brands fa-steam"></i>Steam</a><br>
                            
                                
                            

            `;
            
        } else if (palabraABuscar ==="fnaf 3") {
            resultadoContenedor.style.display = "block";
            resultadoContenedor.innerHTML = `
            <h1>FIVE NIGHTS AT FREDDYS 3</h1>
            <br>El juego mantiene la misma temática de las entregas anteriores: trabajar como un guardia de seguridad nocturno, defendiéndose del ataque de los animales animatrónicos mientras sigue sus movimientos a través del establecimiento utilizando las cámaras de seguridad de dicho lugar. El juego cuenta también con el ingreso de un nuevo robot totalmente deteriorado llamado «Springtrap», además de nuevos animatrónicos denominados «phantom», quienes se basan en los personajes de los anteriores títulos: Freddy, Chica, Foxy, BB, Mangle y Puppet. <br>
            <img class="Imagen_d" src="./Img/fnaf3.jpg" alt=""><br>
            <h1>Enlace de Descarga</h1>
            <a href="https://store.steampowered.com/app/354140/Five_Nights_at_Freddys_3/" class="S"><i class="fa-brands fa-steam"></i>Steam</a>
                                
                            

            `;
         } else if (palabraABuscar ==="fnaf 4") {
            resultadoContenedor.style.display = "block";
            resultadoContenedor.innerHTML = `
            
            <h1>FIVE NIGHTS AT FREDDYS 4</h1>
            <br>Es creado y desarrollado por Scott Cawthon, siendo así por el título, la cuarta y última entrega de la serie de Five Nights at Freddy's. Fue lanzado el 23 de julio de 2015. También se lanzó una actualización especial de Halloween el 30 de octubre del mismo año. Ambientada en 1983, años antes de los sucesos de Five Nights at Freddy's 3, el personaje principal es un niño de nombre desconocido, Éste se encuentra encerrado en su dormitorio con peluches de los animatrónicos principales de la saga —Freddy, Bonnie, Chica y Foxy—, siendo guiado por el peluche de FredBear. En esta entrega hay personajes especiales que también son enemigos. Cada noche, el niño sufre de pesadillas en las cuales está siendo atacado por los animatrónicos pesadilla. Después de que el jugador sobrevive a la primera noche, el peluche de FredBear le dice al niño que "Él" se esconde en la casa, antes de que el niño se asustara por su hermano que llevaba una máscara de Foxy, que parece haber sido arrancada uno de los peluches del chico. <br>
            <img class="Imagen_d" src="./Img/fnaf4.jpg" alt=""><br>
            <h1>Enlace de Descarga</h1><br>
            <a href="https://store.steampowered.com/app/388090/Five_Nights_at_Freddys_4/" class="S"><i class="fa-brands fa-steam"></i>Steam</a><br>
            `;
            
           }else {
            resultadoContenedor.style.display = "none";
        }
    }
        </script>
</head>
<body>
    <header>
        <img class="logo" src="./Img/todo_fnaf.jpg" alt="logo">
        <h1>Busqueda</h1>
        <div class="menu">
            <ul>
                <li><a href="./index.html">Descripcion</a></li>
                <li><a href="./Login.html">Iniciar Sesion</a></li>
                <li><a href="./Registro.html">Registrame</a></li>
                <li><a class="activo" href="./busqueda.html">Busqueda</a></li>
            </ul>
        </div>
    </header>
    <div class="contenido">
        <form class="form-basico" action="#" onsubmit="return buscarPalabra(event);">
            <form class="form-basico" action="#" onsubmit="return buscarPalabra(event);">
                <div class="entrada">
                    <label for="filtro">Selecciona un juego:</label>
                    <select id="filtro" name="filtro" onchange="actualizarTexto()">
                        <option value="">seleccione</option>
                        <option value="fnaf 1">FNAF 1</option>
                        <option value="fnaf 2">FNAF 2</option>
                        <option value="fnaf 3">FNAF 3</option>
                        <option value="fnaf 4">FNAF 4</option>
                    </select>
                </div>
                <div class="entrada">
                    <label for="buscar">Buscador:</label>
                    <input type="text" name="buscar" id="buscar" required>
                    <button class="boton" type="submit">BUSCAR</button>
                </div>
            </form>
        
        
     </div>
     <div id="resultado-contenedor"></div>
            
        </form>
    </div>
</body>
<footer>
    <div class="footer">
      <p>© 2023 FNAF - Todos los derechos reservados. <br>
        Nos puedes contactar por: <br>
        <img class="img-footer" src="./Img/Instagram-Icon.png.webp" alt=""><br>
        <a href="https://www.instagram.com/">@Fnaf-Intagram</a><br>
        <img class="img-footer" src="./Img/fb_icon_325x325.png" alt=""><br>
        <a href="https://www.facebook.com/">@Fnaf-facebbok</a><br>
      </p>
    </div>
</footer>
</html>