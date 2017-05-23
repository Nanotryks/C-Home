/**
 * Created by Benjamin on 17/05/2017.
 */
function showUser(str,NonId,fichier)
{
    if (str == "")
    {
        document.getElementById(NonId).innerHTML = "";
        return;
    }

    if (window.XMLHttpRequest) {

        xmlhttp= new XMLHttpRequest();
    } else {

        if (window.ActiveXObject)
            try {
                xmlhttp= new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    return NULL;
                }
            }
    }

    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {

            document.getElementById(NonId).innerHTML = xmlhttp.responseText;

        }
    }

    xmlhttp.open("GET", fichier + "?q=" + str, true);

    xmlhttp.send();


}