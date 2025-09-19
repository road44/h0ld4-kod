const btn1 = document.querySelector(".btn1");
const btn2 = document.querySelector(".btn2");
const btn3 = document.querySelector(".btn3");

// funckja 1

const moja1 = () => {
	console.log("btn1 klikniety");
};

const moja2 = () => {
	console.log("najechano na btn2");
};
// dodaje listenera

btn1.addEventListener("click", moja1);
btn2.addEventListener("mouseenter", moja2);
