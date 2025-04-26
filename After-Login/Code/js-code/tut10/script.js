
// let boxes = document.getElementsByClassName("box")      // select all elements with class name
// console.log(typeof(boxes));
// console.log(boxes);

// boxes[2].style.backgroundColor = "red"               // Change the background color of the given element



// let box = document.getElementById("redbox")          // select the element with id
// box.style.backgroundColor = "red"                     

// let b1 = document.querySelector(".box")              // select the first element with given class name
// b1.style.backgroundColor = "green"                   // here (. and #) is necessary before selector name

// let bAll = document.querySelectorAll(".box")         // select all elements with given class name
// console.log(bAll);                                   // here (. and #) is necessary before selector name
// bAll[1].style.backgroundColor = "yellow"

// bAll.forEach(e=&gt;{                                    // applying css to all elements using forEach loop
//     e.style.backgroundColor = "yellow"
// })

// document.getElementsByTagName("div")[1].style.backgroundColor = "pink"  // select all elements with tag name e.g. div
// document.getElementsByName("my_name")[0].style.backgroundColor = "red"  // select all elements with name


let a = document.getElementById("redbox")

// matches
console.log(a.matches(".box"))                      // check that if element 'a' match with .box selector or not
console.log(a.matches("#redbox"));                  // here (. and #) is necessary before selector name


// closest
console.log(a.closest(".container"));               // check the closest element that matches the given selector
console.log(a.closest("html"));                     // first it check with itselfand then its parent and again its parent 
console.log(a.closest("#greenbox"));                // here (. and #) is necessary before selector name


// contains
let cont = document.querySelector(".container")
console.log(cont.contains(a));                                        // .container contains .box --&gt; true
console.log(cont.contains(cont));                                     // .container contains itself --&gt; true
console.log(cont.contains(document.querySelector("body")));           // .container does not contains body --&gt; false
console.log(document.querySelector("body").contains(cont));           // body contains .container --&gt; true

                                        
