/**
 * Created by Benjamin on 24/06/2017.
 */
function verif(chars) {
    // Caractères autorisés
    var regex = new RegExp("[A-Za-zé]", "i");
    var valid;
    for (x = 0; x < chars.value.length; x++) {
        valid = regex.test(chars.value.charAt(x));
        if (valid == false) {
            chars.value = chars.value.substr(0, x) + chars.value.substr(x + 1, chars.value.length - x + 1); x--;
        }
    }
}

function verif2(chars) {
    // Caractères autorisés
    var regex = new RegExp("[0-9]", "i");
    var valid;
    for (x = 0; x < chars.value.length; x++) {
        valid = regex.test(chars.value.charAt(x));
        if (valid == false) {
            chars.value = chars.value.substr(0, x) + chars.value.substr(x + 1, chars.value.length - x + 1); x--;
        }
    }
}

function verif3(chars) {
    // Caractères autorisés
    var regex = new RegExp("[A-Za-z0-9é]", "i");
    var valid;
    for (x = 0; x < chars.value.length; x++) {
        valid = regex.test(chars.value.charAt(x));
        if (valid == false) {
            chars.value = chars.value.substr(0, x) + chars.value.substr(x + 1, chars.value.length - x + 1); x--;
        }
    }
}