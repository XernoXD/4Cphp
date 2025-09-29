document.addEventListener('keydown', function (event) {
    document.getElementById('para').innerText = event.key;
    console.log("Wciśnięty klawisz: " + event.key, event.code);
});