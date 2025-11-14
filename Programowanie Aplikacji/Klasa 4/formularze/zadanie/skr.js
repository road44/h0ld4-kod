let zgoda = document.querySelector("#zgoda");

let rabBtn = document.querySelector("#rab-btn");
let czysc = document.querySelector("#cl");

console.log(nazwisko);

let rabatWz = /^0\/free\s[0-9]{2}$/i;
let szkolaWz = /^ZSPM$/i;
function sprawdz() {
	let nazwisko = document.querySelector("#nazwisko").value;
	let szkola = document.querySelector("#szkola").value;
	let kodRab = document.querySelector("#kod-rab").value;
	if (zgoda.checked) {
		if (nazwisko != "" && szkola.match(szkolaWz) && kodRab.match(rabatWz)) {
			document.write("Witaj w strefie bezpłatnych szkoleń Akademi Cisco");
		} else {
			document.write("Błąd w danych");
			document.write(`<br> ${nazwisko} oraz ${szkola} oraz ${kodRab}`);
		}
	} else {
		document.write("Musisz wyrazić zgode");
	}
}
