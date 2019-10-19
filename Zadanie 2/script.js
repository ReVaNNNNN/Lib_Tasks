document.addEventListener("DOMContentLoaded", function () {
    showName();
});


function showName() {

    // creare new XMLHttpRequest
    var xhttp = new XMLHttpRequest();

    // function execute after correct server response
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            // show user name
            document.getElementById("userName").innerHTML =
                this.responseText;
        }
    };

    // get user name and surname from inputs
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;

    // send request to the server
    xhttp.open("GET", "plik.php?name=" + name + "&surname=" + surname, true);
    xhttp.send();
}

