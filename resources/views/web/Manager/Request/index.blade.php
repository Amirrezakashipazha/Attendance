@extends('web.layouts.master')

@section('head-tag')
    <title></title>

    <link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css" />
    <script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', [
        'H3Header' => 'درخواست ها',
        'CaptionHeader' => 'خانه - ',
        'TitleHeader' => 'درخواست ها',
    ])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar', [
        'ClassDashbord' => '',
        'ClassLocation' => '',
        'ClassShift' => '',
        'ClassPersonel' => '',
        'ClassReported' => '',
        'ClassRequest' => 'active-item-sidebar',
        'ClassProject' => '',
        'ClassHoliday' => '',
    ])
@endsection
<section class="">
    <div class="container-modal hide-modal" container-modal >
        <div class="bg-modal" close-modal></div>
        <div class="col-12 col-md-6 modal-delete rounded-24 p-3 p-md-4 h-md-auto overflow-y-scroll">
            <div class="d-flex justify-content-between col-12">
                <h6>نوع شیفت خود را انتخاب کنید</h6>
                <img src="{{ asset('images/Frame 77.svg') }}" alt="close" style="width: 12px" role="button"
                    close-modal />
            </div>
            <form action="" name="formShift">
                <div class="d-flex flex-column align-items-end justify-content-start">
                    <div class="col-12 border-t-gray border-b-gray py-2 mt-3">
                        <div class="col-12 col-md-6 d-flex flex-column mb-3 position-relative">
                            <label for="" class="mb-1 c-gray-900"> نوع درخواست </label>
                            <input type="text" name="input" class="bg-input rounded-8 py-md-2" request-type data-input-validation/>
                    <p id="err-input-email_phone" class="err-input pt-1 err-form-new-personel"></p>
                </div>
                    </div>
                    <div class="row overflow-hidden">
                        <div class="col-12 col-md-6 d-flex flex-column mb-3 mt-3 my-md-2 position-relative">
                            <label for="" class="mb-1 c-gray-900">
                                پرسنل
                                <span class="c-pink">*</span>
                            </label>
                            <input type="text" name="inputshift" class="bg-input rounded-8 py-md-2" requesst-personel data-input-validation/>
                            <p class="err-form-new-personel err-input pt-1 pe-3"></p>
                        </div>
                        <div class="col-12 col-md-6 d-flex flex-column mb-3 my-md-2 position-relative">
                            <label for="" class="mb-1 c-gray-900">
                                تاریخ
                                <span class="c-pink">*</span>
                            </label>
                            <input type="text" name="inputshift" class="bg-input rounded-8 py-md-2 example1"request-date data-jdp
                                readonly data-input-validation/>
                            <p class="err-form-new-personel err-input pt-1 pe-3"></p>
                        </div>
                        <div class="col-12 col-md-6 d-flex flex-column mb-3 my-md-5 position-relative">
                            <label for="" class="mb-1 c-gray-900">
                                از ساعت
                                <span class="c-pink">*</span>
                            </label>
                            <input type="time" name="inputshift" class="bg-input rounded-8 py-md-2"request-time-start data-input-validation/>
                            <p class="err-form-new-personel err-input pt-1 pe-3"></p>
                        </div>
                        <div class="col-12 col-md-6 d-flex flex-column mb-3 my-md-5 position-relative">
                            <label for="" class="mb-1 c-gray-900">
                                تا ساعت
                                <span class="c-pink">*</span>
                            </label>
                            <input type="time" name="inputshift" class="bg-input rounded-8 py-md-2"request-time-end data-input-validation/>
                            <p class="err-form-new-personel err-input pt-1 pe-3"></p>
                        </div>
                    </div>
                    <div class="col-12 py-2 mt-3">
                        <div class="col-12 d-flex flex-column mb-3 position-relative">
                            <label for="" class="mb-1 c-gray-900"> توضیح</label>
                            <input type="text" name="input" class="bg-input rounded-8 py-md-2" />
                    <p id="err-input-email_phone" class="err-input "></p>
                </div>
                    </div>
                    <button class="btn-primary-nahira" id="sumbit-form-shift" type="submit" btn-put-request>
                        ثبت
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="container-modal hide" modal-delete-request-manager>
        <div class="bg-modal" close-modal-request-manager></div>
        <div class="col-12 col-sm-10 col-md-7 modal-delete rounded-24 p-4">
            <div class="d-flex justify-content-between">
                <h6>حذف محل کار</h6>
                <img src="{{ asset('images/Frame 77.svg') }}" alt="close" style="width: 12px" role="button"
                    close-modal-request-manager />
            </div>
            <div class="body-modal-delete d-flex flex-column justify-content-center align-items-center py-5">
                <div class="p-modal-delete px-5 py-4 text-nowrap mb-5">
                    <h6>آیا می‌خواهید محل کار انتخابی حذف شود؟</h6>
                </div>
                <div>
                    <button class="mx-3 py-2 px-4 rounded-24" ok-delete-row-request-manager>بله</button>
                    <button class="mx-3 py-2 px-4 rounded-24" close-modal-request-manager>خیر</button>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="p-3 p-md-4 pb-0 pb-md-0 bg-white rounded-16 d-flex flex-column justify-content-between mb-3">
            <div class="d-flex flex-column flex-sm-row justify-content-between">
                <h5 class="mb-3 mb-lg-3 fw-bold">گزارشات پروژه</h5>
                <div class="">
                    <button class="btn-secondary-nahira">اکسل</button>
                    <button class="btn-primary-nahira me-3">دریافت اطلاعات</button>
                </div>
            </div>

            <div class="mt-4">
                <ul class="d-flex">
                    <li class="c-gray-dark me-4 li-reported active-li">در دست بررسی</li>
                    <li class="c-gray-dark me-4 li-reported">تایید شده</li>
                    <li class="c-gray-dark me-4 li-reported">رد شده</li>
                </ul>
            </div>
        </div>
        <div class="p-3 p-md-4 bg-white rounded-16">
            <div class="d-flex flex-column flex-lg-row align-items-end justify-content-between mb-3">
                <div class="col-lg-10 col-12 d-flex flex-column flex-lg-row row">
                    <div class="col-12 col-lg-3 d-flex flex-column mb-3 mb-lg-0">
                        <label for="" class="mb-1 c-gray-900"> از تاریخ </label>
                        <input readonly type="text" name="input2" class="bg-input rounded-8 py-md-2" data-jdp />
                    </div>
                    <div class="col-12 col-lg-3 d-flex flex-column mb-3 mb-lg-0">
                        <label for="" class="mb-1 c-gray-900"> تا تاریخ</label>
                        <input readonly type="text" name="input2" class="bg-input rounded-8 py-md-2" data-jdp />
                    </div>
                    <div class="col-12 col-lg-3 d-flex flex-column mb-3 mb-lg-0">
                        <label for="" class="mb-1 c-gray-900"> نوع</label>
                        <input type="text" name="input2" class="bg-input rounded-8 py-md-2" />
                    </div>
                    <div class="col-12 col-lg-3 d-flex flex-column mb-3 mb-lg-0">
                        <label for="" class="mb-1 c-gray-900"> پرسنل</label>
                        <input type="text" name="input2" class="bg-input rounded-8 py-md-2" />
                    </div>
                </div>
                <button class="btn-primary-nahira text-nowrap" id="btn-request" btn-show-modal>
                    ثبت درخواست جدید
                </button>
            </div>
            <div class="overflow-x-scroll">
                <table class="col-12 mt-4 w-100">
                    <thead>
                        <tr>
                            <th class="c-gray-dark text-center text-nowrap p-2">
                                نام پرسنل
                            </th>
                            <th class="c-gray-dark text-center text-nowrap p-2">
                                نوع درخواست
                            </th>
                            <th class="c-gray-dark text-center text-nowrap p-2">
                                زمان شروع
                            </th>
                            <th class="c-gray-dark text-center text-nowrap p-2">
                                زمان پایان
                            </th>
                            <th class="c-gray-dark text-center text-nowrap p-2">
                                تاریخ ثبت
                            </th>
                            <th class="c-gray-dark text-center text-nowrap p-2">عملیات</th>
                        </tr>
                    </thead>
                    <tbody class=""table-request-manager data-check-empty-table ></tbody>
                </table>
            </div>
            <div class="d-none border-t-gray m-5 mx-0 mt-4 pt-5 d-flex flex-column align-items-center"data-emplty-table-massage>
                <p class="c-gray-dark2 text-nowrap pb-3">داده‌ای موجود نیست</p>
                <img src="{{ asset('images/Frame 29.svg') }}" alt="" class="no-data" />
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->
@endsection

@section('script')
<script src="{{asset('web/js/Pages/Manager/Request/index.js')}}" type="module"></script>

@endsection
