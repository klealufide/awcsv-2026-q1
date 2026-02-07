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
}while (numero < 60);