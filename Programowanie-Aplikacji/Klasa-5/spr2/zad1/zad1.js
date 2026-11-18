function imie1() {
	let imie = document.querySelector('#imie').value
	data = new Date()
	let g = data.getHours()
	let m = data.getMinutes()
	let s = data.getSeconds()
	if (g < 10) {
		g = '0' + g
	}
	if (m < 10) {
		m = '0' + m
	}
	if (s < 10) {
		s = '0' + s
	}
	document.querySelector('#skr1').innerHTML = `Cześć ${imie}! Witaj na stronie.<br> Aktualna godzina to ${g}:${m}:${s}`
}
