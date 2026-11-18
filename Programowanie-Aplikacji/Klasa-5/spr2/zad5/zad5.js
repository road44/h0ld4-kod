const mix = ['zdanie', 0, true, 14, 'JavaScript', 'sprawdzian', 1.7, 47, null, 99]

let polTxt = 0
let polNum = 0
let polInne = 0

mix.forEach(element => {
	const div = document.getElementById('d1')
	let typeText = ''

	if (typeof element === 'string') {
		polTxt++
		typeText = 'typ string'
	} else if (typeof element === 'number') {
		polNum++
		typeText = 'typ numeryczny'
	} else {
		polInne++
		typeText = 'inny typ danych'
	}

	div.innerHTML += `<p>${element} - ${typeText}</p>`

	document.querySelector('#pol').innerHTML = `Typ String: ${polTxt}, Typ Number: ${polNum}, Inny typ danych: ${polInne}`
})
