<x-guest-layout>
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-6 p-0">

                    <div class="login-wrapper">
                        <div class="loginbox">
                            <div class="log-header">
                                <a href="javascript:void(0);" class="navbar-brand logo">
                                    <img src="assets/img/logo.png" class="img-fluid" width="35" alt="Logo">
                                    <span>Dreamschat</span>
                                </a>
                            </div>
                            <h1>Welcome to <span>Dreamschat</span> <br>Sign Up to gettings started.</h1>

                            <form method="POST" action="{{ route('register') }}" class="form-signin">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">


                                            <x-text-input placeholder="Email Address " id="email"
                                                class="block form-control mt-1 w-full" type="email" name="email"
                                                :value="old('email')" required autocomplete="username" />

                                            <span class="profile-views"><img src="assets/img/icon/mail-icon.svg"
                                                    alt></span>
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <x-text-input id="name"  class="block form-control mt-1 w-full" placeholder="Name" class="form-control" type="text"
                                                name="name" :value="old('name')" required autofocus
                                                autocomplete="name" />
                                            <span class="profile-views"><img src="assets/img/icon/user-login.svg"
                                                    alt></span>
                                        </div>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <x-text-input id="password" class="block mt-1 w-full form-control pass-input"
                                            type="password"
                                            name="password"
                                            placeholder="Password" required autocomplete="new-password" />
                
                                          
                                            <span class="profile-views feather-eye-off toggle-password"></span>
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
       
                                    </div>
                                   
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <x-text-input id="password_confirmation" class="form-control pass-confirm" 
                                            type="password"
                                            name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password" />
                
                                       <span class="profile-views feather-eye-off reg-toggle-password"></span>
                                        </div>
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
      
                                    </div>
                       
                                 
                                    <div class="d-grid">
                                        <x-primary-button class="ms-4" class="btn btn-primary btn-signin" type="submit">Sign Up</x-primary-button>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                        
                    
                                </div>
                               <div class="login-or">
                                    <p class="span-or">or</p>
                                </div>

                                <div class="social-login">
                                    <a href="{{route('google-auth')}}"><img src="assets/img/google.png" class="img-fluid"
                                            alt="Logo"></a>
                                    <a href="{{route('facebook-auth')}}"><img src="assets/img/fb.png" class="img-fluid" alt="Logo"></a>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-xl-6 login-bg">
                    <div class="login-banner"></div>
                </div>

            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js" type="30b19d594ba7c552d13d9617-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="30b19d594ba7c552d13d9617-text/javascript"></script>

    <script src="assets/js/script.js" type="30b19d594ba7c552d13d9617-text/javascript"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="30b19d594ba7c552d13d9617-|49" defer></script>
</x-guest-layout>
