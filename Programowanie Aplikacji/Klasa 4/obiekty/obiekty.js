// składnia obiektu
// const nameObj = {
//     key:value,
//     key:value,
//     key:value,
// }
// każdy obiekt składa sie z pary klucz: wartosc
let pauza = "------------------";
const user = {
	name: "adam",
	age: 25,
};

console.log(user);
console.log(user.name);
//
console.log(pauza);
// pętla for in
for (let klucz in user) {
	console.log(klucz + ":" + user[klucz]);
}
console.log(pauza);

// obiekt w obiekcie

const newUser = {
	name: "adam",
	age: 25,
	car: {
		brand: "audi",
		model: "a3",
		kolor: "czarny",
	},
};

console.log(newUser);
console.log(newUser.car);
console.log(newUser.car.model);
console.log(pauza);
// <adam> jeździ <kolor> samochodem marki <audi>
console.log(
	`${newUser.name} jeździ ${newUser.car.kolor} samochodem marki ${newUser.car.brand}`
);

const myuser = {
	imie: "ewa",
	wiek: 18,
	car: {
		brand: "reno",
		model: "twingo",
		color: "srebrny",
		sound: function () {
			console.log(`brum, brum....`);
		},
	},
};
// odowałenie do metody
myuser.car.sound();
