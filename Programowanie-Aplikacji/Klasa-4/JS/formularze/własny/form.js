function sprawdz() {
	let nick = document.getElementById("nick").value;
	let haslo = document.getElementById("haslo").value;
	let ghost = document.querySelector("#got");
	let god = document.querySelector("#gow");
	let czas = document.querySelector("#czas");
	let wybCzas = czas.value;

	let nickWz = /^[a-z]{3,}[0-9]{1,}$/;
	let hasloWZ = /^[A-Z]{3,}[a-z]{2,}[0-9]{3,}$/;

	if (nick.match(nickWz)) {
		document.write(`nick: ${nick} <br>`);
	} else if (!nick.match(nickWz) && nick != "") {
		document.write("nick nie jest poprawny <br>");
	} else {
		document.write("podaj nick <br>");
	}
	if (haslo.match(hasloWZ)) {
		document.write(`Poprawne hasło <br>`);
	} else {
		document.write("Brak lub błędne hasło <br>");
	}
	if (ghost.checked) {
		document.write(`wybrana gra to Ghost Of Tsushima <br>`);
	} else if (god.checked) {
		document.write(`wybrana gra to: God Of War <br>`);
	} else {
		document.write(`Wybierz gre! <br>`);
	}
	document.write(`wybrany czas to ${wybCzas} godziny <br>`);
}
