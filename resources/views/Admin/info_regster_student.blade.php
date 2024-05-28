<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $data->name }}</title>
    <link rel="stylesheet" href="{{ asset('style/info_student.css') }}">

</head>

<body>
    <div id="nav_info">
        <h3 style="color: #005aab">معلومات الطالب</h3>
    </div>
    <div id="body_info">
        <div id="info_student">
            <h1 id="title_info">بيانات الطالب</h1>
            <center>
                <hr>
            </center>
            <h2 id="des_info"> أسم الطالب / {{ $data->name }} - ({{ $data->genders }})</h2>

            <hr>
            <h2 id="des_info"> الرقم الوطني / {{ $data->number_GOV }}</h2>

            <hr>
            <h2 id="des_info"> الرقم القيد / {{ $data->number_Rigstration }}</h2>

            <hr>
            <h2 id="des_info"> الرقم ألاثبات الشخصي / {{ $data->number_ID }}</h2>

            <hr>
            <h2 id="des_info"> أقامه الطالب/ {{ $data->number_ID }} -( {{ $data->nationality }})</h2>

        </div>
        <div id="info_student">
            <h1 id="title_info">بيانات ام الطالب</h1>
            <center>
                <hr>
            </center>

            <h2 id="des_info"> أسم الام / {{ $data->name_mather }}</h2>
            <hr>
            <h2 id="des_info"> جنسيه الام / {{ $data->nationality_mather }}</h2>
            <hr>
            <h2 id="des_info"> رقم ولي الأمر / {{ $data->number_phone }}</h2>

        </div>

    </div>

    <center>
        <h1 style="color: #005aab; font-size: 40px"> بيانات الشهاده</h1>
        <div id="smoll_data_info">

            <div id="colum_info_S">
                <h3 style="color: #333">نوع الشهاده</h3>
                <h1>{{ $data->type_s }}</h1>
            </div>

            <div id="colum_info_S">
                <h3 style="color: #333">نسبه الشهاده</h3>
                <h1> %{{ $data->rate }}</h1>
            </div>

            <div id="colum_info_S">
                <h3 style="color: #333"> القسم </h3>
                <h1>{{ $data->type_hith_level }}</h1>
            </div>

            <div id="colum_info_S">
                <h3 style="color: #333"> صفه ألقيد </h3>
                <h1>{{ $data->type_RR }}</h1>
            </div>

            <div id="colum_info_S">
                <h3 style="color: #333"> فصيله الدم </h3>
                <h1>{{ $data->type_blood }}</h1>
            </div>



        </div>
    </center>
    <div id="div_img_info">
        <div style="width: 48%">
            <h1>صوره شهاده الميلاد</h1>
            <div id="border_img_info">
                <img src="{{ asset($data->img_birth) }}" width="100%" height="100%" alt="حدث خطأ">
            </div>
        </div>
        <div style="width: 48%">
            <h1>صوره شهاده الثنويه</h1>
            <div id="border_img_info">
                <img src="{{ asset($data->img_hith_level) }}" width="100%" height="100%" alt="حدث خطأ">
            </div>
        </div>
    </div>
    <center>
        <div id="btn_status">
            <form method="post" action="{{ route('update.regster_student', ['id' => $data->id]) }}">
                @csrf
                @method('put')
                <button type="submit" id="btn_yes" name="status_regster" value="مقبول">مقبول</button>
            </form>
            <form method="post" action="{{ route('update.regster_student', ['id' => $data->id]) }}">
                @csrf
                @method('put')
                <button type="submit" id="btn_no" name="status_regster" value="مرفوض">مرفوض</button>
            </form>
        </div>
    </center>
</body>

</html>
