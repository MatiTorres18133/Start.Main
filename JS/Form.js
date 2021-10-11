document.querySelector('#submit').addEventListener("click", function () {


  

  let cliente = document.querySelector("#cliente").value;
  let fecha = document.querySelector("#fecha").value;

  
  let servicio = document.querySelector("#servicio").value;
  let resp = document.querySelector("#respuesta");

  let url = "https://api.whatsapp.com/send?phone=542995304542&text=*Start.Main*%0A*Reservas*%0A%0A*¿Cuál es tu nombre?*%0A" 
  + cliente + "%0A*Fecha estimada*%0A" + fecha + "%0A*Servicio Solicitado*%0A" + servicio;
 



  window.open(url);
});