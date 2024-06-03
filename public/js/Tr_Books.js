function tr_books(id, name) {
    document.write(`
    <div class="table_books_body">
    <h3 style="width: 20%">${id}</h3>
    <h3 style="width: 40%"> ${name}</h3>
    <button  onclick="test1(${id})">View PDF</button>
    <div style="display: flex ;width: 35%;justify-content: space-around">
    <button onclick="test(${id})" id="btn_delete_cat"><img src="image/icon_delete.png" alt=""></button>
    <a href="#"><img src="image/icon_edit.png" alt=""></a>
    </div>
</div>

    `);
}

function test(id) {
    location.pathname = `/deletesubject/${id}`;
}

function test1(id) {
    location.pathname = `/pdf/${id}`;
}