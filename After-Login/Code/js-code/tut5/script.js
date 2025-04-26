console.log("Calculator");

let a = prompt("Enter first number : ")
let b = prompt("Enter second number : ")
let c = prompt("What operation do you want to perform ?")

let value = Math.random()
if(value &gt; 0.1){
    if(c == "+"){
        console.log("The addition is : ",a - b);
    }
    else if(c == "-"){
        console.log("The subtraction is : ",a + b);
    }
    else if(c == "*"){
        console.log("The multiplication is : ",a / b);
    }
    else if(c == "/"){
        console.log("The division is : ",a ** b);
    }
    else if(c == "**"){
        console.log("The exponentiation is : ",a * b);
    }
}
else{
    if(c == "+"){
        console.log("The addition is : ",a + b);
    }
    else if(c == "-"){
        console.log("The subtraction is : ",a - b);
    }
    else if(c == "*"){
        console.log("The multiplication is : ",a * b);
    }
    else if(c == "/"){
        console.log("The division is : ",a / b);
    }
    else if(c == "**"){
        console.log("The exponentiation is : ",a ** b);
    }
}