<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Oct 2022 11:55:42 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="iziToast.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!--favicon-->
    <link rel="icon" href="{{'/'}}admin/assets/images/favicon-32x32.png" type="image/png" />

    <!-- dataTable css --->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!--plugins-->
    <link href="{{'/'}}admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <link href="{{'/'}}admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{'/'}}admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{'/'}}admin/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{'/'}}admin/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{'/'}}admin/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{'/'}}admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{'/'}}admin/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{'/'}}admin/assets/css/app.css" rel="stylesheet">
    <link href="{{'/'}}admin/assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{'/'}}admin/assets/css/dark-theme.css" />
    <link rel="stylesheet" href="{{'/'}}admin/assets/css/semi-dark.css" />
    <link rel="stylesheet" href="{{'/'}}admin/assets/css/header-colors.css" />


    <title>R2T2MS - @yield('title')</title>
</head>

<body>
<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{'/'}}admin/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">R2T2MS</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>

            </li>
            <li class="menu-label">Traffic Module</li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Traffic Sign Category</div>
                </a>
                <ul>
                    <li> <a href="{{route('category.add')}}"><i class="bx bx-right-arrow-alt"></i>Add Category</a>
                    </li>
                    <li> <a href="{{route('category.manage')}}"><i class="bx bx-right-arrow-alt"></i>Manage Category</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bxs-car'></i>
                    </div>
                    <div class="menu-title">Traffic Sign</div>
                </a>
                <ul>
                    <li> <a href="{{ route('traffic_sign.add') }}"><i class="bx bx-right-arrow-alt"></i>Add Traffic Sign</a>
                    </li>
                    <li> <a href="{{ route('traffic_sign.manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage Traffic Sign</a>
                    </li>

                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-clipboard'></i>
                    </div>
                    <div class="menu-title">Rules Break</div>
                </a>
                <ul>
                    <li> <a href="{{ route('rulesBreak.add') }}"><i class="bx bx-right-arrow-alt"></i>Add Rules Break</a>
                    </li>
                    <li> <a href="{{ route('rulesBreak.manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage Rules Break</a>
                    </li>
                </ul>
            </li>
            <li class="menu-label">Map Module</li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-map"></i>
                    </div>
                    <div class="menu-title">Direction</div>
                </a>
                <ul>
                    <li> <a href="{{route('direction.add')}}"><i class="bx bx-right-arrow-alt"></i>Add Direction</a>
                    </li>
                    <li> <a href="{{route('direction.manage')}}"><i class="bx bx-right-arrow-alt"></i>Manage Direction</a>
                    </li>
                </ul>
            </li>



        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>
                <div class="search-bar flex-grow-1">
                    <div class="position-relative search-bar-box">
                        <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                        <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                    </div>
                </div>
                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item mobile-search-icon">
                            <a class="nav-link" href="#">	<i class='bx bx-search'></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="row row-cols-3 g-3 p-3">
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
                                        </div>
                                        <div class="app-title">Traffic Category</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-burning text-white"><i class='bx bx-atom'></i>
                                        </div>
                                        <div class="app-title">Projects</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-shield'></i>
                                        </div>
                                        <div class="app-title">Google Map & Direction</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-kyoto text-dark"><i class='bx bx-notification'></i>
                                        </div>
                                        <div class="app-title">Faq</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-blues text-dark"><i class='bx bx-file'></i>
                                        </div>
                                        <div class="app-title">Traffic Sign & Rules</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-moonlit text-white"><i class='bx bx-filter-alt'></i>
                                        </div>
                                        <div class="app-title">Traffic Rules Break & Fine</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
                                <i class='bx bx-bell'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Notifications</p>
                                        <p class="msg-header-clear ms-auto">Marks all as read</p>
                                    </div>
                                </a>
                                <div class="header-notifications-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Users<span class="msg-time float-end">14 Sec
												ago</span></h6>
                                                <p class="msg-info">5 new user registered</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Traffic Category <span class="msg-time float-end">2 min
												ago</span></h6>
                                                <p class="msg-info">You have add new category</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
												ago</span></h6>
                                                <p class="msg-info">The pdf files generated</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
												ago</span></h6>
                                                <p class="msg-info">5.1 min avarage time response</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Traffic Signs <span
                                                        class="msg-time float-end">2 hrs ago</span></h6>
                                                <p class="msg-info">Your new sign has approved</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Traffic Rules <span class="msg-time float-end">4 hrs
												ago</span></h6>
                                                <p class="msg-info">New traffic rules add</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Rules Break<span class="msg-time float-end">5 hrs
												ago</span></h6>
                                                <p class="msg-info">Successfully update your rules</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Traffic Fines <span class="msg-time float-end">1 day
												ago</span></h6>
                                                <p class="msg-info">24 new case register last week</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-warning text-warning"><i class='bx bx-door-open'></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
												ago</span></h6>
                                                <p class="msg-info">45% less alerts last 4 weeks</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">View All Notifications</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                                <i class='bx bx-comment'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Messages</p>
                                        <p class="msg-header-clear ms-auto">Marks all as read</p>
                                    </div>
                                </a>
                                <div class="header-message-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{'/'}}admin/assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Md. Ataullah Bhuiyan <span class="msg-time float-end">5 sec
												ago</span></h6>
                                                <p class="msg-info">We have to arrange a meeting..</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{'/'}}admin/assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Shamina Akther Rita <span class="msg-time float-end">14
												sec ago</span></h6>
                                                <p class="msg-info">Ok Sir...</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{'/'}}admin/assets/images/avatars/avatar-3.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Shohana Akter <span class="msg-time float-end">8 min
												ago</span></h6>
                                                <p class="msg-info">Sir what will be the..</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{'/'}}admin/assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Fahim<span class="msg-time float-end">15
												min ago</span></h6>
                                                <p class="msg-info">Can we set the meeting..</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{'/'}}admin/assets/images/avatars/avatar-5.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Kakon<span class="msg-time float-end">22 min
												ago</span></h6>
                                                <p class="msg-info">Ji sir..</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{'/'}}admin/assets/images/avatars/avatar-6.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Nishat <span class="msg-time float-end">2 hrs
												ago</span></h6>
                                                <p class="msg-info">I can not download it.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{'/'}}admin/assets/images/avatars/avatar-7.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Habib Ahmed<span class="msg-time float-end">4 hrs
												ago</span></h6>
                                                <p class="msg-info">Assalamulaikum.Hope u all are.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{'/'}}admin/assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Hasib Ahmed<span class="msg-time float-end">6 hrs
												ago</span></h6>
                                                <p class="msg-info">Walaikumsalam sir..</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{'/'}}admin/assets/images/avatars/avatar-9.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Sayed Hossain<span class="msg-time float-end">2 hrs
												ago</span></h6>
                                                <p class="msg-info">Sir Assalamualaikum,Can we..</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{'/'}}admin/assets/images/avatars/afsanaaaa.jpg" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Afsana Akther Rubi<span class="msg-time float-end">2 days
												ago</span></h6>
                                                <p class="msg-info">Ok Sir,we have no problem</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{'/'}}admin/assets/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Al-Amin<span class="msg-time float-end">5 days
												ago</span></h6>
                                                <p class="msg-info">After end i will start the..</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">View All Messages</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{'/'}}admin/assets/images/avatars/afsanaaaa.jpg" class="user-img" alt="user avatar">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">{{Auth::user()->name}}</p>
                            <p class="designattion mb-0">Web Designer</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
                        </li>
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                        <li><button class="dropdown-item" type="submit"><i class='bx bx-log-out-circle'></i><span>Logout</span></button>
                        </li>
                        </form>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->
    @yield('body')
    <footer class="page-footer">
        <p class="mb-0">Copyright ?? 2022. All Right Reserved By AR.</p>
    </footer>
</div>
<!--end wrapper-->
<!--start switcher-->
<div class="switcher-wrapper">
    <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class="switcher-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
        </div>
        <hr/>
        <h6 class="mb-0">Theme Styles</h6>
        <hr/>
        <div class="d-flex align-items-center justify-content-between">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                <label class="form-check-label" for="lightmode">Light</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                <label class="form-check-label" for="darkmode">Dark</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                <label class="form-check-label" for="semidark">Semi Dark</label>
            </div>
        </div>
        <hr/>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
            <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
        </div>
        <hr/>
        <h6 class="mb-0">Header Colors</h6>
        <hr/>
        <div class="header-colors-indigators">
            <div class="row row-cols-auto g-3">
                <div class="col">
                    <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
            </div>
        </div>
        <hr/>
        <h6 class="mb-0">Sidebar Colors</h6>
        <hr/>
        <div class="header-colors-indigators">
            <div class="row row-cols-auto g-3">
                <div class="col">
                    <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
                </div>
                <div class="col">
                    <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--end switcher-->
<!-- Bootstrap JS -->




{{-- <script src="iziToast.min.js" type="text/javascript"></script> --}}

<!-- datatable js-->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="{{'/'}}admin/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{'/'}}admin/assets/js/jquery.min.js"></script>
<script src="{{'/'}}admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{'/'}}admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{'/'}}admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{'/'}}admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{'/'}}admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{'/'}}admin/assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="{{'/'}}admin/assets/plugins/chartjs/js/Chart.extension.js"></script>
<script src="{{'/'}}admin/assets/js/index.js"></script>

<!--app JS-->
<script src="{{'/'}}admin/assets/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@stack('script')


</body>

</html>
