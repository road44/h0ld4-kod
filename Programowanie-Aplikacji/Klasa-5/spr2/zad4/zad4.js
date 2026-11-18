let uczniowie = ['rafał', 'adam', 'wojtek', 'michał', 'kamil', 'mateusz', 'oskar']

let dlugosc = uczniowie.length
let uso = uczniowie.sort().reverse()

document.querySelector('#list').innerHTML = `${uso}`
