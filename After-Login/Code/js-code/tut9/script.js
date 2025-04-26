console.log("Hello, World!");

// console.log(document.body.childNodes);      // prints all child elements of body in a array
// console.log(document.body.childNodes[1]);   // prints first child elements of body
// console.log(document.body.childNodes[1].childNodes);    // prints all child elements of first element in a body

let cont = document.body.childNodes[1]  //storing container in a variable
// we can now access container element by cont variable

console.log(cont);
console.log(cont.childNodes);
console.log(cont.firstElementChild);    // Give first element child, ignoring text nodes/child

console.log(cont.lastChild);
console.log(cont.lastElementChild);     // Give last element child, ignoring text nodes/child

console.log(cont.lastElementChild.parentElement);

console.log(cont.children);             // Give only html elements as child
console.log(cont.parentElement);        // Give parent html element


console.log(cont.children[2].nextSibling);              // give next sibling node(including text node)
console.log(cont.children[0].nextElementSibling);       // give next sibling element(excluding text node)

console.log(cont.children[3].previousSibling);          // give previous sibling node(including text node)
console.log(cont.children[4].previousElementSibling);   // give previous sibling element(excluding text node)


console.log(document.body.children[2])                  // access the table
console.log(document.body.children[2].rows)              // access the rows of table

