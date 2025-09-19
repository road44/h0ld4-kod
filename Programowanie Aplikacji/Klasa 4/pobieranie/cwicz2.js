const btn1 = document.querySelector(".btn1");
const btn2 = document.querySelector(".btn2");
const square = document.querySelector(".square");
const p1 = document.querySelector(".p1");
const p2 = document.querySelector(".p2");

//f-c 1 ma zwracac w clg wyraz 'czesc'
const fun1 = () => {
	console.log("czesc");
};

// funckja 2 ma zmienic kolor square na czerwony
const fun2 = () => {
	square.style.backgroundColor = "red";
};
const fun3 = () => {
	square.style.backgroundColor = "blue";
};

// funckja zmieniająca widoczność tekstów w paragrafie
const fun4 = () => {
	
}



// dodanie listenerów do każdej funkcji
btn1.addEventListener("click", fun1);
square.addEventListener("mouseenter", fun2);
square.addEventListener("mouseleave", fun3);
