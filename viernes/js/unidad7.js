$(function () {

    let formPersonaje = $("#formPersonaje");

    const urlBase = "https://api.disneyapi.dev";

    let resultado = $("#resultado");

    formPersonaje.on("submit", function (event) {
        event.preventDefault();
        const endpoint = "/character?name=";
        let personaje = $("#personaje");
        if (personaje.val() != "") {
            personaje.removeClass("errorInput");
            /*
            fetch(urlBase + endpoint + personaje.val())
                .then(response => response.json())
                .then(result => {
                    let agrupamientoResultado = "";
                    result.data.forEach(element => {
                        agrupamientoResultado += "<div><h3>" + element.name + "</h3><img src='" + element.imageUrl + "'>";
                    });
                    resultado.html(agrupamientoResultado);
                    personaje.val("");
                })
                .catch(error => console.log(error))

                */

            $.get(urlBase + endpoint + personaje.val(), function (result) {
                let agrupamientoResultado = "";
                result.data.forEach(element => {
                    agrupamientoResultado += "<div><h3>" + element.name + "</h3><img src='" + element.imageUrl + "'>";
                });
                resultado.html(agrupamientoResultado);
                personaje.val("");
            });
        } else {
            personaje.addClass("errorInput");
        }


    })
})