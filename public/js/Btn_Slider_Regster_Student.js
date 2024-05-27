const on_off_R = document.getElementById("on_off_R");
const btn_on_off = document.getElementById("btn_on_off");

let isOpen = true;
btn_on_off.onclick = function () {
    if (isOpen) {
        on_off_R.style.backgroundColor="red";
        btn_on_off.style.right="57px";
        btn_on_off.innerText="مغلق";
    } else {
        on_off_R.style.backgroundColor="#03a806";
        btn_on_off.style.right="0";
        btn_on_off.innerText="مفتوح";
    }
    isOpen = !isOpen;
}