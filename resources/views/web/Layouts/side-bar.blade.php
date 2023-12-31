<section class="side-bar col-2 col-sm-1 h-100 p-2 p-lg-3 d-flex flex-column justify-content-between align-items-center">
    <div class="mb-4">
        <img src="{{ asset('images/Nahira-logo.svg') }}" alt="">
    </div>
    <a href="{{ url('/Manager/Dashbord') }}"
        class="bg-gray-500 p-2  item-sidebar col-11 col-md-8 {{ $ClassDashbord }}"item-sidebar>
        <img src="{{ asset('images/home(3).svg') }}" alt="" class="col-lg-7 img-dark-item-sidebar">
        <img src="{{ asset('images/home(1) 1.svg') }}" alt="" class="col-lg-7 img-light-item-sidebar">
        <div class="dropdown-item-sidebar"></div>
    </a>
    <div class="bg-gray-500 p-2 col-11 col-md-8 item-sidebar {{ $ClassLocation }}"item-sidebar>
        <img src="{{ asset('images/workplace(2).svg') }}" alt="" class="col-lg-7 img-dark-item-sidebar">
        <img src="{{ asset('images/workplace.svg') }}" alt="" class="col-lg-7  img-light-item-sidebar">
        <div class="dropdown-item-sidebar bg-white rounded-24 p-3 p-md-4">
            <h5 class="pb-3">محل کار</h5>
            <ul class="">
                <li class="pb-3">
                    <a href="{{ url('/Manager/WorkPlace/ListWorkPlace') }}" class="d-flex justify-content-between ">
                        لیست محل کار
                        <img src="{{ asset('images/down(2).svg') }}" alt=""class="me-3 me-md-5">
                        <img src="{{ asset('images/down.svg') }}" alt=""class="me-3 me-md-5">

                    </a>
                </li>
                <li class="pb-3">
                    <a href="{{ url('/Manager/WorkPlace/NewWorkPlace') }}" class="d-flex justify-content-betwee n">
                        ثبت محل کار جدید
                        <img src="{{ asset('images/down(2).svg') }}" alt=""class="me-3 me-md-5">
                        <img src="{{ asset('images/down.svg') }}" alt=""class="me-3 me-md-5">

                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="bg-gray-500 p-2 col-11 col-md-8 item-sidebar {{ $ClassShift }}"item-sidebar>
        <img src="{{ asset('images/working-hours(2).svg') }}" alt="" class="col-lg-7 img-dark-item-sidebar">
        <img src="{{ asset('images/working-hours.svg') }}" alt="" class="col-lg-7 img-light-item-sidebar">
        <div class="dropdown-item-sidebar bg-white rounded-24 p-3 p-md-4">
            <h5 class="pb-3">شیفت</h5>
            <ul class="">
                <li class="pb-3">
                    <a href="{{ url('/Manager/Shift/ListShift') }}" class="d-flex justify-content-between ">
                        لیست شیفت ها
                        <img src="{{ asset('images/down(2).svg') }}" alt=""class="me-3 me-md-5">
                        <img src="{{ asset('images/down.svg') }}" alt=""class="me-3 me-md-5">

                    </a>
                </li>
                <li class="pb-3">
                    <a href="{{ url('/Manager/Shift/DateShift') }}" class="d-flex justify-content-betwee n">
                        ثبت شیفت جدید
                        <img src="{{ asset('images/down(2).svg') }}" alt=""class="me-3 me-md-5">
                        <img src="{{ asset('images/down.svg') }}" alt=""class="me-3 me-md-5">

                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="bg-gray-500 p-2 col-11 col-md-8  item-sidebar {{ $ClassPersonel }}"item-sidebar>
        <img src="{{ asset('images/user(20).svg') }}" alt="" class="col-lg-7 img-dark-item-sidebar">
        <img src="{{ asset('images/user(19).svg') }}" alt="" class="col-lg-7 img-light-item-sidebar">
        <div class="dropdown-item-sidebar bg-white rounded-24 p-3 p-md-4">
            <h5 class="pb-3">پرسونل</h5>
            <ul class="">
                <li class="pb-3">
                    <a href="{{ url('/Manager/Personel/ListPersonel') }}" class="d-flex justify-content-between ">
                        لیست پرسونل
                        <img src="{{ asset('images/down(2).svg') }}" alt=""class="me-3 me-md-5">
                        <img src="{{ asset('images/down.svg') }}" alt=""class="me-3 me-md-5">

                    </a>
                </li>
                <li class="pb-3">
                    <a href="{{ url('/Manager/Personel/NewPersonel') }}" class="d-flex justify-content-betwee n">
                        ثبت پرسونل جدید
                        <img src="{{ asset('images/down(2).svg') }}" alt=""class="me-3 me-md-5">
                        <img src="{{ asset('images/down.svg') }}" alt=""class="me-3 me-md-5">

                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="bg-gray-500 p-2 col-11 col-md-8 item-sidebar {{ $ClassReported }}"item-sidebar>
        <img src="{{ asset('images/report(1).svg') }}" alt="" class="col-lg-7 img-dark-item-sidebar">
        <img src="{{ asset('images/report.svg') }}" alt="" class="col-lg-7  img-light-item-sidebar">
        <div class="dropdown-item-sidebar bg-white rounded-24 p-3 p-md-4">
            <h5 class="pb-3">گزارش ها</h5>
            <ul class="">
                <li class="pb-3">
                    <a href="{{ url('/Manager/Reported/karkard') }}" class="d-flex justify-content-between ">
                        کارکرد
                        <img src="{{ asset('images/down(2).svg') }}" alt=""class="me-3 me-md-5">
                        <img src="{{ asset('images/down.svg') }}" alt=""class="me-3 me-md-5">
                    </a>
                </li>
                <li class="pb-3">
                    <a href="{{ url('/Manager/Reported/Taradod') }}" class="d-flex justify-content-between">
                        تردد
                        <img src="{{ asset('images/down(2).svg') }}" alt=""class="me-3 me-md-5">
                        <img src="{{ asset('images/down.svg') }}" alt=""class="me-3 me-md-5">
                    </a>
                </li>
                <li class="pb-3">
                    <a href="{{ url('/Manager/Reported/Morkhasi') }}" class="d-flex justify-content-between">
                        مرخصی
                        <img src="{{ asset('images/down(2).svg') }}" alt=""class="me-3 me-md-5">
                        <img src="{{ asset('images/down.svg') }}" alt=""class="me-3 me-md-5">
                    </a>
                </li>
                <li class="pb-3">
                    <a href="{{ url('/Manager/Reported/JoziatMorkhasi') }}" class="d-flex justify-content-between">
                        جزییات مرخصی
                        <img src="{{ asset('images/down(2).svg') }}" alt=""class="me-3 me-md-5">
                        <img src="{{ asset('images/down.svg') }}" alt=""class="me-3 me-md-5">
                    </a>
                </li>
                <li class="pb-3">
                    <a href="{{ url('/Manager/Reported/ReportProject') }}" class="d-flex justify-content-between">
                        پروژه
                        <img src="{{ asset('images/down(2).svg') }}" alt=""class="me-3 me-md-5">
                        <img src="{{ asset('images/down.svg') }}" alt=""class="me-3 me-md-5">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <a href="{{ url('/Manager/Request') }}"
        class="bg-gray-500 p-2  col-11 col-md-8 item-sidebar {{ $ClassRequest }}"item-sidebar>
        <img src="{{ asset('images/request(8).svg') }}" alt="" class="col-lg-7 img-dark-item-sidebar">
        <img src="{{ asset('images/request(4).svg') }}" alt="" class="col-lg-7 img-light-item-sidebar">
        <div class="dropdown-item-sidebar"></div>
    </a>
    <div class="bg-gray-500 p-2 col-11 col-md-8 item-sidebar {{ $ClassProject }}"item-sidebar>
        <img src="{{ asset('images/project-management(4).svg') }}" alt=""
            class="col-lg-7 img-dark-item-sidebar">
        <img src="{{ asset('images/project-management(3).svg') }}" alt=""
            class="col-lg-7 img-light-item-sidebar">
        <div class="dropdown-item-sidebar bg-white rounded-24 p-3 p-md-4">
            <h5 class="pb-3">پروژه</h5>
            <ul class="">
                <li class="pb-3">
                    <a href="{{ url('/Manager/Project/ListProject') }}" class="d-flex justify-content-between ">
                        لیست پروژه
                        <img src="{{ asset('images/down(2).svg') }}" alt=""class="me-3 me-md-5">
                        <img src="{{ asset('images/down.svg') }}" alt=""class="me-3 me-md-5">
                    </a>
                </li>
                <li class="pb-3">
                    <a href="{{ url('/Manager/Project/SabtProject') }}" class="d-flex justify-content-betwee n">
                        ثبت پروژه جدید
                        <img src="{{ asset('images/down(2).svg') }}" alt=""class="me-3 me-md-5">
                        <img src="{{ asset('images/down.svg') }}" alt=""class="me-3 me-md-5">
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <a href="{{ url('/Manager/Holiday') }}"
        class="bg-gray-500 p-2 col-11 col-md-8 item-sidebar {{ $ClassHoliday }}"item-sidebar>
        <img src="{{ asset('images/holiday(4).svg') }}" alt="" class="col-lg-7 img-dark-item-sidebar">
        <img src="{{ asset('images/holiday(3).svg') }}" alt="" class="col-lg-7  img-light-item-sidebar">
        <div class="dropdown-item-sidebar"></div>
    </a>
    <div class="bg-gray-500 p-2 col-11 col-md-8  item-sidebar">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logout(1).svg') }}" alt="" class="col-lg-7">
        </a>
    </div>
</section>
