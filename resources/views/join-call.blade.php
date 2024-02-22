<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamschat.dreamstechnologies.com/template-html/template-videocall/join-call.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 09:20:22 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Dreams Chat - Html Template</title>

<link rel="icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">
<div class="header header-two">
<div class="header-left">
<a href="dashboard.html" class="logo-one">
<img src="assets/img/logo.png" width="35" height="35" alt>
</a>
</div>
<a id="chat_toggle_btn" href="javascript:void(0);"><img src="assets/img/icon/bar-icon.svg" alt></a>
<a id="mobile_btn_chat" class="mobile_btn_chat float-start" href="#sidebar"><img src="assets/img/icon/bar-icon.svg" alt></a>
<div class="chat-menus chat-top-menu">
<ul class="nav">
<li>
<a href="dashboard.html">
<span class="menu-side"><img src="assets/img/icon/menu-icon-01.svg" alt></span>
<span>Dashboard</span>
</a>
</li>
<li>
<a href="blank-chat.html">
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
<a href="blank-meet.html" class="active">
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
<div class="book-view">
<div class="book-dropdown">
<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
<i class="fas fa-circle me-2 green-status"></i> Active
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="javascript:void(0);">
<i class="fas fa-circle me-2 green-status"></i> Active
</a>
<a class="dropdown-item" href="javascript:void(0);">
<i class="fas fa-circle me-2 red-status"></i> In Active
</a>
</div>
</div>
</div>
</li>
<li class="nav-item dropdown d-none d-sm-block">
<a href="#" class="dropdown-toggle nav-link bg-box" data-bs-toggle="dropdown"><img src="assets/img/icon/bell.svg" alt><span class="pulse"></span></a>
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
<p class="noti-details"><span class="noti-title">Patient appointment booking</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
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
<p class="noti-details"><span class="noti-title">Appointment booking with payment gateway</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
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
<p class="noti-details"><span class="noti-title">Doctor available module</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
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
<p class="noti-details"><span class="noti-title">Patient and Doctor video conferencing</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
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
<p class="noti-details"> <span class="noti-title">Private chat module</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
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
<a href="javascript:void(0);" id="dark-mode-toggle" class="bg-box"><img src="assets/img/icon/moon.svg" alt> </a>
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
<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></a>
<div class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="index.html">Logout</a>
</div>
</div>
</div>
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu-one" class="sidebar-menu-one">
<ul>
<li class="chats-add">
<h4>Meetings<a href="javascript:;"><img src="assets/img/icon/refresh.svg" alt="img"></a></h4>
</li>
<li>
<div class="side-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<a class="btn"><i class="feather-search"></i></a>
</form>
</div>
</li>
<li class="join-new-meet">
<a href="join-call.html"><span class="meet-new-icon"><img src="assets/img/icon/meet-icon-01.svg" alt="img"></span><span class="meet-text">New Meeting</span></a>
</li>
<li class="join-new-meet">
<a href="join-call.html"><span class="meet-new-icon"><img src="assets/img/icon/meet-icon-02.svg" alt="img"></span><span class="meet-text">Join a Meeting</span></a>
</li>
<li>
<div class="chat-user-actives active">
<a href="join-call.html" class="d-flex align-items-center">
<div class="chat-call-user meet-border">
<span class="letter-avatar"><img src="assets/img/icon/calendar.svg" alt="img"></span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles">
<h5>Effective Forms Advertising...</h5>
<p>It seems logical that the</p>
<p>1:00 PM - 2:00 PM</p>
</div>
</div>
</a>
</div>
</li>
<li>
<div class="chat-user-actives">
<a href="join-call.html" class="d-flex align-items-center">
<div class="chat-call-user meet-border">
<span class="letter-avatar"><img src="assets/img/icon/calendar.svg" alt="img"></span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles">
<h5>Get Best Advertising idea...</h5>
<p>It seems logical that the</p>
<p>1:00 PM - 2:00 PM</p>
</div>
</div>
</a>
</div>
</li>
<li>
<div class="chat-user-actives">
<a href="join-call.html" class="d-flex align-items-center">
<div class="chat-call-user meet-border">
<span class="letter-avatar"><img src="assets/img/icon/calendar.svg" alt="img"></span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles">
<h5>Morning Status Call</h5>
<p>It seems logical that the</p>
<p>1:00 PM - 2:00 PM</p>
</div>
</div>
</a>
</div>
</li>
<li>
<div class="chat-user-actives">
<a href="join-call.html" class="d-flex align-items-center">
<div class="chat-call-user meet-border">
<span class="letter-avatar"><img src="assets/img/icon/calendar.svg" alt="img"></span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles">
<h5>Evening EOD Call</h5>
<p>It seems logical that the</p>
<p>1:00 PM - 2:00 PM</p>
</div>
</div>
</a>
</div>
</li>
<li>
<div class="chat-user-actives">
<a href="join-call.html" class="d-flex align-items-center">
<div class="chat-call-user meet-border">
<span class="letter-avatar"><img src="assets/img/icon/calendar.svg" alt="img"></span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles">
<h5>New Project Discussion</h5>
<p>It seems logical that the</p>
<p>1:00 PM - 2:00 PM</p>
</div>
</div>
</a>
</div>
</li>
<li>
<div class="chat-user-actives">
<a href="join-call.html" class="d-flex align-items-center">
<div class="chat-call-user meet-border">
<span class="letter-avatar"><img src="assets/img/icon/calendar.svg" alt="img"></span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles">
<h5>Effective Forms Advertising...</h5>
<p>It seems logical that the</p>
<p>1:00 PM - 2:00 PM</p>
</div>
</div>
</a>
</div>
</li>
<li>
<div class="chat-user-actives">
<a href="join-call.html" class="d-flex align-items-center">
<div class="chat-call-user meet-border">
<span class="letter-avatar"><img src="assets/img/icon/calendar.svg" alt="img"></span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles">
<h5>Get Best Advertising idea...</h5>
<p>It seems logical that the</p>
<p>1:00 PM - 2:00 PM</p>
</div>
</div>
</a>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="page-wrapper-chat">
<div class="content">
<div class="row">
<div class="col-xl-12">

<div class="card chat-empty card-comman">
<div class="card-body p-0">
<div class="chat-body meet-chat-blk">
<div class="join-call">
<div class="join-video">
<img src="assets/img/video-call.jpg" class="img-fluid" alt="Logo">
<div class="video-avatar"><h4>Camera is off</h4></div>
<div class="call-icons">
<ul class="call-items">
<li class="call-item">
<a class="mute-bt" href="#" title data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Mute Audio">
<i class="feather-mic"></i>
</a>
</li>
<li class="call-item">
<a class="mute-video" href="#" title data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Stop Camera">
<i class="feather-video"></i>
</a>
</li>
</ul>
</div>
</div>
<div class="join-content">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="form-control-label">Morning Status Call</label>
</div>
</div>
</div>
<p>Enter a meeting nickname or the code provided by the meeting organizer</p>
<div class="btn-infos">
<a href="meetingcall-horizontal.html" class="btn btn-primary btn-join">Join Now</a>
<div class="d-flex align-items-center">
<span class="icon-mic"><i class="feather-mic"></i></span> <span>Your microphone is working properly</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js" type="af6bcf88a0822add169a443c-text/javascript"></script>

<script src="assets/js/jquery.slimscroll.js" type="af6bcf88a0822add169a443c-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="af6bcf88a0822add169a443c-text/javascript"></script>

<script src="assets/js/script.js" type="af6bcf88a0822add169a443c-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="af6bcf88a0822add169a443c-|49" defer></script></body>

<!-- Mirrored from dreamschat.dreamstechnologies.com/template-html/template-videocall/join-call.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 09:20:23 GMT -->
</html>