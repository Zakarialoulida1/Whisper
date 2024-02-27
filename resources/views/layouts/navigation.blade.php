<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="header header-two">
        <div class="header-left">
            <a href="dashboard.html" class="logo-one">
                <img src="assets/img/logo.png" width="35" height="35" alt>
            </a>
        </div>
        <a id="chat_toggle_btn" href="javascript:void(0);"><img src="assets/img/icon/bar-icon.svg" alt></a>
        <a id="mobile_btn_chat" class="mobile_btn_chat float-start" href="#sidebar"><img
                src="assets/img/icon/bar-icon.svg" alt></a>
        <div class="chat-menus chat-top-menu">
            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <span class="menu-side"><img src="assets/img/icon/menu-icon-01.svg" alt></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="blank-chat.html" class="active">
                        <span class="menu-side"><img src="assets/img/icon/menu-icon-02.svg" alt></span>
                        <span>Chats </span>
                    </a>
                </li>
                <li>
                    <a href="blank-channels.html">
                        <span class="menu-side"><img src="assets/img/icon/menu-icon-03.svg" alt></span>
                        <span>Groups</span>
                    </a>
                </li>
                <li>
                    <a href="blank-meet.html">
                        <span class="menu-side"><img src="assets/img/icon/menu-icon-04.svg" alt></span>
                        <span>Calls</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="top-nav-search mob-view">
            <form>
                <input type="text" class="form-control" placeholder="Find people, spaces, and messages">
                <a class="btn"><i class="feather-search"></i></a>
            </form>
        </div>
        <ul class="nav user-menu-head float-end">
            <li class="nav-item dropdown d-none d-sm-block">

                <!-- Settings Dropdown -->
                <div class=" sm:flex sm:items-center ">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </li>
            <li class="nav-item dropdown d-none d-sm-block">
                <a href="#" class="dropdown-toggle nav-link bg-box" data-bs-toggle="dropdown"><img
                        src="assets/img/icon/bell.svg" alt><span class="pulse"></span></a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span>Notifications</span>
                    </div>
                    <div class="drop-scroll">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="javascript:;">
                                    <div class="media">
                                        <span class="note-users flex-shrink-0">
                                            <img alt src="assets/img/profiles/avatar-02.jpg" class="img-fluid">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Patient appointment
                                                    booking</span></p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="javascript:;">
                                    <div class="media">
                                        <span class="note-users flex-shrink-0">
                                            <img alt src="assets/img/profiles/avatar-03.jpg" class="img-fluid">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Appointment booking
                                                    with payment gateway</span></p>
                                            <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="javascript:;">
                                    <div class="media">
                                        <span class="note-users flex-shrink-0">
                                            <img alt src="assets/img/profiles/avatar-04.jpg" class="img-fluid">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Doctor available
                                                    module</span></p>
                                            <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="javascript:;">
                                    <div class="media">
                                        <span class="note-users flex-shrink-0">
                                            <img alt src="assets/img/profiles/avatar-05.jpg" class="img-fluid">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Patient and Doctor
                                                    video conferencing</span></p>
                                            <p class="noti-time"><span class="notification-time">12 mins
                                                    ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="javascript:;">
                                    <div class="media">
                                        <span class="note-users flex-shrink-0">
                                            <img alt src="assets/img/profiles/avatar-06.jpg" class="img-fluid">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"> <span class="noti-title">Private chat
                                                    module</span></p>
                                            <p class="noti-time"><span class="notification-time">2 days ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="javascript:;">View all Notifications</a>
                    </div>
                </div>
            </li>
            <li class="nav-item d-none d-sm-block">
                <a href="javascript:void(0);" id="dark-mode-toggle" class="bg-box"><img
                        src="assets/img/icon/moon.svg" alt> </a>
            </li>
            <li class="nav-item dropdown has-arrow user-profile-list">
                <a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
                    <span class="user-img">
                        <img src="assets/img/profiles/avatar-01.jpg" alt="Admin">
                    </span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="index.html">Logout</a>
                </div>
            </li>
        </ul>
        <div class="dropdown mobile-user-menu float-end">
            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fa-solid fa-ellipsis-vertical"></i></a>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="index.html">Logout</a>
            </div>
        </div>
    </div>
   
</nav>
