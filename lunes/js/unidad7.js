$(function () {

    let urlBase = "https://pokeapi.co/api/v2/";

    let formPokemon = $("#formPokemon");

    formPokemon.on("submit", function (event) {
        event.preventDefault();
        let pokemon = $("#pokemon");
        let endpoint = "pokemon/";
        let infoPokemon = $("#infoPokemon");
        if (pokemon.val() != "") {
            fetch(urlBase + endpoint + pokemon.val())
                .then(response => response.json())
                .then(data => {

                    //infoPokemon.html("<h3>" + data.name + "</h3><img src='" + data.sprites.back_shiny_female + "'>");
                    let img = "";
                    for (let element in data.sprites) {
                        if (data.sprites[element] != null) {
                            img += "<img src='" + data.sprites[element] + "'>";
                        }

                    }
                    infoPokemon.html(img)
                    pokemon.val("")
                })
                .catch(error => console.log(error))
        } else {
            alert("Pokemon campo obligatorio!")
        }

    })

});