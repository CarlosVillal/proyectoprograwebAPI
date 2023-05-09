
async function consumirAPIChuckNorris(){
    
    const respuestaApi = await fetch("https://api.chucknorris.io/jokes/random")
    .then(response => response.json())
        .then(data =>{console.log(data);
            //console.log(data.biography.publisher);
            document.getElementById("elParrafo").innerHTML=data.biography.publisher;
            console.log(data.image.url);
            document.getElementById("laImagen").src=data.image.url;
        })
}
consumirAPI();