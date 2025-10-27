function narysuj(){


    const szer = 
    parseFloat(document.getElementById("szerokosc").value);
    const wys =
    parseFloat(document.getElementById("wysokosc").value);
    const kolor =
    document.getElementById("kolor").value;



    if(isNaN(szer) || isNaN(wys) || szer <= 0 || wys <= 0){
        alert("Podaj poprawne wymiary");
        return;
    }


    const plotno = document.getElementById("plotno");
    console.log(plotno);


    plotno.style.width = szer + "cm";
    plotno.style.height = wys + "cm";
    plotno.style.backgroundColor = kolor;


    
    const pole = szer * wys;
    document.getElementById("pole").textContent = "Pole: " + pole;
    const obwod = 2 * szer + 2 * wys;
    document.getElementById("obwod").textContent = "Obwod: " + obwod;
};