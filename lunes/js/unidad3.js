console.log("Bienvenidos Unidad 3");
var nombreEstudiante = "Maria Rojas";
let nombreProfesor = "Karol Leal";
const mayorEdad = 18;
let esProfesor = true;
let estudiante = {
    nombre: "Maria Rojas",
    edad: 22,
    esEstudiante: true
};

console.log(nombreEstudiante);
console.log(nombreProfesor);
console.log(mayorEdad);
console.log(esProfesor);
console.log(estudiante);

console.log(nombreProfesor.concat(" Rojas"));
console.log(nombreProfesor.length);
console.log(mayorEdad.toFixed(4));
console.log(mayorEdad.toLocaleString());
console.log(estudiante.nombre);

let total = 0; // nace fuera bloque {} Ambito Global

function sumar(a, b) {
    //let total =  a+b;// por que esta inicilizada con let, y esta dentro del bloque
    total = a + b;// no inicializo con let,y aunque este en el bloque como no esta inicializada usa la global
    //console.log("Local", total);
    console.log("Global dentro de la funcion", total);
    return total;
}

sumar(6, 6);
console.log("Global", total);

let resultado = 10 + 30;
console.log(resultado);

if (mayorEdad > 5) {
    resultado = 60 + 30;
    console.log(resultado);
}

console.log(resultado);


if (estudiante.edad > mayorEdad) {
    console.log(estudiante.nombre, " es mayor de edad");
} else {
    console.log(estudiante.nombre, " es menor de edad");
}

let saludo = "";
let hora = 8;
if (hora < 12) {
    saludo = "Buenos dias";
} else {
    saludo = "Buenos tardes noches";
}

console.log(saludo);

//mas simple
// mas corta
// mas optizado

//hora = 15;
let saludo2 = (hora < 12) ? "Buenos dias" : "Buenos tardes noches";
console.log(saludo2);

let color = "morado";

switch (color) {
    case 'verde':
        console.log("Siga!")
        break;
    case 'amarillo':
        console.log("precaucion!")
        break;
    case 'rojo':
        console.log("Detengase!")
        break;
    default:
        console.log("El color no esta disponible");
        break;
}

for (let i = 0; i < 10; i++) {
    console.log(i);
}

let frutas = ["manzana", "pera", "melon"];


for(let posicion in frutas){
    console.log(frutas[posicion]);
}

console.log(frutas[2]);

// do.. while ? primero hago y luego cuestiono
let numero = 20;
do {
    numero++;
    console.log("DOWHILE",numero);
}while(numero < 30);

while(numero < 40){
     numero++;
    console.log("wHILE",numero);   
}