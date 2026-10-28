// data = new Date()
// let dz = data.getDate()
// let m = data.getMonth() + 1
// let r = data.getFullYear()
// // let imie = prompt('Jak masz na imię')
// // document.write(`witaj ${imie}! <br> Dziś jest ${data.toLocaleDateString()}<br>`)
// document.write(`dziś jest ${r}.${m}.${dz}`)

let liczba1 = parseInt(prompt('Podaj pierwszą liczbe'))
let liczba2 = parseInt(prompt('Podaj drugą liczbe'))

let suma = liczba1 + liczba2

document.write(`suma liczb wynosi ${suma}`)

let iloraz = liczba1 / liczba2

if (liczba2 == 0) {
	document.write(`<br> <br> nie można dzielić przez 0`)
} else {
	document.write(`<br><br>Wynik dzielenia to: ${iloraz}`)
}
