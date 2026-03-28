$(function () {

    let formPokemon = $("#formPokemon");
    const urlPokemon = "https://pokeapi.co/";
    let infoPokemon = $("#infoPokemon");
    console.log("Tess")
    formPokemon.on("submit", function (event) {
        event.preventDefault();
        let pokemon = $("#pokemon");
        let endpoint = "api/v2/pokemon/";
        if (pokemon.val() != "") {


            /*
            fetch(urlPokemon + pokemon.val())
                .then(response => response.json())
                .then(data => {
                    infoPokemon.html("<h3>"+data.name+"</h3><img src='"+data.sprites.front_default+"'>");
                                pokemon.val("");
                })
                .catch(error => console.log(error))

                */

            $.get(urlPokemon + endpoint + pokemon.val(), function (data) {
                infoPokemon.html("<h3>" + data.name + "</h3><img src='" + data.sprites.front_default + "'>");
                pokemon.val("");
            });
        }
    })
});