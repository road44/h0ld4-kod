const btn1 = document.querySelector(".btn1");
const btn2 = document.querySelector(".btn2");
const btn3 = document.querySelector(".btn3");
const allbtn = document.querySelector(".btn");
// kliknięcie

const moja1 = () => {
	console.log("btn1 klikniety");
};
// najechanie
const moja2 = () => {
	console.log("najechano na btn2");
};
// podwójne kliknięcie
const moja3 = () => {
	console.log("🤠");
};

// funckja smile przechowa 3 buttony
// const smile = () => {
// 	console.log("😶‍🌫️");
// };

// dodaje listenera

btn1.addEventListener("click", moja1);
btn2.addEventListener("mouseenter", moja2);
btn3.addEventListener("dblclick", moja3);
// allbtn.forEach((btn) => btn.addEventListener("click", smile));
// allbtn.array.forEach((btn) => {
// 	btn.addEventListener("click", smile);
// });
