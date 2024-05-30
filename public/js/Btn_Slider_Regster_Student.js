function OC(val){
    location.pathname=`/open-close-Register/${val}`;
}
function auto_relod(){
    setTimeout(() => {
        location.pathname="/regster_student";
        console.log("relooood")
    }, 5000);
}