function pokazWyniki() {


      const input = prompt("Podaj liczbę:");
      const x = parseFloat(input);

      if (isNaN(x)) {
        document.getElementById("liczba").textContent = "To nie jest liczba.";
        return;
      }


      
      document.getElementById("liczba").textContent = x;
      document.getElementById("ceil").textContent = Math.ceil(x);
      document.getElementById("floor").textContent = Math.floor(x);
      document.getElementById("sqrt").textContent = Math.sqrt(x);
      document.getElementById("pow").textContent = Math.pow(x, 2);
      document.getElementById("max").textContent = Math.max(x, 10);
      document.getElementById("min").textContent = Math.min(x, 10);
      document.getElementById("abs").textContent = Math.abs(x);
      document.getElementById("round").textContent = Math.round(x);
    }