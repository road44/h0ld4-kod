// tworze ul
const ullist = document.createElement("ul");
// dodaje ul do sekcji body

document.body.appendChild(ullist);

for (let i = 1; i <= 10; i++) {
	// tworze li
	const liItem = document.createElement("li");
	// dopisuje nomery do li
	liItem.textContent = i;
	// li jest dzieckiem ul
	ullist.appendChild(liItem);
}

// odwołanie do ostatniego (10-tego) li
const lastLi = ullist.querySelector("li:last-child");
