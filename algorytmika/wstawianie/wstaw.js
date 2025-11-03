// Funkcja realizująca sortowanie przez wstawianie
function insertionSort(arr) {
    // Przechodzimy przez tablicę zaczynając od drugiego elementu
    for (let i = 1; i < arr.length; i++) {
        // Zapamiętujemy aktualny element do wstawienia
        let currentElement = arr[i];
        // Indeks poprzedniego elementu
        let j = i - 1;

        // Przesuwamy elementy większe od currentElement o jedną pozycję w prawo
        while (j >= 0 && arr[j] > currentElement) {
            arr[j + 1] = arr[j];
            j--;
        }

        // Wstawiamy element w odpowiednie miejsce
        arr[j + 1] = currentElement;
    }
    return arr;
}

// Przykładowa tablica do posortowania
let array = [-1, 23, -2, 0.9, 0.3];
console.log("Lista:", array);
insertionSort(array);
console.log("Lista posortowana:", array);
