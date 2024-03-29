<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamschat.dreamstechnologies.com/template-html/template-videocall/chats.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 09:20:23 GMT -->
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
<h4>Chats<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#add-contact"><i class="feather-plus"></i></a></h4>
</li>
<li>
<div class="side-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<a class="btn"><i class="feather-search"></i></a>
</form>
</div>
</li>
<li>
<div class="chat-user-actives active">
<a href="chats.html" class="d-flex align-items-center">
<div class="chat-call-user">
<img src="assets/img/profiles/avatar-02.jpg" alt="img">
<span class="active-users bg-green"></span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles d-flex">
<h5>Dickerson</h5>
</div>
<div class="recent-user-text d-flex">
<p>It seems logical that the</p>
</div>
</div>
</a>
</div>
</li>
<li>
<div class="chat-user-actives">
<a href="chats.html" class="d-flex align-items-center">
<div class="chat-call-user">
<img src="assets/img/profiles/avatar-04.jpg" alt="img">
<span class="active-users bg-green"></span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles d-flex">
<h5>Forest Kroch</h5>
</div>
<div class="recent-user-text d-flex">
<p>It seems logical that the</p>
</div>
</div>
</a>
</div>
</li>
<li>
<div class="chat-user-actives">
<a href="chats.html" class="d-flex align-items-center">
<div class="chat-call-user">
<img src="assets/img/profiles/avatar-05.jpg" alt="img">
<span class="active-users bg-green"></span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles d-flex">
<h5>Townsend Seary</h5>
</div>
<div class="recent-user-text d-flex">
<p>It seems logical that the</p>
</div>
</div>
</a>
</div>
</li>
<li>
<div class="chat-user-actives">
<a href="chats.html" class="d-flex align-items-center">
<div class="chat-call-user">
<img src="assets/img/profiles/avatar-06.jpg" alt="img">
<span class="active-users bg-green"></span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles d-flex">
<h5>Margaretta Worvell</h5>
</div>
<div class="recent-user-text d-flex">
<p>It seems logical that the</p>
</div>
</div>
</a>
</div>
</li>
<li>
<div class="chat-user-actives">
<a href="chats.html" class="d-flex align-items-center">
<div class="chat-call-user">
<img src="assets/img/profiles/avatar-08.jpg" alt="img">
<span class="active-users bg-green"></span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles d-flex">
<h5>Harald Kowalski</h5>
</div>
<div class="recent-user-text d-flex">
<p>It seems logical that the</p>
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

<div class="card chat-empty card-comman ">
<div class="card-body p-0">
<div class="chat-body-group">

<div class="chat-body-blk">
<div class="chat-body-sub-blk">
<div class="nav-item dropdown has-arrow user-chat-list">
<a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown" aria-expanded="false">
<span class="user-img-chat"><img src="assets/img/profiles/avatar-04.jpg" width="40" alt="Admin">
<span class="status online"></span>
</span>
<div class="user-names-chat">
<h5>Dickerson</h5>
<p><span class="profile-active me-1"></span>Active</p>
</div>
</a>
<div class="dropdown-menu profile-sub-list" style>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-01.svg" alt></span>Mark as unread</a>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-02.svg" alt></span>Add New Channel</a>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-03.svg" alt></span>New Meeting</a>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-04.svg" alt></span>Hide conversation</a>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-05.svg" alt></span>Delete conversation</a>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-06.svg" alt></span>Block</a>
</div>
</div>
<div class="sub-list-search">
<a href="javascript:;" class="chat-search-btn"><i class="feather-search"></i></a>
</div>
</div>
<div class="chat-search-blk">
<form>
<span class="fas fa-search form-control-feedback"></span>
<input type="text" name="chat-search" placeholder="Search Chats" class="form-control">
<div class="close-btn-chat"><span class="material-icons">close</span></div>
</form>
</div>
</div>

<ul class="list-unstyled chat-message">
<li class="media d-flex sent">
<div class="media-body flex-grow-1">
<div class="avatar flex-shrink-0">
<img src="assets/img/profiles/avatar-02.jpg" alt="User Image" class="avatar-img ">
</div>
<div class="msg-box">
<div class="message-sub-box">
<div class="user-dot-blk">
<h4>Forest Kroch</h4>
<div class="drop-item chat-dot-list">
<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="dot-icon">
<i class="feather-more-vertical"></i>
</a>
<div class="dropdown-menu" style>
<a class="dropdown-item" href="javascript:;"><i class="feather-user me-2 text-primary"></i> Profile</a>
<a class="dropdown-item" href="javascript:;"><i class="feather-plus-circle me-2 text-success"></i> Archive</a>
<a class="dropdown-item" href="javascript:;"><i class="feather-trash-2 me-2 text-danger"></i> Delete</a>
<a class="dropdown-item " href="javascript:;"><i class="feather-slash me-2 text-secondary"></i> Block</a>
</div>
</div>
</div>
<p>Hi Dickerson! What’s Up?</p>
<span>11:35 AM <img src="assets/img/icon/read-check.svg" alt></span>
</div>
</div>
</div>
</li>
<li class="media d-flex received">
<div class="avatar flex-shrink-0">
<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img">
</div>
<div class="media-body flex-grow-1">
<div class="msg-box">
<div class="message-sub-box">
<div class="user-dot-blk">
<h4>Dickerson</h4>
<div class="drop-item chat-dot-list">
<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="dot-icon">
<i class="feather-more-vertical"></i>
</a>
<div class="dropdown-menu" style>
<a class="dropdown-item" href="javascript:;"><i class="feather-user me-2 text-primary"></i> Profile</a>
<a class="dropdown-item" href="javascript:;"><i class="feather-plus-circle me-2 text-success"></i> Archive</a>
<a class="dropdown-item" href="javascript:;"><i class="feather-trash-2 me-2 text-danger"></i> Delete</a>
<a class="dropdown-item " href="javascript:;"><i class="feather-slash me-2 text-secondary"></i> Block</a>
</div>
</div>
</div>
<p>Hi James! What’s Up?</p>
<span>11:35 AM</span>
</div>
</div>
</div>
</li>
<li class="media d-flex received">
<div class="avatar flex-shrink-0">
<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img">
</div>
<div class="media-body flex-grow-1">
<div class="msg-box">
<div class="message-sub-box">
<div class="user-dot-blk">
<h4>Dickerson</h4>
<div class="drop-item chat-dot-list">
<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="dot-icon">
<i class="feather-more-vertical"></i>
</a>
<div class="dropdown-menu" style>
<a class="dropdown-item" href="javascript:;"><i class="feather-user me-2 text-primary"></i> Profile</a>
<a class="dropdown-item" href="javascript:;"><i class="feather-plus-circle me-2 text-success"></i> Archive</a>
<a class="dropdown-item" href="javascript:;"><i class="feather-trash-2 me-2 text-danger"></i> Delete</a>
<a class="dropdown-item " href="javascript:;"><i class="feather-slash me-2 text-secondary"></i> Block</a>
</div>
</div>
</div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
<span>11:35 AM</span>
</div>
</div>
</div>
</li>
<li class="media d-flex received">
<div class="avatar flex-shrink-0">
<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img">
</div>
<div class="media-body flex-grow-1">
<div class="msg-box">
<div class="message-sub-box">
<div class="user-dot-blk">
<h4>Dickerson</h4>
<div class="drop-item chat-dot-list">
<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="dot-icon">
<i class="feather-more-vertical"></i>
</a>
<div class="dropdown-menu" style>
<a class="dropdown-item" href="javascript:;"><i class="feather-user me-2 text-primary"></i> Profile</a>
<a class="dropdown-item" href="javascript:;"><i class="feather-plus-circle me-2 text-success"></i> Archive</a>
<a class="dropdown-item" href="javascript:;"><i class="feather-trash-2 me-2 text-danger"></i> Delete</a>
<a class="dropdown-item " href="javascript:;"><i class="feather-slash me-2 text-secondary"></i> Block</a>
</div>
</div>
</div>
<p>Hi James! What’s Up?</p>
<span>11:35 AM</span>
</div>
</div>
</div>
</li>
<li class="media d-flex sent">
<div class="media-body flex-grow-1">
<div class="msg-box">
<div class="avatar flex-shrink-0">
<img src="assets/img/profiles/avatar-02.jpg" alt="User Image" class="avatar-img">
</div>
<div class="message-sub-box">
<div class="user-dot-blk">
<h4>Forest Kroch</h4>
<div class="drop-item chat-dot-list">
<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="dot-icon">
<i class="feather-more-vertical"></i>
</a>
<div class="dropdown-menu" style>
<a class="dropdown-item" href="javascript:;"><i class="feather-user me-2 text-primary"></i> Profile</a>
<a class="dropdown-item" href="javascript:;"><i class="feather-plus-circle me-2 text-success"></i> Archive</a>
<a class="dropdown-item" href="javascript:;"><i class="feather-trash-2 me-2 text-danger"></i> Delete</a>
<a class="dropdown-item " href="javascript:;"><i class="feather-slash me-2 text-secondary"></i> Block</a>
</div>
</div>
</div>
<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
<span>11:35 AM <img src="assets/img/icon/read-check.svg" alt></span>
</div>
</div>
</div>
</li>
<li class="media d-flex sent">
<div class="media-body flex-grow-1">
<div class="avatar flex-shrink-0">
<img src="assets/img/profiles/avatar-02.jpg" alt="User Image" class="avatar-img">
</div>
<div class="msg-box">
<div class="message-sub-box">
<div class="user-dot-blk">
<h4>Forest Kroch</h4>
<div class="drop-item chat-dot-list">
<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="dot-icon">
<i class="feather-more-vertical"></i>
</a>
<div class="dropdown-menu" style>
<a class="dropdown-item" href="javascript:;"><i class="feather-user me-2 text-primary"></i> Profile</a>
<a class="dropdown-item" href="javascript:;"><i class="feather-plus-circle me-2 text-success"></i> Archive</a>
<a class="dropdown-item" href="javascript:;"><i class="feather-trash-2 me-2 text-danger"></i> Delete</a>
<a class="dropdown-item " href="javascript:;"><i class="feather-slash me-2 text-secondary"></i> Block</a>
</div>
</div>
</div>
<p>It has survived not only five centuries, </p>
<span>11:35 AM <img src="assets/img/icon/read-check.svg" alt></span>
</div>
</div>
</div>
</li>
<li class="media d-flex received">
<div class="avatar flex-shrink-0">
<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img">
</div>
<div class="media-body flex-grow-1">
<div class="msg-box">
<div class="message-sub-box">
<div class="user-dot-blk">
<h4>Dickerson</h4>
<div class="drop-item chat-dot-list">
<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="dot-icon">
<i class="feather-more-vertical"></i>
</a>
<div class="dropdown-menu" style>
<a class="dropdown-item" href="javascript:;"><i class="feather-user me-2 text-primary"></i> Profile</a>
<a class="dropdown-item" href="javascript:;"><i class="feather-plus-circle me-2 text-success"></i> Archive</a>
<a class="dropdown-item" href="javascript:;"><i class="feather-trash-2 me-2 text-danger"></i> Delete</a>
<a class="dropdown-item " href="javascript:;"><i class="feather-slash me-2 text-secondary"></i> Block</a>
</div>
</div>
</div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
<span>11:35 AM</span>
</div>
</div>
</div>
</li>
</ul>
</div>
<div class="chat-footer">
<div class="row gx-2">
<div class="col-lg-12 col-sm-12">
<div class="footer-discussion">
<div class="inputgroups">
<input type="text" placeholder="Type Message...">
<div class="send-chat position-icon">
<a href="javascript:;"><img src="assets/img/icon/send.svg" alt></a>
</div>
<div class="symple-text position-icon">
<ul>
<li><a href="javascript:;"><img src="assets/img/icon/chat-foot-icon-01.svg" class="me-3" alt></a></li>
<li><a href="javascript:;"><img src="assets/img/icon/chat-foot-icon-02.svg" class="me-3" alt></a></li>
<li><a href="javascript:;"><img src="assets/img/icon/chat-foot-icon-03.svg" class="me-3" alt></a></li>
<li><a href="javascript:;"><img src="assets/img/icon/chat-foot-icon-04.svg" alt></a></li>
</ul>
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
</div>


<div class="modal fade dream-modal" id="add-contact">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">
Add Contact
</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span class="material-icons">close</span>
</button>
</div>
<div class="modal-body">

<form action="https://dreamschat.dreamstechnologies.com/template-html/template-videocall/new-friends">
<div class="form-group">
<label>Name</label>
<input class="form-control form-control" name="new-chat-title" type="text">
</div>
<div class="form-group">
<label>Nickname</label>
<input class="form-control form-control" name="new-chat-title" type="text">
</div>
<div class="form-group">
<label>Phone Number</label>
<input class="form-control form-control" name="new-chat-title" type="text">
</div>
<div class="form-group">
<label>Email</label>
<input class="form-control form-control " name="new-chat-title" type="email">
</div>
</form>

<div class="form-row profile_form text-end float-end m-0 align-items-center">
<div class="newgroup_create">
<button type="button" class="btn btn-primary mb-0" data-bs-dismiss="modal" aria-label="Close">
Add to contacts
</button>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js" type="25a8358c705efe804e240f98-text/javascript"></script>

<script src="assets/js/jquery.slimscroll.js" type="25a8358c705efe804e240f98-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="25a8358c705efe804e240f98-text/javascript"></script>

<script src="assets/js/script.js" type="25a8358c705efe804e240f98-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="25a8358c705efe804e240f98-|49" defer></script></body>

<!-- Mirrored from dreamschat.dreamstechnologies.com/template-html/template-videocall/chats.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 09:20:24 GMT -->
</html>