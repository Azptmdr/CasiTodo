const url = "http://localhost:3000/"
let campo = document.querySelector("#socialcard")
//  
var contador = 0;
let msg = "Solo puedes dar un clic por obra de arte"
function contar() {
    console.log("entra")
    document.getElementById("btnlikes").innerHTML = contador++;
    if (contador > 1) {
        contador = 1;
        alert(msg)
    }

}
const getData = async () => {

    const resp = await fetch(url);
    console.log(resp)

    console.log("kevin es tremendo gay")

    const data = await resp.json();
    data.forEach(card => {
        alert("ENTROOOOO")
        const { nombre, foto, coleccion, precio, likes, nickname } = card;
        campo.innerHTML += ` 
        <div class="card">
        <img src="${foto}" alt="">
        <p>${nombre}</p>
        <p style="color:blue; font-weigth:bold">${nickname}</p>
        <p>${precio}</p>
        <p>${"Colección: " + coleccion}</p>
        <button id="btnlikes" class="btn btn-primary" onclick="contar()">${likes} Like </button>
        `

    })
}

window.addEventListener('DOMContentLoaded', getData);