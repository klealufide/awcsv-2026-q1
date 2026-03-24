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

    let formLogin = $("#formLogin");

    formLogin.on("submit", function (event) {
        event.preventDefault();
        let username = $("#username");
        let password = $("#password");
        let rol = $("#rol");
        let error = 0;
        if (username.val() == "") {
            username.css("border-color", "red");
            error++;
        }
        if (password.val() == "") {
            password.css("border-color", "red");
            error++;
        }

        if (rol.val() == "") {
            rol.css("border-color", "red");
            error++;
        }

        if (error == 0) {
            alert("Envio correctamente!");
        } else {
            this.submit();
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
        $("a").attr("href", "https://api.jquery.com/submit/");
        $("a").attr("target", "_blank")
    });

    let btnDesaparecer = $("#desaparecer");
    let btnAparecer = $("#aparecer");
    let btnAgrandar = $("#agrandar");
    let btnDismunir = $("#disminuir");
    let btnCmbiarColor = $("#cambiarColor");
    let cuadrado = $("#cuadrado");

    let btnCambiarImagen = $("#cambiarImagen");

    btnDesaparecer.on("click", function () {
        cuadrado.fadeOut(1000);
    })

    btnAparecer.on("click", function () {
        cuadrado.fadeIn(1000);
    })

    btnCmbiarColor.on("click", function () {
        cuadrado.toggleClass("rosado");
    })

    btnAgrandar.on("click", function () {
        cuadrado.animate({
            width: '500px',
            height: '500px',
            opacity: 0.5
        }, 1000);
    })

    btnDismunir.on("click", function () {
        cuadrado.animate({
            width: '100px',
            height: '100px',
            opacity: 0.8
        }, 1000);
    })


    btnCambiarImagen.on("click", function () {
        $("img").animate({ opacity: 0.5 }, 500, function () {
            $(this).attr("src", "./img/logo.jpg").animate({ opacity: 1 }, 500)
        });
    })


    let formTarea = $("#formTareas");
    let mensaje = $("#mensaje");

    mensaje.hide();

    formTarea.on("submit", function (event) {
        event.preventDefault();
        let tarea = $("#tarea");
        let listaTareas = $("#listaTareas");

        if (tarea.val() == "") {
            mensaje.show();
            tarea.css("border-color", "red");
        } else {
            mensaje.hide();
            listaTareas.prepend("<li>" + tarea.val() + "</li>")
            tarea.css("border-color", "black");
            tarea.val("")
        }
    })
})