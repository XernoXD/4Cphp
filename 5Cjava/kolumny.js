const header = document.querySelector("header");
header.style.backgroundColor = "yellow";
const h1 = document.querySelector("h1");
h1.style.fontFamily = "Arial Black";
h1.textContent = "preambuła";
const section = document.querySelectorAll("section");
section.forEach(sec => {
    sec.style.border = "2px solid brown";
});
const mainColumnH1 = document.querySelector('section.main_column h1');
console.log(mainColumnH1);
mainColumnH1.textContent = 'Specjalność szefa';

const mainColumn = document.querySelector('.main_column');
const newParagraph = document.createElement('p');
newParagraph.textContent = 'Kebab na frytkach -_-';
mainColumn.appendChild(newParagraph);

const footer = document.querySelector('footer');
const newDiv = document.createElement('div');
newDiv.style.backgroundColor = 'pink';

const copyParagraph = document.createElement('p');
copyParagraph.innerHTML = '&copy;';
copyParagraph.style.textAlign = 'center';

newDiv.appendChild(copyParagraph);
footer.appendChild(newDiv);

const h1s = document.querySelectorAll('h1');
h1s.forEach(h1 => {
  if (h1.textContent.includes('Kolumna III')) {
    h1.remove();
  }
});

const pHtml = document.createElement('p');
pHtml.innerHTML = '<i>Pochylony tekst</i>';

const pText = document.createElement('p');
pText.innerText = '<i>Pochylony tekst</i>';

document.querySelector('header').appendChild(pHtml);
document.querySelector('header').appendChild(pText);

const newSection = document.createElement('section');
newSection.textContent = 'Zderzak';
newSection.style.border = '2px dotted blue';
newSection.style.padding = '10px 20px';

document.body.appendChild(newSection);
