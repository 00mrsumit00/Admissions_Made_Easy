arr = [1,2,3,4,5,6]

// map
function square(x){
    return x**2
}
let newArr = arr.map(square)    // first method to use map
console.log(newArr);


let newArr2 = arr.map(e => {    // second method to use map
    return e**2
})
console.log(newArr2);


// filter
let fArr = arr.filter(e => { 
    if(e > 4){
        return true
    }
    return false
 });

console.log(fArr);

// reduce
let fac = arr.reduce((e,f) => { 
    return e*f
})
console.log(fac);

let myName = "Avinash"
arrOfName = Array.from(myName); // Array.from() create array of characters of a string
console.log(arrOfName);


