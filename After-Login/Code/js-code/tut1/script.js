console.log("Hello, world!")

var a = 7               // var represents global scope of variable
var b = 8

console.log(a + b)

let p = 7               // let represents local scope of variable
let q = "Avinash"
let r = null            // type of null is by default 'object'
let s = true
let t  
let u = 5.3

console.log(p, q, r, s, t, u)
console.log(typeof p, typeof q, typeof r, typeof s, typeof t, typeof u)

let o = {               // o is a oject, means collection of data
    name: "Avinash",
    age: 21,
    "roll no":23795,
    "student id":3030256
}

console.log(o)
console.log(typeof o)

o.salary = 1000391          // adding new key and value to object
console.log(o)