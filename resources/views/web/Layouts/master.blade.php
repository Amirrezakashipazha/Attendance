<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    @include('web.layouts.head-tag')
    @yield('head-tag')
</head>

<body dir="rtl">
    <div class="bg-dark"></div>
    {{-- @include('web.layouts.header', ['TitleHeader' => 'حضور و غیاب', 'CaptionHeader' => '']) --}}
    @yield('header')
    @include('web.layouts.side-bar')
    <section class="col-12 col-sm-10 container-nahira">
        <section id="main-body" class="main-body col-12">
            @yield('content')
        </section>
    </section>


    {{-- @include('web.layouts.script') --}}
    @yield('script')
   
    <script type="module" src="../web/js/index.js"></script>
</body>

</html>
