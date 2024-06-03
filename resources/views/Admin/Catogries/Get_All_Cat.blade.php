@extends('../../layout.layout')
@section('title', 'جميع ألاقسام')
@section('content')
    <div id="continer_cat">
        <div class="continer_content_cat" >
            <h4 id="title_content_r">عدد ألاقسام</h4>
            <hr>
            <h1 id="count_content_r">{{$count}}</h1>
        </div>

        {{-- TODO ==> Search Here --}}
        <form  action={{ route('seeerch.index') }} method='post'>
            @csrf
            <button type="submit" id="btn_serch">بحث</button>
              <input type="text" id="serch" name="search">
          </form>



    </div>
    <button id="btn_add_cat">أضافه قسم جديد</button>

    <form id="form_add_cat" action="/add" method="POST" >
        @csrf

        <h1 onclick="close_form_add();" id="btn_exit_form_book">X</h1>
        <h1>أضافه قسم جديد</h1>
        <input type="text" id="input_add" name="name">
        @error('name')
            <p style="color: rgb(255, 255, 255);margin: 5px 0;">يجب أضافه ألاسم</p>
        @enderror
        <button id="btn_add" type="submit" >أضافه</button>
    </form>

    <div class="table_cat">
        <h1 style="width:10%;text-align: center">رقم</h1>
        <h1 style="width:35%;text-align: center">الأسم</h1>
        <h1 style="width:35%;text-align: center">التاريخ</h1>
        <h1 style="width:20%;text-align: center">عمليات</h1>

    </div>




    {{-- Here Foreach --}}


    <script src="js/Tr_Get_All_Catogry.js"></script>
    @foreach ($data as $i)
    
        <script >Tr_Catogry({{$i->id}}, "{{$i->name}}", "2020/4/30");</script>
    @endforeach
    
    <script src="js/Form_add_Catogrye.js"></script>

@endsection
