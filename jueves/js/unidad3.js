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