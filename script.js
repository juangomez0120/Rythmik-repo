const nameInput = document.querySelector("#name");
const email = document.querySelector("#email");
const empresa = document.querySelector("#empresa");
const message = document.querySelector("#message");
const errorNodes = document.querySelectorAll(".error");
const success = document.querySelector("#success")


function validateForm(){

    clearMessages();

    if(nameInput.value.length < 1){
        errorNodes[0].innerText = "Ingresa tu nombre"
    }

    if(!emailIsValid(email.value)){
        errorNodes[1].innerText = "Dirección de correo invalida"
    }

    if(empresa.value.length < 1){
        errorNodes[2].innerText = "Ingresa el nombre de tu empresa"
    }

    if(message.value.length < 1){
        errorNodes[3].innerText = "Ingresa un mensaje"
    }
}

function clearMessages(){
    for (nodes of errorNodes){
        nodes.innerText = "&nbsp;";
    }
}

function emailIsValid(email){
    let pattern = /\S+@\S+\.\S+/;
    return pattern.test(email);
}


var modal = document.getElementById("myModal")
var botonContexto = document.getElementById("boton-contexto")
var botonBrand = document.getElementById("boton-brand")
var botonEsencia = document.getElementById("boton-esencia")
var botonEstrategia = document.getElementById("boton-estrategia")
var botonExpresion = document.getElementById("boton-expresion")
var textoModal = document.getElementById("modal-text")
var span = document.getElementsByClassName("close")[0]
var tituloMetodologia = document.getElementById("titulo-metodologia")
var subtituloMetodologia = document.getElementById("subtitulo-metodologia")
var pMetodologiaUno = document.getElementById("p-metodologia-1")
var pMetodologiaDos = document.getElementById("p-metodologia-2")

botonContexto.onclick = function(){
    tituloMetodologia.innerText = "BRAND CONTEXT"
    subtituloMetodologia.innerText = "ADAPTA TU MARCA A CADA ESENARIO."
    pMetodologiaUno.innerText = "Análisis de posicionamiento, expansiones regionales, activaciones de marca y protecciones legales."
    pMetodologiaDos.style.display = "none"
}

botonBrand.onclick = function(){
    tituloMetodologia.innerText = "BRAND CENTER"
    subtituloMetodologia.innerText = "GESTIONA TU MARCA COMO UN PROFESIONAL"
    pMetodologiaUno.innerText = "Seguimiento de tu marca, manuales y capacitaciones de manejo de marca, valoración financiera de marca y herramientas de gestión de marca."
    pMetodologiaDos.style.display = "none"
}

botonEsencia.onclick = function(){
    tituloMetodologia.innerText = "BRAND ESSENCE"
    subtituloMetodologia.innerText = "DALE IDENTIDAD A TU MARCA."
    pMetodologiaUno.innerText = "Conceptualización, diferenciación, filosofía de marca y alineación al público meta, desarrollo de la historia de marca, estudios de comportamiento."
    pMetodologiaDos.style.display = "none"
}

botonEstrategia.onclick = function(){
    tituloMetodologia.innerText = "BRAND STRATEGY"
    subtituloMetodologia.innerText = "HAZ QUE TU MARCA SE SIENTA "
    pMetodologiaUno.innerText = "Desarrollo de estrategia en canales de comunicación, estudios de mercado, expandir los alcances en la expresión de tu marca, Estrategia de marca..."
    pMetodologiaDos.style.display = "none"
}

botonExpresion.onclick = function(){
    tituloMetodologia.innerText = "BRAND EXPRESSION"
    subtituloMetodologia.innerText = "HAZ QUE TU MARCA SE VIVA EN CINCO SENTIDOS"
    pMetodologiaUno.innerText = "Expresión visual, verbal, auditiva y física de tu marca. Identidad corporativa, Diseño de logo, Packaging, Diseño web…."
    pMetodologiaDos.style.display = "none"
}

span.onclick = function(){
    modal.style.display = "none"
}

window.onclick = function(event){
    if (event.target == modal){
        modal.style.display = "none";
    }
}