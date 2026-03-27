
$(function () {
    let formReservation = $("#formReservation");
    const urlBase = "index.php";
    formReservation.on("submit", function (event) {
        event.preventDefault();
        let name = $("#name");
        let date = $("#date");
        let people = $("#people");
        let comments = $("#comments");

        if (name.val() === "" || date.val() === "") {
            alert("Debe completar todos los campos");
        } else {
            $.post(urlBase,
                {
                    name: name.val(),
                    reservation_date: date.val(),
                    people: people.val(),
                    comments: comments.val(),
                    option: "store"
                },
                function (data, status) {
                    data = JSON.parse(data);
                    if (data.response == "00") {
                        alert("Reservacion creada correctamente!");
                        getReservacion();
                    }

                });

        }


    })

    function getReservacion() {
        $.get(urlBase + "?option=reservations",
            function (data, status) {
                data = JSON.parse(data);
                let listaReservaciones = $("#listaReservaciones");
                $("#listaReservaciones").html("");
                data.reservations.forEach(element => {
                    listaReservaciones.append("<tr><td>"+element.name+"</td><td>"+element.reservation_date+"</td><td>"+element.people+"</td><td>"+element.comments+"</td></tr>")
                });
                
            });
    }

    getReservacion();
})
