$(function () {

    let formPokemon = $("#formPokemon");
    const urlPokemon = "https://pokeapi.co/api/v2/pokemon/";
    let infoPokemon = $("#infoPokemon");
    console.log("Tess")
    formPokemon.on("submit", function (event) {
        event.preventDefault();
        let pokemon = $("#pokemon");

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

            $.get(urlPokemon + pokemon.val(), function (data) {
                infoPokemon.html("<h3>" + data.name + "</h3><img src='" + data.sprites.front_default + "'>");
                pokemon.val("");
            });
        }
    })
});