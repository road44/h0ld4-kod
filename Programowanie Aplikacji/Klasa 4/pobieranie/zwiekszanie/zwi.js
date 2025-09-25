let sizeUp = document.querySelector(".sizeUp");
let sizeDown = document.querySelector(".sizeDown");
let colorBtn = document.querySelector(".color");
let p = document.querySelector("p");

let fontSize = 30;

// const upper = () => {
// 	if (fontSize >= 90) {
// 		return;
// 	}
// 	p.style.fontSize = fontSize + "px";
// 	fontSize += 5;
// };
const upper = () => {
	if (fontSize >= 90) {
		return;
	}
	p.style.fontSize = fontSize + "px";
	fontSize += 5;
};

const lower = () => {
	if (fontSize <= 12) {
		return;
	}
	fontSize -= 5;
	p.style.fontSize = fontSize + "px";
};

const colorChange = (param) => {
	const r = Math.floor(Math.random() * 255);
	const g = Math.floor(Math.random() * 255);
	const b = Math.floor(Math.random() * 255);
	p.style.color = `rgb(${r},${g},${b})`;
};

sizeUp.addEventListener("click", upper);
sizeDown.addEventListener("click", lower);
colorBtn.addEventListener("click", colorChange);
