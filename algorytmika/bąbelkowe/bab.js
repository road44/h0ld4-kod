function bubbleSort(arr) {
	// Funkcja sortuje tablicę metodą bąbelkową (bubble sort) i zwraca posortowaną tablicę.
	const n = arr.length; // długość tablicy

	for (let i = 0; i < n - 1; i++) {
		// Każda iteracja "i" umieszcza największy spośród nieposortowanych elementów na końcu.
		for (let j = 0; j < n - 1 - i; j++) {
			// Porównujemy sąsiednie elementy i przesuwamy większy w prawo.
			if (arr[j] > arr[j + 1]) {
				// Zamiana miejscami..
				[arr[j], arr[j + 1]] = [arr[j + 1], arr[j]];
			}
		}
	}

	return arr; // zwróć posortowaną tablicę
}

const array = [65, 85, 11, 66, 5.1, -66, -55, 0, 55, 0.1, 0.001, 0.054, 2, 0.2];
console.log("Lista:", array);
console.log("Posortowana lista:", bubbleSort(array));
