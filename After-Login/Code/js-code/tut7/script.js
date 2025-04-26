// console.log("Array in JavaScript");

// let arr = [1,4,7,8,3]

// console.log(arr);
// console.log(typeof(arr));

// // Array function
// console.log(arr.toString());             // convert the elements in string
// console.log(arr.join(" and "));          // join all elements with join

// console.log(arr.pop());                  // remove last item
// console.log(arr.push("Avi"));            // add new item at last

// console.log(arr.shift());                // remove first element
// console.log(arr.unshift("Avi"));         // add new element at first

// delete arr[6]        // delete the item but keep the memory allocated
// console.log(arr);

a1 = [1,2,3,4]
a2 = [5,6,7,8]
a3 = [19,13,65,23]
a4 = a1.concat(a2,a3);

// console.log(a4);
// a4.sort()           // sort elements in a mathematical order
// console.log(a4);

a4.splice(1,3)      // remove elements at given index range (1,2,3)
console.log(a4);

a4.splice(2,4,56,34,67,78)     //remove elements at index 2,3,4 and add 56,34,67,78. its not neccessary to add only 3 numbers if we remove 3 numbers, we can add more or less
console.log(a4);

console.log(a4.slice(1,6))

console.log(a4.reverse());  // reverse the elements


// Shortcut method to create a array
let x = 6

let ar = Array.from(Array(x).keys())      // It create a array from 0 to 5
console.log(ar)
