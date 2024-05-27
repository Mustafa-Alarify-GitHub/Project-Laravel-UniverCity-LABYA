@extends('../../layout.layout')
@section('title', ' جميع الكتب')
@section('content')
    <div id="continer_library">
        <div class="continer_content_Library">
            <h4 id="title_content_r">عدد ألكتب</h4>
            <hr>
            <h1 id="count_content_r">25</h1>
        </div>

        {{-- TODO ==> Search Here --}}
        <form>
            <button type="submit" id="btn_serch">بحث</button>
            <input type="text" id="serch">
        </form>

        <div class="continer_content_Library">
            <h4 id="title_content_r">عدد ألاقسام</h4>
            <hr>
            <h1 id="count_content_r">25</h1>
        </div>

    </div>
    <button id="btn_add_book">
        <h2>أضافه كتاب جديد</h2>
    </button>

    <div class="div_books">
        <div class="fliter_catogry">
            <center>
                <h1>ألاقسام</h1>
            </center>
            <div class="list_catogries">
                <h4 id="name_cat"> قسم القران</h4>
                <h4 id="name_cat">قسم الفلسفه</h4>
                <h4 id="name_cat">قسم التربيه الأسلاميه</h4>
                <h4 id="name_cat">قسم ألقران و علومه</h4>
            </div>

        </div>
        <div class="table_books">
            <div class="table_books_head">
                <h2 style="width: 20%">رقم</h2>
                <h2 style="width: 40%">أسم الكتاب</h2>
                <h2 style="width: 40%">العمليات</h2>
            </div>

            {{-- table tr body TODO foreach here --}}
            <script src="{{ asset('js/Tr_Books.js') }}"></script>
            <script>
                tr_books(1, "علوم القران");
                tr_books(2, "تربيه أسلاميه");
                tr_books(3, "علوم الدين");
                tr_books(4, "رياضيات");
                tr_books(5, "كتاب جديد");
            </script>


        </div>

        <div id="form_add_book">
            <h1 id="btn_exit_form_book">X</h1>
            <form>
                <h1>أضافه كتاب جديد</h1>
                <input type="text">
                <select name="" id="">
                    <option value="">قسم العلوم</option>
                    <option value="">قسم الرباضبات</option>
                </select>
                <input type="file" id="img" style="display: none">
                <label for="img" id="add_img_books">
                    <h2>
                        حدد ملف PDF
                    </h2>
                </label>

                <button id="btn_add_book_form" type="submit">
                    <h1>أضافه</h1>
                </button>

            </form>
        </div>
        <script src="{{ asset('js/Form_add_book.js') }}"></script>
    @endsection
