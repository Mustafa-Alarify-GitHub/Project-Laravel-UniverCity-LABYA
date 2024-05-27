const btn_add_cat = document.getElementById("btn_add_cat");
const form_add_cat = document.getElementById("form_add_cat");

let isOpen_add_cat = false;
btn_add_cat.onclick = function () {

    if (isOpen_add_cat) { 
        form_add_cat.style.transform="scale(0)"
    } else {
        form_add_cat.style.transform="scale(1)"
     }

    isOpen_add_cat = !isOpen_add_cat;
}
function close_form_add(){
    form_add_cat.style.transform="scale(0)";
    isOpen_add_cat=false
}