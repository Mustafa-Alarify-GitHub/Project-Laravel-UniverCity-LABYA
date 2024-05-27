const div_cat =document.getElementById("catogry")
const arrow =document.getElementById("arrow")
const btn_catogry =document.getElementById("btn_catogry")

let isUp=true;


btn_catogry.onclick=function(){
    if(isUp){
        arrow.src="image/up_arrow.png";
        div_cat.style.height="15vh";
    }else{
        arrow.src="image/arrow.png";
        div_cat.style.height="0";

    }
    isUp=!isUp;
} 
// //  Button 2

const div_cat_2 =document.getElementById("catogry_2")
const arrow_2 =document.getElementById("arrow_2")
const btn_catogry_2 =document.getElementById("btn_catogry_2")

let isUp_2=true;



btn_catogry_2.onclick=function(){
    if(isUp_2){
        arrow_2.src="image/up_arrow.png";
        div_cat_2.style.height="15vh";
    }else{
        arrow_2.src="image/arrow.png";
        div_cat_2.style.height="0";

    }
    isUp_2=!isUp_2;
} 