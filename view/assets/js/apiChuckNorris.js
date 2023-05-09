
    
  // Seleccionar el elemento de la caja de texto
const cajaTexto = document.getElementById("chisteChuckNorris");
// Hacer la solicitud a la API de Chuck Norris
fetch('https://api.chucknorris.io/jokes/random')
  .then(response => response.json())
  .then(data => {
    // Establecer el valor de la caja de texto con el chiste obtenido
    cajaTexto.value = data.value;
  });



