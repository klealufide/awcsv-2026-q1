$(function () {
    let titulo = document.getElementById("titulo");
    let subtitulo = document.querySelectorAll(".subtitulo");
    let etiqueta = document.querySelectorAll("li");

    console.log(titulo);
    console.log(subtitulo);
    console.log(etiqueta);

    titulo = $("#titulo");
    subtitulo = $(".subtitulo");
    etiqueta = $("li");
    let descendencia = $("form > input");
    let multiple = $("#titulo, input, .subtitulo");

    console.log(titulo);
    console.log(subtitulo);
    console.log(etiqueta);
    console.log(descendencia);
    console.log(multiple);

    let btnCambiarTexto = $("#cambiarTexto");

    btnCambiarTexto.on("click", function () {
        titulo.text("Nuevo texto");
        subtitulo.html("<h6>Nuevo subtitulo</h6>");

        titulo.css("font-size", "50px");
        subtitulo.css("color", "blue");

        titulo.removeClass("okay");
        titulo.addClass("error");

        let img = $("img");

        img.attr("src", "./img/images.jpg");

        let url = $("a");

        url.attr("href", "https://jquery.com/");
        url.attr("target", "_blank");


    })


    let form = $("#formLogin");

    form.on("submit", function (event) {
        
        let username = $("#username");
        let password = $("#password");
        let rol = $("#rol");

        if (username.val() == "" || password.val() == "" || rol.val() == "") {
            event.preventDefault();

            if (username.val() == "") {
                username.addClass("errorInput");
                username.removeClass("okayInput");
            } else {
                username.removeClass("errorInput");
                username.addClass("okayInput");
            }

            if (password.val() == "") {
                password.addClass("errorInput");
                password.removeClass("okayInput");
            } else {
                password.removeClass("errorInput");
                password.addClass("okayInput");
            }

            if (rol.val() == "") {
                rol.addClass("errorInput");
                rol.removeClass("okayInput");
            } else {
                rol.removeClass("errorInput");
                rol.addClass("okayInput");
            }
        }
    })
})