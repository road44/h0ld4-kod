// tworze ul liste
const ulList = document.createElement("ul");
const liItem = document.createElement("li");

// dodaje liste do sekcji body

document.body.appendChild(ulList);

// dodaje text do li

liItem.textContent = "to jest podpunkt listy";
ulList.appendChild(liItem);

const div = document.createElement("div");
const p = document.createElement("p");

// p umieszczam w divie

div.appendChild(p);
// dodaje tekst do p
p.textContent = "to jest akapit";
document.body.appendChild(div);

// usuwanie elementów (dzieci/aborcja)
// removeChild - dla p, który jest dzieckiem
// div.removeChild(p);
