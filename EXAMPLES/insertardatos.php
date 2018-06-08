<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Documento Nuevo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
<style>

    th{
        background: black;
        color: white;
    }
    
</style>
</head>
<body>
   
   <div class="container">
       
       <h1 class="display-4 text-center">Usuarios</h1>
       
       <form action="">
           
           
           <input id="nombre" type="text" placeholder="Ingresa nombre" class="form-control my-2">
           <input id="edad" type="text" placeholder="Ingresa edad" class="form-control my-2">
           <button id="boton" class="btn btn-danger" type="reset" onclick="capturar();">Agregar</button>
           
           
           
       </form>
       
       
   </div>
   
   <div class="container">
       
       <table class="table mt-5 mb-5" id="tabla">
          
          <tr>
              <th>Nombre</th>
              <th>Edad</th>
          </tr>
           
          
           
           
           
       </table>
       
       
       
       
   </div>
   
<script>
    
    function capturar(){
        
        function Persona(nombre,edad){
            this.nombre = nombre;
            this.edad = edad;
        }
        
        var nombreCapturar = document.getElementById("nombre").value;
        var edadCapturar = document.getElementById("edad").value;
        
        nuevaPersona = new Persona(nombreCapturar,edadCapturar);
        agregar();
        
    }
    
    var baseDatos = [];
    
    function agregar(){
       baseDatos.push(nuevaPersona);
        console.log(baseDatos);
        document.getElementById("tabla").innerHTML += '<tr><td>'+nuevaPersona.nombre+'</td><td>'+nuevaPersona.edad+'</td></tr>';
    }
    
    
    
</script>
   
   
   
</body>
</html>

