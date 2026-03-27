$(function () {
    //JavaScript??
    let titulo = document.getElementById("titulo");
    let subtitulo = document.querySelectorAll(".subtitulo");
    console.log(titulo);
    console.log(subtitulo);
    //Jquery??
    titulo = $("#titulo");
    subtitulo = $(".subtitulo");
    etiqueta = $("li");
    descendencia = $("form > input");
    multiples = $("#titulo, h3, a");
    console.log(titulo);
    console.log(subtitulo);
    console.log(etiqueta);
    console.log(descendencia);
    console.log(multiples);

    let butonCambiarTexto = $("#cambiarTexto");

    butonCambiarTexto.on("click", function () {
        titulo.text("Nuevo texto");
        subtitulo.html("<h3>Nuevo subtitulo</h3>");
        subtitulo.css("font-size", "30px");
        multiples.addClass("okay");
        titulo.removeClass("okay");

        let url = $("a");
        url.attr("href", "https://api.jquery.com/click/");
        url.attr("target", "_blank");

        let img = $("img");

        img.attr("src", "./img/images.jpg");
    })

    let formLogin = $("#formLogin");

    formLogin.on("submit", function (event) {

        let username = $("#username");
        let password = $("#password");
        let rol = $("#rol");
        console.log(event)
        if (username.val() == "" || password.val() == "" || rol.val() == "") {

            event.preventDefault();
            if (username.val() == "") {
                username.addClass("error");
                username.removeClass("okay");
            } else {
                username.removeClass("error");
                username.addClass("okay");
            }

            if (password.val() == "") {
                password.addClass("error");
                password.removeClass("okay");
            } else {
                password.removeClass("error");
                password.addClass("okay");
            }

            if (rol.val() == "") {
                rol.addClass("error");
                rol.removeClass("okay");
            } else {
                rol.removeClass("error");
                rol.addClass("okay");
            }
        } else {
            this.submit();
        }
    })


    let desvanecer = $("#desvanecer");
    let mostrar = $("#mostrar");
    let agrandar = $("#agrandar");
    let cambiarColor = $("#cambiarColor");

    let cuadrado = $("#cuadrado");
    cuadrado.toggleClass("rosado");
    desvanecer.on("click", function () {
        cuadrado.fadeOut(1000);
    })

    mostrar.on("click", function () {
        cuadrado.fadeIn(1000);
    })

    cambiarColor.on("click", function () {
        cuadrado.toggleClass("rosado");
    })

    agrandar.on("click", function () {
        cuadrado.animate({
            width: '400px',
            height: '400px',
            opacity: 0.5
        }, 1000);
    })

    let formTareas = $("#formTareas");
    let listaTareas = $("#listaTareas");
    let mensaje = $("#mensaje");
    mensaje.hide();

    formTareas.on("submit", function (event) {
        event.preventDefault();
        let tarea = $("#tarea");

        if (tarea.val() != "") {
            tarea.removeClass("error");
            listaTareas.prepend("<li>" + tarea.val() + "</li>");
            tarea.val("");
            mensaje.hide();
        } else {
            mensaje.show();
            tarea.addClass("error");
        }

    })
})