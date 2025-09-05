// getElementById()- odwołanie do konkretnego id
let test1 = document.getElementById("cos");
console.log(test1);
// getElementsByTagName()- odwołanie do znacznika html (kolekcja html)
let test2 = document.getElementsByTagName("li");
console.log(test2);
// getElementsByClassName()- odwołanie do klasy
let test3 = document.getElementsByClassName("test");
console.log(test3);

// xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
// querySelector()- odwołanie do pierwszego napotkanego elementu
// odwołanie do elementu z id
let test4 = document.querySelector("#cos");
console.log(test4);

// odwołanie do h2

let UlList = document.querySelector("ul");
console.log(UlList);
// querySelectorAll()- odwołanie do wszystkich elementów

let test6 = document.querySelectorAll("li");
console.log(test6);

// żywe kolekcje - dynamiczne dodwanie elementów na stronie z poziomu JS

// tworze nowe li
let newLi = document.createElement("li");
//  + newLi do UlListy
UlList.appendChild(newLi).textContent =
	"ten element został dodany z poziomy skryptu JS ";
