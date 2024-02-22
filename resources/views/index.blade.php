<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


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
                                <h1>Welcome to <span>Dreamschat</span> <br>Get’s Started</h1>
                                <form
                                    action="https://dreamschat.dreamstechnologies.com/template-html/template-videocall/dashboard.html"
                                    class="form-signin">
                                    <div class="form-group">
                                       
                                       <x-text-input id="email" class=" form-control " type="email" placeholder='Email' name="email" :value="old('email')" required autofocus autocomplete="username" />
                                       <span class="profile-views"><img src="assets/img/icon/mail-icon.svg" alt></span>
                                      
                                    
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                  
                                    <div class="form-group">
                                    <x-text-input id="password" class="form-control pass-input"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
              <span class="profile-views feather-eye-off toggle-password"></span>
                                      
                                
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                   
                          
                                    <div class="form-group">
                                       
                                        @if (Route::has('password.request'))
                                        <a class="orgot-link underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                    </div>
                                    
                                    <div class="flex items-center justify-end mt-4">
                                     
                            
                                        <x-primary-button class="btn btn-primary btn-signin">
                                            {{ __('Log in') }}
                                        </x-primary-button>
                                    </div>
                                    <div class="login-or">
                                        <p class="span-or">or</p>
                                    </div>

                                    <div class="social-login">
                                        <a href="{{route('google-auth')}}"><img src="assets/img/google.png" class="img-fluid"
                                                alt="Logo"></a>
                                        <a href="{{route('facebook-auth')}}"><img src="assets/img/fb.png" class="img-fluid"
                                                alt="Logo"></a>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-6 login-bg">
                        <div class="login-banner">
                        </div>
                    </div>

                </div>
            </div>
        </div>

</x-guest-layout>
