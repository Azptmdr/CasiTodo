const url = "../JSON/storage.json"
let campo = document.querySelector("#socialcard")
//  
var contador = 0;
let msg = "Solo puedes dar un clic por obra de arte"
function contar() {
    console.log("entra")
    document.getElementById("btnlikes").innerHTML = contador++;
    if (contador>1) {
        contador=1;
        alert(msg)
    }

}
const getData = async () => {

    const resp = await fetch(url);
    console.log(resp)

    const data = await resp.json();
    data.forEach(card => {
        const { nombreO, imagen, coleccion, precio, likes, nombreA } = card;
        campo.innerHTML += ` 
        <div class="card">
        <img src="${imagen}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">${precio}</h5>
              <p>${nombreO}&nbsp;<small class="text-muted">&#8226;&nbsp;${coleccion}</small></p>
            <p class="card-text">${nombreA}</p>
            <table>
                    <tr>
                      <td><button type="button" class="btn btn-outline-ligth-grey btn1"><i class="fa fa-heart"></i></button></td>
                      <td><p class="card-text text-muted">${likes} Likes</p></td>
                    </tr>
                  </table>
        </div>
    </div>
        `




    })
}

window.addEventListener('DOMContentLoaded', getData);