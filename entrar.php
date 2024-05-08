<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chimp</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Java.js">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

    <body>
    
<style>
   body{
      background-image: url('<?php echo "img/fundo.jpg"; ?>');
   }
</style>

<?php
error_reporting(E_ERROR)
?>
        
        <!--isso é o card de entrada-->
        <div class="wrapper">
            <div class="card-switch">
                <label class="switch">
                   <input type="checkbox" class="toggle">
                  
                   
                   <div class="flip-card__inner">
                      <div class="flip-card__front">
                         <div class="title"><u>Entrar</u></div>
                         <form class="flip-card__form" action="" method="post">
                            <div class="input-box"><input class="flip-card__input" name="email" placeholder="Email" type="email" value ="<?= $email ?>"> <ul><div class="email1"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPBJREFUSEvdle0NwjAMRK+bwCYwCTAJMAlsApvAJtBX1dVRKVXSDwnVfyo1jp/v6qSVFo5q4fpaF2An6SZpM9G2t6STpCd13KJH/RLIHAFk2wd82soskDAmUP9qNzbNu4IAUPxer10LCajHhYgkIBIuBZBzvYl8jySAxEhGzX7AMixhMOLb+d4kgAU2Ipfnz1RYi26J54TVgwDqUBzpxxbi38UtYRxRGZENCMjBLMMCOndL+sNQBIiuUIHXHnTdHKZejAKEmjjp3UmdE5B7LEYr+H/AnJddN7p+FzF6zPfUGzV5Xed6XJS3rl9mkfTc5C+tRDwZzXJDRwAAAABJRU5ErkJggg=="/></div></ul></div>
                              </br>
                            <input class="flip-card__input" name="password" placeholder="Senha" id="senha" type="password" value ="<?=$password?>">

                            <div class="Senh4">
          <input type="checkbox" id="mostrarSenha" onchange="toggleSenha()"> <label for="mostrarSenha"></label>
      </div>
      </br>
      <div class="remember-forgot">
   <label>Não possui registro?ㅤ </label><a href="registrar.html" > Registre aqui</a>
</div>
                          
                           <button class="flip-card__btn">Confirmar!</button>
                         
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
       <script>
   function toggleSenha() {
  var senhaInput = document.getElementById('senha');

  // Se a caixa de seleção estiver marcada, muda o tipo de entrada para "text"; senão, muda para "password"
  senhaInput.type = document.getElementById('mostrarSenha').checked ? 'text' : 'password';
}

   </script>
</form>
                       
                         </form>
                      </div>  
                   </div>
                </label>
            </div>   
       </div>

       
       
   

    </body>
</html>