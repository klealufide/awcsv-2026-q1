//Variables Global@
let nombreEstudiante = "Ana Rojas";
let edad = 22;
let altura = 1.65;
let esEstudiante = true;
const edadMayor = 18;
console.log(nombreEstudiante);
nombreEstudiante = "Maria Mora";
console.log(nombreEstudiante); // reasigno valor
//edadMayor = 21; no puedo reasignar a una constante

if (edad >= 18) {
    let nombreEstudiante = "Jose Pablo";//Local
    console.log(nombreEstudiante);
}

console.log(nombreEstudiante);



console.log(nombreEstudiante.replaceAll("a", "@"));
console.log(edad);
console.log(edad.toString());
console.log(esEstudiante);
console.log(esEstudiante.toString());

let clave = "12345";

let mensaje = "";
if (clave.length > 8) {
    mensaje = "Clave segura!";
} else {
    mensaje = "Clave es insegura!";
}
console.log(mensaje);

//condicional ternaria

let mensajeTernaria = (clave.length > 8) ? "Clave segura!" : "Clave es insegura!";
console.log(mensajeTernaria);

let semaforo = "verde";

if (semaforo == "verde") {
    console.log("Siga!");
} else if (semaforo == "amarillo") {
    console.log("Con cuidado!");
} else if (semaforo == "rojo") {
    console.log("detengase!");
} else {
    console.log("Color no definido");
}

switch (semaforo) {
    case 'verde':
        console.log("Siga!");
        break;
    case 'amarillo':
        console.log("Con cuidado!");
        break;
    case 'rojo':
        console.log("detengase!");
        break;
    default:
        console.log("Color no definido");
        break;
}

for (let i = 0; i < 10; i++) {
    console.log(i);
}

let frutas = ["pera", "manzana", "melon"];

frutas.push("papaya");
console.log(frutas);
frutas.pop();
console.log(frutas);
console.log(frutas[2]);

let persona = {
    nombre: "Ana Mora",
    edad: 22,
    esEstudiante: true
};

console.log(persona.nombre);

for (let i = 0; i < frutas.length; i++) {
    console.log(frutas[i]);
}


for (let i in frutas) {
    console.log(frutas[i]);
}
let numero = 100;
//primero valida solo ENTRE CUANDO CONDICIONAL
while (numero < 60) {
    numero++;
    console.log("WHILE", numero);
}

// do primero hace y luego la condicion

do {
    numero++;
    console.log("DOWHILE", numero);
} while (numero < 60);


function restar(num1, num2) {
    return num1 - num2;
}

let resultado = restar(10, 3);

console.log(resultado);

function saludar() {
    console.log("Hola a todos !!");
}

function SaludarNombre(nombre) {
    console.log("Hola! ", nombre);
}

saludar();
SaludarNombre("Karol");


function calcularAguinaldo(listaSalarios) {
    let total = 0;
    for (let i = 0; i < listaSalarios.length; i++) {
        total += listaSalarios[i];
    }
    return total / 12;
}


let listaEmpleados = [
    {
        nombre: "Karol",
        salarios: [100, 100, 100, 100, 100, 100, 100, 300, 300, 300, 300, 300]
    },
    {
        nombre: "Fabian",
        salarios: [110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110]
    }
];

for (let i = 0; i < listaEmpleados.length; i++) {
    let aguinaldo = calcularAguinaldo(listaEmpleados[i].salarios);
    console.log("El empleado " + listaEmpleados[i].nombre + ", tiene un aguinaldo de: " + aguinaldo.toFixed(2));
}

// funcion flecha

let calcularSuma = (num1, num2) => num1 + num2;

console.log(calcularSuma(6, 7));



document.addEventListener("DOMContentLoaded", function () {
    //Manipulacion que el DOM? agregar nodos, modificar nodos o eliminar nodos

    // modificar un nodo?
    let subtituloByID = document.getElementById("subtitulo");
    console.log(subtituloByID);
    let subtitulo = document.querySelector("#subtitulo");//selecciona el primero que se encuentre id-># class -> . o por etiqueta donde solo pongo la etiqueta
    console.log(subtitulo);
    let grupo = document.querySelector(".grupo1");
    console.log(grupo);
    let grupo1All = document.querySelectorAll(".grupo1");
    console.log(grupo1All);

    subtitulo.innerText = "Nuevo subtitulo";
    subtitulo.style.color = "purple";

    for (let i = 0; i < grupo1All.length; i++) {
        grupo1All[i].style.color = "red";
    }

    let listaTareas = document.getElementById("listaTareas");
    listaTareas.innerHTML = "<li>Nuevo Li</li>";

    // crear nuevo nodos 

    let nuevaTarea = document.createElement("li"); // la etiqueta que quiero crear
    nuevaTarea.innerText = "Nuevo elemento desde el create";
    listaTareas.appendChild(nuevaTarea);


    let nuevaImagen = document.createElement("img"); // la etiqueta que quiero crear
    nuevaImagen.src = "./img/logo.jpg";
    document.body.appendChild(nuevaImagen);
    // eliminar nodos
    nuevaImagen.remove();
    let mensaje = document.getElementById("mensaje");
    mensaje.style.display = "none";

    let formularioTarea = document.querySelector("#formularioTarea");

    formularioTarea.addEventListener("submit", function (event) {
        event.preventDefault();
        // validar porjavascript
        let inputTarea = document.getElementById("nuevaTarea");


        if (inputTarea.value == "") {
            inputTarea.style.borderColor = "red";
            mensaje.style.display = "block";
        } else {
            mensaje.style.display = "none";
            inputTarea.style.borderColor = "black";
            let nuevaTarea = document.createElement("li");
            nuevaTarea.innerText = inputTarea.value;
            listaTareas.appendChild(nuevaTarea);
            inputTarea.value = "";
            formularioTarea.submit();

        }
    });
});