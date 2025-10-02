const one = document.querySelector(".one");
const two = document.querySelector(".two");

const converter = document.querySelector("#converter");
const result = document.querySelector(".result");
const convBtn = document.querySelector(".conv");
const resetBtn = document.querySelector(".reset");
const changeBtn = document.querySelector(".change");
// t(c)=(t(f)-32)/1.8

let fahr;
let cels;

// funkcja swap zmienia c ja f lub odwrotnie
// trzbeba sprwadzić co jest w spanie one i na tej podstawie zamienić

const swap = () => {
	if (one.textContent === "°C") {
		one.textContent = "°F";
		two.textContent = "°C";
	} else {
		one.textContent = "°C";
		two.textContent = "°F";
	}
};

// funkcja konwertująca 1 (z c na f)
// t(f)=t(c)*1.8+32
const celToFahr = () => {
	fahr = converter.value * 1.8 + 32;
	result.textContent = `${converter.value}°C to ${fahr}°F`;
};

// dodajemy listenera

changeBtn.addEventListener("click", swap);
