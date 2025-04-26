// console.log(document.querySelector(".box").innerHTML);  // Give the html inside .box
// console.log(document.querySelector(".box").innerText);  // Give the text inside .box

// console.log(document.querySelector(".container").innerHTML);    // Give the html inside .container
// console.log(document.querySelector(".container").innerText);    // Give the text inside .container
// console.log(document.querySelector(".container").outerHTML);    // Give the html including .container

// console.log(document.querySelector(".container").tagName);      // Give the html tag name of .box
// console.log(document.querySelector(".container").nodeName);     // Give the node name of .box

// console.log(document.querySelector(".container").textContent);     // Give the text inside .box


// console.log(document.querySelector(".box").hidden)              // Return false because its not hidden
// console.log(document.querySelector(".box").hidden = true)    // Make it hidden and return true


console.log(document.querySelector(".box").hasAttribute("style"))     // Check if it has that attribute
console.log(document.querySelector(".box").getAttribute("style"))     // Give the value of that attribute
console.log(document.querySelector(".box").setAttribute("style","background-color:blue"))     // Set new the value of that attribute
console.log(document.querySelector(".box").attributes)     // Show all attributes
console.log(document.querySelector(".box").removeAttribute("style"))


// insertAdjacentHTML
// let div = document.createElement("div")
// div.setAttribute("class","created")
// div.innerHTML = "Hey i am created DIV"
// document.querySelector(".container").append(div)         // Add this newly created div inside the .container at last
// document.querySelector(".container").prepend(div)        // Add this newly created div inside the .container at first
// document.querySelector(".container").after(div)          // Add this newly created div after the .container
// document.querySelector(".container").before(div)         // Add this newly created div before the .container
// document.querySelector(".container").replaceWith(div)    // Replace the .container with div(.created)
// document.querySelector(".container").insertAdjacentElement("beforebegin",div)            // Add div before .container


// insertAdjacentText
// document.querySelector(".container").insertAdjacentText("afterend","This is actual end")    // Add text at the end of .container



// insertAdjacentHTML
// let cont = document.querySelector(".container")
// cont.insertAdjacentHTML("beforebegin","I am before begin")      // Add text before .container
// cont.insertAdjacentHTML("afterbegin","I am after begin")
// cont.insertAdjacentHTML("beforeend","I am before end")
// cont.insertAdjacentHTML("afterend","I am after end")


// document.querySelector(".box").remove()         // remove the element or Node


// classList and className
// console.log(document.querySelector(".container").classList)      // give a list of all classes
// console.log(document.querySelector(".container").className)      // give a name of class as a string

// console.log(document.querySelector(".container").classList.add("blue"))         // Add a class blue 
// console.log(document.querySelector(".container").classList.remove("blue"))      // remove class blue


// toggle
// document.querySelector(".container").classList.toggle("red")     // Add class 'red' if it is not there and remove class 'red' if it is already there
