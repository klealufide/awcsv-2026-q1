let nombreEstudiante = "Maria Mora";
console.log(nombreEstudiante);
nombreEstudiante = "Maria Mora Mora"; //reasignando valor
console.log(nombreEstudiante);

let edad = 22; // global
console.log("Global", edad);

if (edad == 22) {
    let edad = 25; // local
    console.log("Local", edad);
}

console.log("Global", edad);
//Hoisting
nombre = "Karol Leal";
console.log(nombre);
var nombre;


console.log(nombreEstudiante.length);
console.log(nombreEstudiante.replaceAll("a", "@"));

console.log(edad.toString());
console.log(edad.toFixed(5));

const edadMayor = 18;

let saludo = "";

if (edad >= edadMayor) {
    saludo = "Hola adulto!";
} else {
    saludo = "Hola menor de edad";
}

console.log(saludo);

//condicional terciaria

let mensaje = (edad >= edadMayor) ? "Hola adulto!" : "Hola menor de edad";
console.log(mensaje);

edad = 69;
if (edad >= 65) {
    console.log("Adulto mayor!");
} else if (edad >= edadMayor) {
    console.log("Adulto!");
} else {
    console.log("menor de edad");
}
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


let color = "amarillo";

switch (color) {
    case 'verde':
        console.log("Siga!");
        break;
    case 'amarillo':
        console.log("Con cuidado!");
        break;
    case 'rojo':
        console.log("Detengase!");
        break;
    default:
        console.log("color no definido");
        break;
}
//objeto
let estudiante = {
    nombre: "Maria Mora",
    edad: 22,
    esEstudiante: true
};

console.log(estudiante);
console.log(estudiante.nombre);
console.log(estudiante.edad);
// arreglo -> array
let listaFrutas = ["pera", "manzana", "melon", "sandia"];
console.log(listaFrutas);
listaFrutas.push("papaya");
console.log(listaFrutas);
listaFrutas.pop();
console.log(listaFrutas);
console.log(listaFrutas[2]);
// recorrer arreglos
for (let posicion in listaFrutas) {
    console.log(listaFrutas[posicion]);
}



for (let i = -1; i >= -10; i--) {
    console.log(i);
}

for (let i = listaFrutas.length - 1; i >= 0; i--) {
    console.log(listaFrutas[i]);
}

let numero = 50;


do {
    numero++;
    console.log("DOWHILE", numero);
} while (numero < 50);

while (numero < 55) {
    numero++;
    console.log("WHILE", numero);
}


// funciones simple 
function duplicar(numero) {
    return numero * 2;
}


function saludar() {
    console.log("Bienvenido!");
}


function saludarNombre(nombre) {
    console.log("Hola!,", nombre);
}

let resultado = duplicar(5);
console.log(resultado);

saludar();

saludarNombre("Karol");


// funcion flecha // anonima

let sumar = (numero1, numero2) => {
    return numero1 + numero2;
};

console.log(sumar(5, 6));


// quiero saber el aguinaldo de un listado de empleados;
function aguinaldo(salarios) {
    let total = 0;
    for (let i = 0; i < salarios.length; i++) {
        total += salarios[i];
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
]

for (let i in listaEmpleados) {
    console.log("Nombre: ", listaEmpleados[i].nombre, ", aguinaldo: ", aguinaldo(listaEmpleados[i].salarios).toFixed(2))
}



document.addEventListener("DOMContentLoaded", function () {

    // Seleccion con Javacript
    let subtitulo = document.getElementById("subtitulo");
    console.log(subtitulo);
    let subtitulo2 = document.querySelector("#subtitulo");
    console.log(subtitulo2);

    let grupo1Class = document.querySelectorAll(".grupo1");
    console.log(grupo1Class);

    let todosLosP = document.querySelectorAll("p");
    console.log(todosLosP);


    for (let i = 0; i < todosLosP.length; i++) {
        todosLosP[i].style.display = "none";
    }
    //texto
    subtitulo.innerText = "Nuevo subtitulo";
    subtitulo.style.color = "blue";
    //html

    let listaTareas = document.querySelector("#listaTareas");
    listaTareas.innerHTML = "<li>Nueva Tarea</li>";

    // crear nuevos elementos
    let nuevaTareaLi = document.createElement("li");
    nuevaTareaLi.innerText = "Nueva tarea desde el create";
    listaTareas.appendChild(nuevaTareaLi);

    let nuevaImg = document.createElement("img");
    nuevaImg.src = "./img/logo.jpg";

    document.body.appendChild(nuevaImg);

    nuevaImg.remove();

    let formularioTarea = document.querySelector("#formularioTarea");
    let mensaje = this.documentElement.querySelector("#mensaje");
    mensaje.style.display = "none";
    formularioTarea.addEventListener("submit", function (event) {
        event.preventDefault();
        let nuevaTareaInput = document.getElementById("nuevaTarea");
        if (nuevaTareaInput.value == "") {
            nuevaTareaInput.style.borderColor = "red";
            mensaje.style.display = "block";
        } else {
            nuevaTareaInput.style.borderColor = "black";
            mensaje.style.display = "none";
            let nuevaTareaLi = document.createElement("li");
            nuevaTareaLi.innerText = nuevaTareaInput.value;
            listaTareas.appendChild(nuevaTareaLi);
            nuevaTareaInput.value = "";
            //formularioTarea.submit();
        }
    })


});
