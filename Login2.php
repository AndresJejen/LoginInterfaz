<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8" />
<title>jQuery Show Password Plugin</title>
<link type='text/css' href="Estilos/Login2.css" rel="stylesheet"/>
<style>
.forms li {
  position: relative;
}
.show-password-link {
  display: block;
  position: absolute;
  z-index: 11;
}
.password-showing {
  position: absolute;
  z-index: 10;
}
</style>
</head>

<body>
  
    <div class="header">
         <?php
        $bienvenido = "Bienvenido a APORTAPP v. 2.0  Ubicación del Servidor: Bogotá";
        echo $bienvenido;
        ?>
     </div>
  <form action="#">
    <ol class="forms">
      <li>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" />
      </li>
      <li>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="password" />
      </li>
      <li class="buttons">
        <button type="submit">Submit</button>
      </li>
    </ol>
  </form>
  <div class="base">  
&copy; 2018 CoopesingUD.com
<script type="text/javascript">
    var d = new Date();
    document.write('Fecha: '+d.getDate(),"/"+d.getMonth(),"/"+d.getFullYear());
</script>
<script type="text/javascript">
function startTime(){
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);}
function checkTime(i)
{if (i<10) {i="0" + i;}return i;}
window.onload=function(){startTime();}
</script>
<div id="reloj" style="font-size:20px;"></div>
</div>
  
<script src="Scripts/jquery.js"></script>
<script src="Scripts/jquery.showPassword.js"></script>
<script>
$(document).ready(function() {
  $(':password').showPassword({
    linkRightOffset: 5,
    linkTopOffset: 11
  });
});
</script>
</body>
</html>