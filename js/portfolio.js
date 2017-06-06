
function kauppakassi() {

    if (document.getElementById('kauppakassi-teksti').style.display === 'block') {
        document.getElementById('kauppakassi-teksti').style.display = 'none';
        document.getElementById("nappi").innerHTML = "Lue lisää";
    } else {
        document.getElementById("nappi").innerHTML = "Piilota";
        document.getElementById('kauppakassi-teksti').style.display = 'block';
    }
}

function foorumi() {

    if (document.getElementById('foorumi-teksti').style.display === 'block') {
        document.getElementById('foorumi-teksti').style.display = 'none';
        document.getElementById("foorumi-nappi").innerHTML = "Lue lisää";
    } else {
        document.getElementById("foorumi-nappi").innerHTML = "Piilota";
        document.getElementById('foorumi-teksti').style.display = 'block';
    }
}
