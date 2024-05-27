@extends('../layout.layout')
@section('title', 'طلبات التسجيل')
@section('content')

    <div class="status_regster">
        <h1> وضع التسجيل حاليا</h1>
        <div id="on_off_R">
            <button id="btn_on_off">مفتوح</button>
        </div>
    </div>
    <hr>
    {{-- card  --}}
    <div id="continer_r">
        <div class="continer_content_1">
            <h4 id="title_content_r"> في قائمه الانتظار</h4>
            <hr>
            <h1 id="count_content_r">25</h1>
        </div>

        <div class="continer_content_3">
            <h4 id="title_content_r">الطلبات المقبوله</h4>
            <hr>
            <h1 id="count_content_r">25</h1>
        </div>
        <div class="continer_content_2">
            <h4 id="title_content_r">الطلبات المرفوضه</h4>
            <hr>
            <h1 id="count_content_r">25</h1>
        </div>
    </div>

    {{-- Table --}}
    <hr>
   <div id="title_regster">
    <div class="status_regster">
        <h1>قائمه طلبات التسجيل </h1>
    </div>
    <div id="des_colors">
        <div id="color_red"></div> تم الرفظ الطلب
        <div id="color_green"></div> تمت موافقه الطلب
        <div id="color_yellow"></div> في حاله أنتظار
    </div>
   </div>
    <table id="table_Regster_Student" border="1px">
        <thead>
            <tr>
                <td>الاسم</td>
                <td>نسبه الشهاده </td>
                <td>القسم</td>
                <td>صفه القيد</td>
            </tr>
        </thead>

        <tbody>
            <script src="{{ asset('js/Tr_Regster_Student.js') }}"></script>
            <script>
                // TODO Here Foreach
                tr_data("خالد علي محسن الذماري", "77", "علمي", "أنتساب","مقبول");
                tr_data("خالد علي محسن الذماري", "50", "علمي", "أنتساب","انتظر");
                tr_data("مصطفئ محمد سالم العؤيفي", "50", "علمي", "أنتساب","مرفوض");
            
            </script>
        </tbody>
    </table>


    <script src="{{ asset('js/Btn_Slider_Regster_Student.js') }}"></script>
@endsection
