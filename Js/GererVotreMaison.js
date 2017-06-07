/**
 * Created by Benjamin on 07/06/2017.
 */
function showUser(str) {
    if (str == "") {
        document.getElementById("Piece").innerHTML = "";
        return;
    }

    if (window.XMLHttpRequest) {

        xmlhttp = new XMLHttpRequest();
    } else {

        if (window.ActiveXObject)
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    return NULL;
                }
            }
    }

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            document.getElementById("Piece").innerHTML = xmlhttp.responseText;

        }
    }

    xmlhttp.open("GET", "../Controleur/Piece.php?q=" + str, true);

    xmlhttp.send();


}

function showUser2(str) {
    if (str == "") {
        document.getElementById("Capteur").innerHTML = "";
        return;
    }

    if (window.XMLHttpRequest) {

        xmlhttp = new XMLHttpRequest();
    } else {

        if (window.ActiveXObject)
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    return NULL;
                }
            }
    }

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            document.getElementById("Capteur").innerHTML = xmlhttp.responseText;

        }
    }

    xmlhttp.open("GET", "../Controleur/Capteur.php?q=" + str, true);

    xmlhttp.send();


}