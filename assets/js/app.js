function ocultar(div){
	owurl7 = document.getElementById(div);
	owurl7.style.display = 'none' 
  }
function mostrar(div){
	owurl7 = document.getElementById(div);
	owurl7.style.display = 'block' 
}

function aleatorio(a,b){ 
	var resAleatorio = Math.floor((Math.random() * (b - a + 1)) + a);
	return resAleatorio;
}
function correcto(){
  document.getElementById("estadoCorrecto").style.display="block";
  var divT = "document.getElementById('estadoCorrecto').style.display = 'none'"; 
  var timeOutPeriod = 3000; 
  var hideTimer = setTimeout(divT, timeOutPeriod);
  }
function incorrecto(){
  document.getElementById("estadoIncorrecto").style.display="block";
  var divT = "document.getElementById('estadoIncorrecto').style.display = 'none'"; 
  var timeOutPeriod = 3000; 
  var hideTimer = setTimeout(divT, timeOutPeriod);
}

