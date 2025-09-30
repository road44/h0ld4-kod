const one = document.querySelector(".one");
const two = document.querySelector(".two");

const converter = document.querySelector("#converter");
const result = document.querySelector(".result");
const convBtn = document.querySelector(".conv");
const resetBtn = document.querySelector(".reset");
const changeBtn = document.querySelector(".change");
// t(f)=t(c)*1.8+32
// t(c)=(t(f)-32)/1.8

let fahr;
let cels;

// funkcja swap zmienia c ja f lub odwrotnie
// trzbeba sprwadzić co jest w spanie one i na tej podstawie zamienić
