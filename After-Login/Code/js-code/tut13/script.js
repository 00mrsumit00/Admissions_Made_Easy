console.log("Dynamic Card Generator");

function createCard(){
    let thumbnail = prompt("Enter thumbnail URL")
    let cName = prompt("Enter your channel name")
    let title = prompt("Enter title")
    let duration = prompt("Enter duration")
    let views = prompt("Enter views")
    let months = prompt("Enter months")
    let cont = document.querySelector(".container")

    let card = document.createElement("div")
    card.setAttribute("class","card")
    cont.append(card)

    let img = document.createElement("img")
    img.setAttribute("src",thumbnail)
    card.append(img)

    let dur = document.createElement("div")
    dur.setAttribute("class","duration")
    dur.innerText = duration
    card.append(dur)

    let details = document.createElement("div")
    details.setAttribute("class","details")
    card.append(details)

    let titleClass = document.createElement("div")
    titleClass.setAttribute("class","title")
    titleClass.innerText = title
    details.append(titleClass)

    let other = document.createElement("div")
    other.setAttribute("class","other")
    details.append(other)

    let inOther1 = document.createElement("span")
    inOther1.innerText = cName
    other.append(inOther1)
    
    let inOther2 = document.createElement("span")
    inOther2.innerText = views
    other.append(inOther2)

    let inOther3 = document.createElement("span")
    inOther3.innerText = months
    other.append(inOther3)

}

document.getElementById("btn").addEventListener("click", createCard);




