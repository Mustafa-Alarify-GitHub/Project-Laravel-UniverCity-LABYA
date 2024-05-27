function tr_books(id, name) {
    document.write(`
    <div class="table_books_body">
    <h3 style="width: 20%">${id}</h3>
    <h3 style="width: 40%"> ${name}</h3>
    <div style="display: flex ;width: 40%;justify-content: space-around">
        <form>
            <button type="submit">Delete</button>
        </form>
        <a href="#">Update</a>
    </div>
</div>

    `);
}