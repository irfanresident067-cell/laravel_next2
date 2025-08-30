<!DOCTYPE html>
<html lang="en" >
    <!--begin::Head-->
    <head>
        <title>Login Aplikasi</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="shortcut icon" href="/metronic8/demo1/assets/media/logos/favicon.ico"/>
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="/metronic8/demo1/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
        <link href="/metronic8/demo1/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
        <!--end::Global Stylesheets Bundle-->
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="app-blank" >
        <!--begin::Theme mode setup on page load-->
        <script>
            if ( document.documentElement ) {
                const themeMode = "light";
                document.documentElement.setAttribute("data-bs-theme", themeMode);
            }
        </script>
        <!--end::Theme mode setup on page load-->

        <!--begin::Root-->
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <!--begin::Body-->
                <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                    <!--begin::Form-->
                    <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                        <!--begin::Wrapper-->
                        <div class="w-lg-500px p-10">
                            <!--begin::Form-->
                            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{ route('login') }}">
                                @csrf <!-- LARAVEL CSRF TOKEN -->
                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <h1 class="text-gray-900 fw-bolder mb-3">
                                        Sign In
                                    </h1>
                                    <!--end::Title-->
                                    <!--begin::Subtitle-->
                                    <div class="text-gray-500 fw-semibold fs-6">
                                        Selamat Datang, silahkan login
                                    </div>
                                    <!--end::Subtitle--->
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Separator-->
                                <div class="separator separator-content my-14">
                                    <span class="w-125px text-gray-500 fw-semibold fs-7">Login dengan email</span>
                                </div>
                                <!--end::Separator-->

                                <!-- Display General Errors -->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                <!--begin::Input group--->
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" value="{{ old('email') }}" required autofocus/>
                                    <!--end::Email-->
                                </div>

                                <!--end::Input group--->
                                <div class="fv-row mb-3">
                                    <!--begin::Password-->
                                    <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" required/>
                                    <!--end::Password-->
                                </div>
                                <!--end::Input group--->

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                    <div></div>

                                    <!--begin::Link-->
                                    <a href="#" class="link-primary">
                                        Lupa Password ?
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Submit button-->
                                <div class="d-grid mb-10">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                        <span class="indicator-label">Sign In</span>
                                    </button>
                                </div>
                                <!--end::Submit button-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Body-->

                <!--begin::Aside-->
                <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(/metronic8/demo1/assets/media/misc/auth-bg.png)">
                    <!--begin::Content-->
                    <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                        <!--begin::Logo-->
                        <a href="#" class="mb-0 mb-lg-12">
                            <img alt="Logo" src="/metronic8/demo1/assets/media/logos/custom-1.png" class="h-60px h-lg-75px"/>
                        </a>
                        <!--end::Logo-->

                        <!--begin::Image-->
                        <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="/metronic8/demo1/assets/media/misc/auth-screens.png" alt=""/>
                        <!--end::Image-->

                        <!--begin::Title-->
                        <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
                            Fast, Efficient and Productive
                        </h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Aside-->
            </div>
            <!--end::Authentication - Sign-in-->
        </div>
        <!--end::Root-->

        <!--begin::Javascript-->
        <script src="/metronic8/demo1/assets/plugins/global/plugins.bundle.js"></script>
        <script src="/metronic8/demo1/assets/js/scripts.bundle.js"></script>
        <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>
