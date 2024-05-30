@extends('../../layout.layout')
@section('title', 'الاخبار')
@section('content')

<button id="btn_add_book">
    <h2>أضافه كتاب جديد</h2>
</button>

@foreach ($news as $i)
        <div id="continer_news">
        <div class="continer_content_news" >
            <img class="qwe" src="{{ route('image.show', $i->id) }}" alt="Image">
        <div class="asd">

            <h4 id="count_content_r_news">{{$i->body}}</h4>

            </div>



        {{-- <div style="display: flex ;width: 40%;justify-content: space-around">
                    
            <form action="" method="POST">
                @csrf
                @method('delete')
                <button type="submit"><img src="{{asset('image/image/icon_delete.png')}}" alt=""></button>
            </form>
            <a href="#"><img src="{{asset('image/image/icon_edit.png')}}" alt=""></a>
        </div> --}}
    </div>

        </div>

@endforeach




    <div id="form_add_book">
        <h1 id="btn_exit_form_book">X</h1>
        <form action="{{route('add.news')}}" method="post" enctype="multipart/form-data">
            @csrf

            <h1>أضافه خبر جديد</h1>
            <input type="text" name="bodydescrtion">

            <input type="file" name="nameimg" id="img" style="display: none" >
            <label for="img" id="add_img_books">
                <h2>
                    حدد ملف الصورة
                </h2>

            </label>

            <button id="btn_add_book_form" type="submit">
                <h1>أضافه</h1>
            </button>

        </form>
    </div>
    <script src="{{ asset('js/Form_add_book.js') }}"></script>
@endsection
