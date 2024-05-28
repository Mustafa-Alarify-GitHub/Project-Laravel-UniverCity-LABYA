
function kk(id){
location.pathname=`/info-regster_student/${id}`;
console.log(id)
}



function tr_data(id,name, rate, type_hith_level, type_RR, type) {
    document.write(`
        <tr onclick="kk('${id}')" class="tr_Regster_student" style="
        background-color:${
            type == "مرفوض" ? "#f16f6f" 
            : type == "مقبول" ? "#57d259" 
            : "#f3de90"};">
        <td id="tr_conten_regster_studeny">${name}</td>
        <td id="tr_conten_regster_studeny">${rate}  </td>
        <td id="tr_conten_regster_studeny">${type_hith_level}</td>
        <td id="tr_conten_regster_studeny"> ${type_RR}</td>
        </tr>
    `);
}



