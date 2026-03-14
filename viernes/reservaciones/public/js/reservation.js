document
    .getElementById("reservationForm")
    .addEventListener("submit", function (e) {

        let name = document.getElementById("name").value;
        let date = document.getElementById("date").value;
        let people = document.getElementById("people").value;
        let comments = document.getElementById("comments").value;

        if (
            name === "" ||
            date === "" ||
            people === "" ||
            comments === ""
        ) {

            alert("Todos los campos son obligatorios");
            e.preventDefault();

        }

    });