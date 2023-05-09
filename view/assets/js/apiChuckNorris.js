
// Seleccionar el elemento de la caja de texto
const cajaTexto = document.getElementById("chisteChuckNorris");

// Hacer la solicitud a la API de uselessfacts
fetch('https://api.chucknorris.io/jokes/random')
  .then(response => response.json())
  .then(data => {
    // Actualizar el valor de la caja de texto con el resultado obtenido
    cajaTexto.value = data.value;

    // Hacer la solicitud a la API de traducción
    const textoTraducir = data.value;
    const idiomaOrigen = 'en';
    const idiomaDestino = 'es';
    const urlTraduccion = `https://api.mymemory.translated.net/get?q=${textoTraducir}&langpair=${idiomaOrigen}|${idiomaDestino}`;
    fetch(urlTraduccion)
      .then(response => response.json())
      .then(data => {
        // Actualizar el valor de la caja de texto con la traducción
        const textoTraducido = data.responseData.translatedText;
        cajaTexto.value = `${textoTraducir}\n\nTraducción:\n${textoTraducido}`;
      })
      .catch(error => {
        console.error('Se produjo un error al obtener los datos de la API de traducción', error);
      });

  })
  .catch(error => {
    console.error('Se produjo un error al obtener los datos de la API de uselessfacts', error);
  });

