<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamschat.dreamstechnologies.com/template-html/template-videocall/channel-file.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 09:20:30 GMT -->
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
<a href="blank-channels.html" class="active">
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
<h4>Channel<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#add-new-group"><i class="feather-plus"></i></a></h4>
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
<a href="channels.html" class="d-flex align-items-center">
<div class="chat-call-user">
<span class="letter-avatar bg-light-blue">F</span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles d-flex">
<h5>Fashion Plus</h5>
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
<a href="channels.html" class="d-flex align-items-center">
<div class="chat-call-user ">
<span class="letter-avatar bg-light-gray">T</span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles d-flex">
<h5>Tech Support</h5>
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
<a href="channels.html" class="d-flex align-items-center">
<div class="chat-call-user">
<span class="letter-avatar bg-decor">H</span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles d-flex">
<h5>Home Decor</h5>
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
<a href="channels.html" class="d-flex align-items-center">
<div class="chat-call-user">
<span class="letter-avatar bg-interior">I</span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles d-flex">
<h5>Interior Design</h5>
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
<a href="channels.html" class="d-flex align-items-center">
<div class="chat-call-user">
<span class="letter-avatar bg-photo">P</span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles d-flex">
<h5>Photography</h5>
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
<a href="channels.html" class="d-flex align-items-center">
<div class="chat-call-user">
<span class="letter-avatar bg-inspir">P</span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles d-flex">
<h5>Inspiration</h5>
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
<a href="channels.html" class="d-flex align-items-center">
<div class="chat-call-user">
<span class="letter-avatar bg-art">A</span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles d-flex">
<h5>Artwork</h5>
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
<a href="channels.html" class="d-flex align-items-center">
<div class="chat-call-user">
<span class="letter-avatar bg-handmade">H</span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles d-flex">
<h5>Handmade</h5>
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
<a href="channels.html" class="d-flex align-items-center">
<div class="chat-call-user">
<span class="letter-avatar bg-light-orange">D</span>
</div>
<div class="chat-users-recent">
<div class="recent-user-titles d-flex">
<h5>Design Inspiration</h5>
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
<div class="chat-body-group channel-body-grp">

<div class="chat-body-blk mb-0">
<div class="chat-body-sub-blk chennel-body">
<div class="nav-item dropdown has-arrow user-chat-list">
<a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown" aria-expanded="false">
<div class="chat-call-user">
<span class="letter-avatar bg-light-blue">F</span>
</div>
<div class="user-names-chat">
<h5>Fashion Plus</h5>
</div>
</a>
<div class="dropdown-menu profile-sub-list">
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-02.svg" alt></span>Add New Contact</a>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-01.svg" alt></span>Mark as unread</a>
<a class="dropdown-item" href="join-call.html"><span><img src="assets/img/icon/profile-icon-03.svg" alt></span>New Meeting</a>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/arrow-down-left.svg" alt></span>Leave</a>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-06.svg" alt></span>Block this channel</a>
</div>
</div>
<div class="channel-group">
<div class="chennels-img-blk">
<img src="assets/img/profiles/avatar-04.jpg" width="24" alt>
</div>
<div class="chennels-img-blk">
<img src="assets/img/profiles/avatar-02.jpg" width="24" alt>
</div>
<div class="chennels-img-blk">
<img src="assets/img/profiles/avatar-03.jpg" width="24" alt>
</div>
<div class="chennels-img-blk">
<img src="assets/img/profiles/avatar-01.jpg" width="24" alt>
</div>
<div class="chennels-invite">
<a href="javascript:;" class="btn btn-primary">+ Invite</a>
</div>
</div>
<div class="sub-list-search">
<a href="javascript:;" class="chat-search-btn"><i class="feather-search"></i></a>
</div>
</div>
<div class="chat-file-blk">
<a href="channels.html" class="btn btn-primary ">Chat</a>
<a href="blank-files.html" class="btn btn-primary active-btns">Files</a>
</div>
<div class="channel-add-file">
<a href="channel-file.html" class="btn btn-primary"><span><i class="feather-upload"></i></span>Add File</a>
</div>
<div class="chat-search-blk">
<form>
<span class="fas fa-search form-control-feedback"></span>
<input type="text" name="chat-search" placeholder="Search Chats" class="form-control">
<div class="close-btn-chat"><span class="material-icons">close</span></div>
</form>
</div>
<div class="table-responsive">
<table class="table border channel-table table-center mb-0">
<thead>
<tr>
<th>File</th>
<th>Upload by</th>
<th>Upload details</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td><img src="assets/img/icon/table-icon-01.svg" alt> Sales Reports.xlsx</td>
<td>
<h2 class="channel-table-avatar">
<a href="javascript:;" class="avatar  me-2"><img class="avatar-img" width="25" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
<a href="javascript:;">Dickerson</a>
</h2>
</td>
<td>Monday, Oct 4 | 235 KB</td>
<td class="text-end">
<div class="drop-item chat-dot-list">
<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="dot-icon">
<i class="feather-more-vertical"></i>
</a>
<div class="dropdown-menu profile-sub-list">
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-01.svg" alt></span>View in Chat</a>
<a class="dropdown-item group-file-download" href="javascript:;"><span><i class="feather-download"></i></span>Download</a>
<a class="dropdown-item" href="javascript:;"><span><i class="feather-edit-3"></i></span>Rename</a>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-05.svg" alt></span>Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td><img src="assets/img/icon/table-icon-02.svg" alt> 2019 Presentation.ppt</td>
<td>
<h2 class="channel-table-avatar">
<a href="javascript:;" class="avatar  me-2"><img class="avatar-img" src="assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
<a href="javascript:;">Townsend Seary</a>
</h2>
</td>
<td>Monday, Jun 10 | 235 KB</td>
<td class="text-end">
<div class="drop-item chat-dot-list">
<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="dot-icon">
<i class="feather-more-vertical"></i>
</a>
<div class="dropdown-menu profile-sub-list">
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-01.svg" alt></span>View in Chat</a>
<a class="dropdown-item group-file-download" href="javascript:;"><span><i class="feather-download"></i></span>Download</a>
<a class="dropdown-item" href="javascript:;"><span><i class="feather-edit-3"></i></span>Rename</a>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-05.svg" alt></span>Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td><img src="assets/img/icon/table-icon-03.svg" alt> Work-to-do.txt</td>
<td>
<h2 class="channel-table-avatar">
<a href="javascript:;" class="avatar  me-2"><img class="avatar-img" src="assets/img/profiles/avatar-08.jpg" alt="User Image"></a>
<a href="javascript:;">Harald Kowalski</a>
</h2>
</td>
<td>Saturday, Jan 8 | 161 KB</td>
<td class="text-end">
<div class="drop-item chat-dot-list">
<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="dot-icon">
<i class="feather-more-vertical"></i>
</a>
<div class="dropdown-menu profile-sub-list">
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-01.svg" alt></span>View in Chat</a>
<a class="dropdown-item group-file-download" href="javascript:;"><span><i class="feather-download"></i></span>Download</a>
<a class="dropdown-item" href="javascript:;"><span><i class="feather-edit-3"></i></span>Rename</a>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-05.svg" alt></span>Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td><img src="assets/img/icon/table-icon-04.svg" alt> Price-Update.doc</td>
<td>
<h2 class="channel-table-avatar">
<a href="javascript:;" class="avatar me-2"><img class="avatar-img" src="assets/img/profiles/avatar-01.jpg" alt="User Image"></a>
<a href="javascript:;">Townsend Seary</a>
</h2>
</td>
<td>Monday, Oct 4 | 235 KB</td>
<td class="text-end">
<div class="drop-item chat-dot-list">
<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="dot-icon">
<i class="feather-more-vertical"></i>
</a>
<div class="dropdown-menu profile-sub-list">
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-01.svg" alt></span>View in Chat</a>
<a class="dropdown-item group-file-download" href="javascript:;"><span><i class="feather-download"></i></span>Download</a>
<a class="dropdown-item" href="javascript:;"><span><i class="feather-edit-3"></i></span>Rename</a>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-05.svg" alt></span>Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td><img src="assets/img/icon/table-icon-05.svg" alt> New Movie 2020.mp4</td>
<td>
<h2 class="channel-table-avatar">
<a href="javascript:;" class="avatar me-2"><img class="avatar-img" src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
<a href="javascript:;">Dickerson</a>
</h2>
</td>
<td>Saturday, Jan 8 | 161 KB</td>
<td class="text-end">
<div class="drop-item chat-dot-list">
<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="dot-icon">
<i class="feather-more-vertical"></i>
</a>
<div class="dropdown-menu profile-sub-list">
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-01.svg" alt></span>View in Chat</a>
<a class="dropdown-item group-file-download" href="javascript:;"><span><i class="feather-download"></i></span>Download</a>
<a class="dropdown-item" href="javascript:;"><span><i class="feather-edit-3"></i></span>Rename</a>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-05.svg" alt></span>Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td><img src="assets/img/icon/table-icon-06.svg" alt> project.zip</td>
<td>
<h2 class="channel-table-avatar">
<a href="javascript:;" class="avatar me-2"><img class="avatar-img" src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
<a href="javascript:;">Harald Kowalski</a>
</h2>
</td>
<td>Monday, Oct 4 | 235 KB</td>
<td class="text-end">
<div class="drop-item chat-dot-list">
<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="dot-icon">
<i class="feather-more-vertical"></i>
</a>
<div class="dropdown-menu profile-sub-list">
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-01.svg" alt></span>View in Chat</a>
<a class="dropdown-item group-file-download" href="javascript:;"><span><i class="feather-download"></i></span>Download</a>
<a class="dropdown-item" href="javascript:;"><span><i class="feather-edit-3"></i></span>Rename</a>
<a class="dropdown-item" href="javascript:;"><span><img src="assets/img/icon/profile-icon-05.svg" alt></span>Delete</a>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>

<div class="channel-down-blk">
<form>
<span class="download-option flex-shrink-0 me-2"><i class="feather-download"></i></span>
<div class="file-download flex-grow-1">
<h4>Downloading File</h4>
<p>Generating the file to start download.</p>
</div>
<div class="close-btn-download"><span class="material-icons">close</span></div>
</form>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>


<div class="modal fade dream-modal" id="add-new-group">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">
Create a New Channel
</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span class="material-icons">close</span>
</button>
</div>
<div class="modal-body">

<form action="https://dreamschat.dreamstechnologies.com/template-html/template-videocall/new-friends">
<div class="form-group">
<label>Group Name</label>
<input class="form-control" name="new-chat-title" type="text">
</div>
<div class="form-group">
<label>Choose profile picture</label>
<div class="custom-input-file form-control group_formcontrol">
<input type="file" class>
<span class="browse-btn">Browse File</span>
</div>
</div>
<div class="form-group">
<label>Topic (optional)</label>
<input class="form-control" name="new-chat-title" type="text">
</div>
<div class="form-group">
<label>Description</label>
<textarea class="form-control"></textarea>
</div>
</form>

<div class="form-row profile_form text-end float-end m-0 align-items-center">
<div class="newgroup_create">
<button type="button" class="btn btn-primary  mb-0" data-bs-toggle="modal" data-bs-target="#add-group-member" data-bs-dismiss="modal" aria-label="Close">
Add Participants
</button>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js" type="46209a6b29e25fa703d2528a-text/javascript"></script>

<script src="assets/js/jquery.slimscroll.js" type="46209a6b29e25fa703d2528a-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="46209a6b29e25fa703d2528a-text/javascript"></script>

<script src="assets/js/script.js" type="46209a6b29e25fa703d2528a-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="46209a6b29e25fa703d2528a-|49" defer></script></body>

<!-- Mirrored from dreamschat.dreamstechnologies.com/template-html/template-videocall/channel-file.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 09:20:31 GMT -->
</html>