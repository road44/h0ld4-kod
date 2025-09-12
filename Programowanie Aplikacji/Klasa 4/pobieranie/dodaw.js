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
const h2 = document.createElement("h2");

// p umieszczam w divie

div.appendChild(p);
div.appendChild(h2);
// div.append("czy to sie wyswietli?");
// dodaje tekst do p
p.textContent = "to jest akapit";
h2.textContent = 'to jest nagłówek'
document.body.appendChild(div);

div.append(p, h2, "teraz tekst powinien byc widoczny");
// usuwanie elementów (dzieci/aborcja)
// removeChild - dla p, który jest dzieckiem
// div.removeChild(p);

// usuwam div z zawartością
// document.body.remove(div);
