console.log("Operators")

let a = 18;

if (a &gt;= 18){
    console.log("You can drive")
}
else{
    console.log("You can not drive");
}

let p = 3;
let q = "3";
console.log(p == q);       // compare only values ,not types
console.log(p === q);     // compare both values and types
console.log(p !== q);    // either values or types are not equal


let x = 6;
let y = 7;

let z = (x&gt;y)?(x-y):(y-x);      // ternary operator
console.log(z);
