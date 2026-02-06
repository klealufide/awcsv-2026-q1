let nombreEstudiante = "Maria Mora";
console.log(nombreEstudiante);
nombreEstudiante = "Maria Mora Mora"; //reasignando valor
console.log(nombreEstudiante);

let edad = 22; // global
console.log("Global",edad);

if (edad == 22) {
    let edad = 25; // local
    console.log("Local",edad);
}

console.log("Global",edad);
//Hoisting
nombre = "Karol Leal";
console.log(nombre);
var nombre;


console.log(nombreEstudiante.length);
console.log(nombreEstudiante.replaceAll("a","@"));

console.log(edad.toString());
console.log(edad.toFixed(5));
