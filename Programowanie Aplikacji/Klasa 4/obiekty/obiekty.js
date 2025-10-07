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
