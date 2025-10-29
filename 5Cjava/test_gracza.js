document.addEventListener("DOMContentLoaded", () => {

   const pytania = document.querySelectorAll(".pytanie");
   const odpowiedzi = document.querySelectorAll(".odpowiedz");
   const linkiOdp = document.querySelectorAll(".Link");

   pytania.forEach((pyt, i) => {

       let klik = 0;

       const podpowiedzSpan = document.createElement("span");
       podpowiedzSpan.classList.add("podpowiedz");
       podpowiedzSpan.style.marginLeft = "10px";
       pyt.insertAdjacentElement("afterend", podpowiedzSpan);

       pyt.addEventListener("click", () => {
           klik++;
           const odp = pyt.dataset.odp || "";
           const elOdp = odpowiedzi[i];
           const len = odp.length;

           if (klik === 1) {
               
               podpowiedzSpan.textContent = "*".repeat(Math.max(0, len));
           } else if (klik === 2) {
               
               const first = len > 0 ? odp[0] : "";
               podpowiedzSpan.textContent = first + "*".repeat(Math.max(0, len - 1));
           } else if (klik === 3) {
              
               if (len === 0) {
                   podpowiedzSpan.textContent = "";
               } else if (len === 1) {
                 
                   podpowiedzSpan.textContent = odp;
               } else if (len === 2) {
                  
                   podpowiedzSpan.textContent = odp[0] + odp[1];
               } else {
                   const first = odp[0];
                   const last = odp[len - 1];
                   podpowiedzSpan.textContent = first + "*".repeat(Math.max(0, len - 2)) + last;
               }
           } else {
              
               podpowiedzSpan.textContent = odp;
               pyt.style.display = "none";
               if (linkiOdp[i]) linkiOdp[i].style.display = "none";
               if (elOdp) elOdp.style.display = "inline";
              
               klik = 4;
           }
       });
   });

   linkiOdp.forEach((link, i) => {
       link.addEventListener("click", () => {
           const odp = prompt("Podaj odpowiedz:");
           const poprawna = pytania[i].dataset.odp;
           if (odp === poprawna) {
               alert("To jest poprawna odpowiedz!");
               pytania[i].style.display = "none";
               link.style.display = "none";
               odpowiedzi[i].style.display = "inline";
           }
       });
   });
});