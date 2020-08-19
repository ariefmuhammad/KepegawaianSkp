<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @include('admin.template_partial.meta')
        <link href="/iniTemplate/dist/favicon.png" rel="shortcut icon">
        <link href="/iniTemplate/dist/apple-touch-icon.png" rel="apple-touch-icon">
        @include('admin.template_partial.css')
    </head>
    <body class="menu-position-side menu-side-left full-screen with-content-panel">
        <div class="all-wrapper with-side-panel solid-bg-all">
            <div class="layout-w">
                @include('admin.template_partial.mobile')
                @include('admin.template_partial.sidebar')
            <div class="content-w">
            {{-- title content --}}
            <div class="top-bar color-scheme-transparent masariuman-height103px">
                <div class="top-menu-controls masariuman-marginleft30px">
                    <div class="icon-w top-icon masariuman-titlecontent">
                    <div class="os-icon os-icon-layout"></div>
                    </div>
                    <div class="masariuman-textleft">
                        <span class="masariuman-bold">BERANDA</span> <br/>
                        <small>ini adalah beranda</snall>
                    </div>
                </div>
                <div class="top-menu-controls">
                    <button class="mr-2 mb-2 btn btn-outline-secondary" type="button"><i class="batch-icon-bulb-2"></i> PETUNJUK <i class="batch-icon-bulb"></i></button>
                </div>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="index.html">Products</a>
                </li>
                <li class="breadcrumb-item">
                    <span>Laptop with retina screen</span>
                </li>
            </ul>
            {{-- end title content --}}
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper">
                        <div class="element-box">
                            @yield('content')
                        </div>
                    </div>
                    {{-- mode malam --}}
                    <div class="floated-colors-btn floated-chat-btn">
                        <div class="os-toggler-w">
                            <div class="os-toggler-i">
                                <div class="os-toggler-pill"></div>
                            </div>
                        </div>
                        <span>Mode </span><span>Malam</span>
                    </div>
                    {{-- end mode malam --}}
                </div>
            </div>
            <div class="top-bar color-scheme-light">Footer</div>
        </div>
    @include('admin.template_partial.js')
  </body>
</html>
