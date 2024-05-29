@extends('../layout.layout')
@section('title', 'طلبات التسجيل')
@section('content')

    <div class="status_regster">
        <script src="{{ asset('js/Btn_Slider_Regster_Student.js') }}"></script>
        {{-- @dd($isOpen) --}}
        <h1> وضع التسجيل حاليا</h1>
        @if ($isOpen != null)
            @if ($isOpen->isOpenRegister == 1)
                <button id="btn_on" onclick="OC(0)">مفتوح</button>
            @else
                <button id="btn_off" onclick="OC(1)">مغلق</button>
            @endif
        @else
            <button id="btn_off" onclick="OC(1)">مغلق</button>

        @endif
    </div>

    <hr>
    @if ($isOpen != null)
        @if ($isOpen->isOpenRegister == 1)
            <script>
                auto_relod()
            </script>
            {{-- card  --}}
            <div id="continer_r">
                <div class="continer_content_1">
                    <h4 id="title_content_r"> في قائمه الانتظار</h4>
                    <hr>
                    <h1 id="count_content_r">{{ $wait }}</h1>
                </div>

                <div class="continer_content_3">
                    <h4 id="title_content_r">الطلبات المقبوله</h4>
                    <hr>
                    <h1 id="count_content_r">{{ $yes }}</h1>
                </div>
                <div class="continer_content_2">
                    <h4 id="title_content_r">الطلبات المرفوضه</h4>
                    <hr>
                    <h1 id="count_content_r">{{ $no }}</h1>
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
                    <tr onclick="">
                        <td>الاسم</td>
                        <td>نسبه الشهاده </td>
                        <td>القسم</td>
                        <td>صفه القيد</td>
                    </tr>
                </thead>

                <tbody>
                    <script src="{{ asset('js/Tr_Regster_Student.js') }}"></script>

                    @foreach ($data as $item)
                        <script>
                            tr_data(
                                {{ $item->id }},
                                " {{ $item->name }}",
                                " {{ $item->rate }}",
                                "{{ $item->type_hith_level }}",
                                "{{ $item->type_RR }}",
                                "{{ $item->status_regster }}");
                        </script>
                    @endforeach

                </tbody>
            </table>
        @else
            <div id="Register_is_Close">
                ألتسجيل مغلق يجب عليك فتح التسجيل الاستلام الطلبات اولا
            </div>
        @endif
    @else
        <div id="Register_is_Close">
            ألتسجيل مغلق يجب عليك فتح التسجيل الاستلام الطلبات اولا
        </div>
    @endif


@endsection
