<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style/Layout.css') }}">
    <link rel="stylesheet" href="{{ asset('style/Rigseter_student.css') }}">
    <link rel="stylesheet" href="{{ asset('style/Catogry.css') }}">
    <link rel="stylesheet" href="{{ asset('style/Library.css') }}">
    <link rel="stylesheet" href="{{ asset('style/News.css') }}">
    <title>
        @yield('title')
    </title>
</head>

<body id="main_body">

    <div class="drower">
        <div id="logo"> </div>
        {{-- Button 1 --}}

        <hr>
        <a href="{{ route('regster_student') }}" class="btn_drower">
            <div class="img_btn">
                <img src="{{ asset('image/student.png') }}" width="50px" alt="">
            </div>
            <div class="name_btn">
                <h5>طلبات التسجيل</h5>
            </div>
        </a>
        <hr>


        {{-- Button 2 --}}

        <a href={{ route('Student_Grades', []) }} class="btn_drower">
            <div class="img_btn">
                <img src="{{ asset('image/univer.png') }}" width="50px" alt="">
            </div>
            <div class="name_btn">
                <h5>درجات الطلاب</h5>
            </div>
        </a>

        {{-- Button 3 --}}

        <hr>
        <a href="###" class="btn_drower"id="btn_catogry">
            <div class="img_btn">
                <img src="{{ asset('image/cateogr.png') }}" width="50px" alt="">
            </div>
            <br>
            <div class="name_btn">
                <h5>  الكليات</h5>
                <img src="{{ asset('image/arrow.png') }}" width="15px" alt="" id="arrow">
            </div>
        </a>
        <div id="catogry">
         
            <a href={{ route('Get_All_Cat') }} class="btn_catogry">
                <div class="mg_cat">
                    <img src="{{ asset('image/dot.png') }}" width="15px">
                </div>
                <h5 class="txt_btn_cat"> أعدادات ألاقسام</h5>
            </a>
            <a href={{ route('Setting_Library') }} class="btn_catogry">
                <div class="mg_cat">
                    <img src="{{ asset('image/dot.png') }}" width="15px">
                </div>
                <h5 class="txt_btn_cat"> أعدادات ألكتب</h5>
            </a>
        </div>

        <hr>

        {{-- Button 5 --}}
        <a href={{ route('get_news') }} class="btn_drower">
            <div class="img_btn">
                <img src="{{ asset('image/news.png') }}" width="50px" alt="">
            </div>
            <div class="name_btn">
                <h5>أخبار الكليه</h5>
            </div>
        </a>
        <hr>




    </div>

    <div class="body">
        <nav id="nav">
            <h1 style="color: #666">لوحه التحكم</h1>
            <h1 style="font-size: 35px;color: #005aab">@yield('title') </h1>
            <div class="icons">
                <img src="{{ asset('image/news.png') }}" width="30px" alt="">
                <img src="{{ asset('image/news.png') }}" width="30px" alt="">

            </div>
        </nav>
        @yield('content')
    </div>
</body>
<script src="{{ asset('js/Btn_catogry.js') }}"></script>


</html>
