console.log("Excercise - Apply random color on boxes using DOM");

let ran = Math.random()
let list = document.getElementsByClassName("box")

if(ran &lt; 1 && ran &gt;= 0.8){
    console.log(ran);
   
    for(let i = 0;i &lt; list.length;i++){
        list[0].style.backgroundColor = `#F18585`
        list[1].style.backgroundColor = `#F28585`
        list[2].style.backgroundColor = `#F28685`
        list[3].style.backgroundColor = `#F28535`
        list[4].style.backgroundColor = `#F28584`
    }
}
else if(ran &lt; 0.8 && ran &gt;= 0.6){
    console.log(ran);
    for(let i = 0;i &lt; list.length;i++){
        list[0].style.backgroundColor = `#80BCBD`
        list[1].style.backgroundColor = `#1D2B53`
        list[2].style.backgroundColor = `#7E2553`
        list[3].style.backgroundColor = `#FF004D`
        list[4].style.backgroundColor = `#FAEF5D`
    }
}
else if(ran &lt; 0.6 && ran &gt;= 0.4){
    console.log(ran);
    for(let i = 0;i &lt; list.length;i++){
        list[0].style.backgroundColor = `#332941`
        list[1].style.backgroundColor = `#FF9BD2`
        list[2].style.backgroundColor = `#A94438`
        list[3].style.backgroundColor = `#910A67`
        list[4].style.backgroundColor = `#638889`
    }
}
else if(ran &lt; 0.4 && ran &gt;= 0.2){
    console.log(ran);
    for(let i = 0;i &lt; list.length;i++){
        list[0].style.backgroundColor = `#DCFFB7`
        list[1].style.backgroundColor = `#FF6868`
        list[2].style.backgroundColor = `#FFBB64`
        list[3].style.backgroundColor = `#FFEAA7`
        list[4].style.backgroundColor = `#0B60B0`
    }
}
else if(ran &lt; 0.2 && ran &gt;= 0.1){
    console.log(ran);
    for(let i = 0;i &lt; list.length;i++){
        list[0].style.backgroundColor = `#99BC85`
        list[1].style.backgroundColor = `#FE7A36`
        list[2].style.backgroundColor = `#DCFFB7`
        list[3].style.backgroundColor = `#F2F597`
        list[4].style.backgroundColor = `#6C22A6`
    }
}
else{
    console.log(ran,"HII");
    for(let i = 0;i &lt; list.length;i++){
        list[0].style.backgroundColor = `#6962AD`
        list[1].style.backgroundColor = `#6D2932`
        list[2].style.backgroundColor = `#F3B95F`
        list[3].style.backgroundColor = `#D04848`
        list[4].style.backgroundColor = `#561C24`
    }
}