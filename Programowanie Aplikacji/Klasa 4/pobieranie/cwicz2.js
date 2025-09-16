const btn1 = document.querySelector(".btn1");
const btn2 = document.querySelector(".btn2");
const square = document.querySelector(".square");
const p1 = document.querySelector(".p1");
const p2 = document.querySelector(".p2");

//f-c 1 ma zwracac w clg wyraz 'czesc'
const fun1 = () => {
	console.log("czesc");
};

// dodanie listenerów do każdej funkcji

btn1.addEventListener("click", fun1);
