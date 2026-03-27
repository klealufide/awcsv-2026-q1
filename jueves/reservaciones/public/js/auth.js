$(function () {
    let formLogin = $("#formLogin");
    const urlBase = "index.php"

    formLogin.on("submit", function (event) {
        event.preventDefault();
        let username = $("#username");
        let password = $("#password");

        if (username.val() === "" || password.val() === "") {
            alert("Debe completar todos los campos");
        } else {
            $.post(urlBase,
                {
                    username: username.val(),
                    password: password.val(),
                    option: "login"
                },
                function (data, status) {
                    data = JSON.parse(data);
                    if(data.response == "00"){
                        window.location = "index.php?page=reservations";
                    } else {
                        alert(data.message)
                    }
                });

        }
        /*
        fetch(urlBase, {
            method: "POST",
            headers: {
                'Content-Type': "application/json"
            },
            body: JSON.stringify({
                username: username.val(),
                password: password.val(),
                option: 'login'
            })
        })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.log(error))

            */


    })


})
