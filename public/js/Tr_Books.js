function tr_books(id, name) {
    document.write(`
    <div class="table_books_body">
    <h3 style="width: 20%">${id}</h3>
    <h3 style="width: 40%"> ${name}</h3>
    <div style="display: flex ;width: 40%;justify-content: space-around">
    <form action="/deleteregister/${id}" method="POST">

    <button type="submit"><img src="image/icon_delete.png" alt=""></button>
</form>
<a href="#"><img src="image/icon_edit.png" alt=""></a>
    </div>
</div>

    `);
}