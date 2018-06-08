<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/push.min.js" charset="utf-8"></script>
  </head>
  <body>

    <div class="container">
      <button type="button" name="button" id="btn">Lanzar</button>

    </div>

    <script type="text/javascript">
        window.onload=function(){
          Push.Permission.request();
        }

        document.getElementById('btn').onclick = function(){
          Push.create('Notificacion de prueba', {
            body: 'Esta una Notificacion de prueba',
            icon: 'img/sobre.png',
            timeout: '5000',
            vibrate: [100,100,100],
            onClick: function(){
              alert('click en la Notificacion');
            }

          });
        }

    </script>


  </body>
</html>
