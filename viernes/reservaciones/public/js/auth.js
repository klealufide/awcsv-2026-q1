document
    .getElementById("loginForm")
    .addEventListener("submit", function (e) {

        let user = document.getElementById("username").value;
        let pass = document.getElementById("password").value;

        if (user === "" || pass === "") {

            alert("Debe completar todos los campos");

            e.preventDefault();

        }

    });