function liczby() {
	const l1 = document.getElementById('l1').value
	const l2 = document.getElementById('l2').value

	const wynik = document.getElementById('wynik')

	let start
	let koniec

	if (l1 < l2) {
		start = l1
		koniec = l2
	} else {
		start = l2
		koniec = l1
	}

	for (i = start; i <= koniec; i++) {
		wynik.innerHTML += i + ' '
	}
}
