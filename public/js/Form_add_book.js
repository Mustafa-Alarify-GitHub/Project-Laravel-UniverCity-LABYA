const form_add_book = document.getElementById("form_add_book");
const btn_add_book = document.getElementById("btn_add_book");
const btn_exit_form_book = document.getElementById("btn_exit_form_book");

let is_Open_form_add_book = false;


btn_add_book.onclick = function () {
    if (!is_Open_form_add_book) {
        form_add_book.style.transform="scale(1)";
     } else { 
        form_add_book.style.transform="scale(0)";
    }
    is_Open_form_add_book = !is_Open_form_add_book;
}

btn_exit_form_book.onclick=function(){
    form_add_book.style.transform="scale(0)";
    is_Open_form_add_book = !is_Open_form_add_book;

}

