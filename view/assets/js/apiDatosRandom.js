// Seleccionar el elemento de la caja de texto
const cajaTexto = document.getElementById("datoInecesario");

// Hacer la solicitud a la API de uselessfacts
fetch('https://uselessfacts.jsph.pl/api/v2/facts/random')
  .then(response => response.json())
  .then(data => {
    // Actualizar el valor de la caja de texto con el resultado obtenido
    cajaTexto.value = data.text;
  });
