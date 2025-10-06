document.getElementById('fontSelect').addEventListener('change', function () {
    document.getElementById('example').style.fontFamily = this.value;
});

document.getElementById('boldCheck').addEventListener('change', function () {
    document.getElementById('example').style.fontWeight = this.checked ? 'bold' : 'normal';
});

document.getElementById('underlineCheck').addEventListener('change', updateTextDecoration);
document.getElementById('strikeCheck').addEventListener('change', updateTextDecoration);
document.getElementById('italicCheck').addEventListener('change', updateTextDecoration);

function updateTextDecoration() {
    const underline = document.getElementById('underlineCheck').checked;
    const strike = document.getElementById('strikeCheck').checked;
    const italic = document.getElementById('italicCheck').checked;
    document.getElementById('example').style.fontStyle = italic ? 'italic' : 'normal';
    let decorations = [];
    if (underline) decorations.push('underline');
    if (strike) decorations.push('line-through');
    document.getElementById('example').style.textDecoration = decorations.join(' ') || 'none';
}