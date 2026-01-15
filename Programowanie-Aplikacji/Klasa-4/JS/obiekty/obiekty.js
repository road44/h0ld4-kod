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
console.log(pauza);
const person = {
	nick: "bolo",
	age: 19,
};
person.country = "poland";
person["fav-color"] = "blue";
console.log(person);

console.log(pauza);
const dogName = "dolar";
const dogAge = 5;

const dog = {
	name: dogName,
	age: dogAge,
};

console.log(dog);
console.log(pauza);

// użycie this
const she = {
	info: "u mnie działa",
	showinfo: function () {
		console.log(this.info);
	},
};

she.showinfo();
console.log(pauza);
const szkola = {
	nazwa: "zspm",
	typ: "technikum nr 18",
	klasa: {
		profil: "technik informatyk",
		poziom: "4c",
		showinfo: function () {
			console.log(this.profil + " " + this.poziom);
		},
	},
};

szkola.klasa.showinfo();
szkola.miejscowosc = "katowice";
szkola["dyrektor_szkoly"] = "karol juarszczyk";
console.log(szkola);
console.log(pauza);

// jestem uczniem <typ> chodze do klasy <poziom> w miejscowosci <miejscowosc>.
console.log(
	`jestem uczniem ${szkola.typ} chodze do klasy ${szkola.klasa.poziom} w miejscowosci ${szkola.miejscowosc}`
);
