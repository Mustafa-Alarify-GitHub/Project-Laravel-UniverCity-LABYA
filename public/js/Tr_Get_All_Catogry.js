function Tr_Catogry(id, name, Date) {
    return document.write(`
    <div class="table_cat_tr" style="background-color:${id % 2 != 0 ? '#fff' : '#85aed4a6'} ">
        <h2 style="width:10%;text-align: center">${id}</h2>
        <h2 style="width:35%;text-align: center">${name}</h2>
        <h2 style="width:35%;text-align: center">${Date}</h2>
        <div style="display: flex ;width: 20%;justify-content: space-around">
        <form>
        <button type="submit" id="btn_delete_cat"><img src="image/icon_delete.png" alt=""></button>
        </form>
        <a href="#"><img src="image/icon_edit.png" id="btn_delete_cat" alt=""></a>
      </div>
    </div>
    `);
}