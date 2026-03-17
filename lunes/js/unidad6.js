$(function () {
    let subtitulo = document.querySelectorAll(".subtitulo");


    let tituloID = $("#titulo");
    console.log(tituloID);
    let subtituloClase = $(".subtitulo");
    console.log(subtituloClase);
    let etiqueta = $("li");
    console.log(etiqueta);
    let descendencia = $("#listaContacto > li");
    console.log(descendencia);
    let multiple = $("h1, ul, .subtitulo");
    console.log(multiple);

    $("#formLogin").on("submit", function (event) {
        event.preventDefault();
        let username = $("#username");
        let password = $("#password");
        let rol = $("#rol");
        let error = 0;
        if (username.val() == "") {
            username.css("border-color","red");
            error++;
        }
        if (password.val() == "") {
            password.css("border-color","red");
            error++;
        }

        if (rol.val() == "") {
            rol.css("border-color","red");
            error++;
        }

        if (error == 0) {
            alert("Envio correctamente!");
        }
    });

    $("#cambiarTexto").on("click", function (event) {
        tituloID.text("Nuevo texto!");
        tituloID.addClass("azul");
        subtituloClase.html("<h4>Nuevo subtitulo</h4>");

        etiqueta.each(function (index, element) {
            element.style.fontSize = "20px";
            //      $(this).addClass("rojo");
        })

        subtituloClase.each(function (index, element) {
            $(this).addClass("morado");
        })

        $("img").attr("src", "./img/logo.jpg");
        $("a").attr("href", "https://api.jquery.com/submit/")
    });


})