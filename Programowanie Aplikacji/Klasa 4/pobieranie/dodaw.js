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
