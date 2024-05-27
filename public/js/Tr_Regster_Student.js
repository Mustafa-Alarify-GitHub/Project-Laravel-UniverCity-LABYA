
function tr_data(name, rate, type_hith_level, type_RR, type) {
    document.write(`
        <tr class="tr_Regster_student" style="
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



