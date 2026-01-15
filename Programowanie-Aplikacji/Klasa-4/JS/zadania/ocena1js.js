let pauza = "----------------------";
let divAll = document.querySelectorAll("div");
let divAll2 = document.getElementsByTagName("div");
console.log("test1", divAll);
console.log("test2", divAll2);
console.log(pauza);

let liId = document.querySelectorAll("#lista");
console.log(liId);
console.log(pauza);
let spanDiv = document.querySelectorAll("div span");
console.log(spanDiv);
console.log(pauza);
let klasa1 = document.getElementsByClassName("lista2");
console.log(klasa1);
let klasa2 = document.querySelectorAll(".lista2");
console.log(klasa2);
console.log(pauza);
let liUl = document.querySelectorAll("ul li");
console.log(liUl);
console.log(pauza);
let zdjecie = document.getElementsByTagName("img");
console.log(zdjecie);
console.log(pauza);

let pustyDiv = document.getElementById("pusty");
let spandodaj = document.createElement("span");
spandodaj.textContent = "to juz koniec zadania";

pustyDiv.appendChild(spandodaj)