const one = document.querySelector(".one");
const two = document.querySelector(".two");

const converter = document.querySelector("#converter");
const result = document.querySelector(".result");
const convBtn = document.querySelector(".conv");
const resetBtn = document.querySelector(".reset");
const changeBtn = document.querySelector(".change");

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
	result.textContent = `${converter.value}°C to ${fahr.toFixed(1)}°F`;
	converter.value = "";
};

// t(c)=(t(f)-32)/1.8
const FahrtoCel = () => {
	cels = (converter.value - 32) / 1.8;
	result.textContent = `${converter.value}°F to ${cels.toFixed(1)}°C`;
	converter.value = "";
};

// aby móc obsługiwać obie funkcje jednym przyciskiem dodam nową

const conversion = () => {
	if (converter.value != "") {
		if (one.textContent === "°C") {
			celToFahr();
		} else {
			FahrtoCel();
		}
	} else {
		result.textContent = `Wpisz jakąś wartość`;
	}
};

// funkcja reset
const resetAll = () => {
	result.textContent = "";
	converter.value = "";
};

// dodajemy listenera

changeBtn.addEventListener("click", swap);
convBtn.addEventListener("click", conversion);
resetBtn.addEventListener("click", resetAll);
