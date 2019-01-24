
var productsCPR = document.getElementsByClassName('CPR');
var productsDNA = document.getElementsByClassName('DNA');
var productsBio = document.getElementsByClassName('Bio');
var productsCells = document.getElementsByClassName('Cells');
var categoryCount = 0;

function showCPR () {
    for (i=0;i<productsCPR.length;i++){
        productsCPR[i].style.display = "block";
    }
    for (i=0;i<productsDNA.length;i++){
        productsDNA[i].style.display = "none";
    }
    for (i=0;i<productsBio.length;i++){
        productsBio[i].style.display = "none";
    }
    for (i=0;i<productsCells.length;i++){
        productsCells[i].style.display = "none";
    }
}

function showDNA () {
    for (i=0;i<productsCPR.length;i++){
        productsCPR[i].style.display = "none";
    }
    for (i=0;i<productsDNA.length;i++){
        productsDNA[i].style.display = "block";
    }
    for (i=0;i<productsBio.length;i++){
        productsBio[i].style.display = "none";
    }
    for (i=0;i<productsCells.length;i++){
        productsCells[i].style.display = "none";
    }
}

function showBio () {

    for (i=0;i<productsCPR.length;i++){
        productsCPR[i].style.display = "none";
    }
    for (i=0;i<productsDNA.length;i++){
        productsDNA[i].style.display = "none";
    }
    for (i=0;i<productsBio.length;i++){
        productsBio[i].style.display = "block";
    }
    for (i=0;i<productsCells.length;i++){
        productsCells[i].style.display = "none";
    }
}

function showCells () {

    for (i=0;i<productsCPR.length;i++){
        productsCPR[i].style.display = "none";
    }
    for (i=0;i<productsDNA.length;i++){
        productsDNA[i].style.display = "none";
    }
    for (i=0;i<productsBio.length;i++){
        productsBio[i].style.display = "none";
    }
    for (i=0;i<productsCells.length;i++){
        productsCells[i].style.display = "block";
    }
}

var slider = document.getElementsByClassName("sopachem-banner");

function changebg() {
    slider[0].style.display = "none";
}



