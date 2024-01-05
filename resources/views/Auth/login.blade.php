{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>PLENTITUDE ENERGY GAS</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/src/assets/img/favicon0.ico')}}"/>
    <link href="{{asset('/layouts/collapsible-menu/css/light/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/layouts/collapsible-menu/css/dark/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('/layouts/collapsible-menu/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="{{asset('/layouts/collapsible-menu/css/light/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/src/assets/css/light/authentication/auth-boxed.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('/layouts/collapsible-menu/css/dark/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/src/assets/css/dark/authentication/auth-boxed.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

</head>
<body class="form">

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <div class="auth-container d-flex">

        <div class="container mx-auto align-self-center">

            <div class="row">

                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="text-center" >
                                {{-- <img src="{{asset('/src/assets/img/Logo.png')}}" alt="img" width="125px"> --}}
                                <img src="{{asset('/src/assets/img/product-7.jpg')}}" alt="img" width="150px">
                            </div>
                                <div class="col-md-12 text-center">
                                    <h2>Sign In</h2>
                                    <h6 style="color: #11d67a">Enter your email and password to login</h6>
                                </div>
                                @if ($errors->any())
                                <div class="font-medium text-red-600" style="color: red">{{ __('Whoops! Something went wrong.') }}</div>
                                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input   id="email" placeholder="Email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label">Password</label>
                                            <input  id="password" placeholder="Password"  class="form-control" type="password" name="password" required autocomplete="current-password" />

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <button class="btn btn-secondary w-100">{{ __('Log in') }}</button>
                                        </div>
                                    </div>
                                    {{-- <div class="col-12">
                                        <div class="">
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                                <label class="form-check-label" for="form-check-default">
                                                    {{ __('Remember me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="form-login">
                                        <div class="alreadyuser mb-3" style="text-align: right">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-12">
                                        <div class="mb-3">
                                            <div class="" style="text-align: right;">
                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div> --}}
                                </form>

                                {{-- <div class="col-12 mb-4">
                                    <div class="">
                                        <div class="seperator">
                                            <hr>
                                            <div class="seperator-text"> <span>Or continue with</span></div>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100 ">
                                            <img src="../src/assets/img/google-gmail.svg" alt="" class="img-fluid">
                                            <span class="btn-text-inner">Google</span>
                                        </button>
                                    </div>
                                </div> --}}

                                {{-- <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100">
                                            <img src="../src/assets/img/github-icon.svg" alt="" class="img-fluid">
                                            <span class="btn-text-inner">Github</span>
                                        </button>
                                    </div>
                                </div> --}}

                                {{-- <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100">
                                            <img src="../src/assets/img/twitter.svg" alt="" class="img-fluid">
                                            <span class="btn-text-inner">Twitter</span>
                                        </button>
                                    </div>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->


</body>
</html>

