var maxChr = 1240; // limite max fixée
function $(i) {
    return document.getElementById(i)
}

function red(nbrChr) {
    return Math.round(255 * Math.pow(0.977, maxChr - nbrChr))
}

function countChr() {
    var len = $('txa').value.length;
    if (maxChr < len) {
        $('txa').value = $('txa').value.substr(0, maxChr);
        len = maxChr
    }
    $('cnt').innerHTML = '<span style="color:rgb(' + red(len) + ',0,0)">' + (maxChr - len) + ' restant' + (
        1 < (maxChr - len) ? 's' : '');
    if (len < maxChr) $('cnt').className = "";
    else $('cnt').className = "bold";
};
(function () {
    $('txa').onkeyup = countChr;
    countChr();
})();