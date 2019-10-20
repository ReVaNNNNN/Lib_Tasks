document.addEventListener("DOMContentLoaded", function () {
    showName();
});


function showName() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("userName").innerHTML =
                this.responseText;
        }
    };

    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;

    xhttp.open("GET", "plik.php?name=" + name + "&surname=" + surname, true);
    xhttp.send();
}

