<!doctype html>
<html lang="en">

<!-- Mirrored from vetra.laborasyon.com/demos/default/list-group.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 15:53:17 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> List group - Vetra | E-Commerce HTML Admin Dashboard Template </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png"/>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="../../dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="../../dist/css/bootstrap-docs.css" type="text/css">

        <!-- Prism -->
    <link rel="stylesheet" href="../../libs/prism/prism.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="../../dist/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- preloader -->
<div class="preloader">
    <img src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
    <div class="preloader-icon"></div>
</div>
<!-- ./ preloader -->

<!-- sidebars -->

<!-- notifications sidebar -->
<div class="sidebar" id="notifications">
    <div class="sidebar-header d-block align-items-end">
        <div class="align-items-center d-flex justify-content-between py-4">
            Notifications
            <button data-sidebar-close>
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active nav-link-notify" data-bs-toggle="tab" href="#activities">Activities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
            </li>
        </ul>
    </div>
    <div class="sidebar-content">
        <div class="tab-content">
            <div class="tab-pane active" id="activities">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-person"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        You joined a group
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-hdd"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        Storage is running low!
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-secondary me-3">
                                            <span
                                                class="avatar-text rounded-circle">
                                                <i class="bi bi-file-text"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        1 person sent a file
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-success me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-download"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        Reports ready to download
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-lock"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        2 steps verification
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> 20 min ago
                                    </span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-success">
                        <i class="bi bi-check2 me-2"></i> Make All Read
                    </a>
                    <a href="#" class="btn btn-danger ms-2">
                        <i class="bi bi-trash me-2"></i> Delete all
                    </a>
                </div>
            </div>
            <div class="tab-pane" id="notes">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                This month's report will be prepared.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Today
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                An email will be sent to the customer.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Today
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 d-flex justify-content-between">
                                The meeting will be held.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Yesterday
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                Conversation with users.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Yesterday
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-warning d-flex justify-content-between">
                                Payment refund will be made to the customer.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> 20 min ago
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 d-flex justify-content-between">
                                Payment form will be activated.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> 20 min ago
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-primary btn-block">
                        <i class="bi bi-plus me-2"></i> Add Notes
                    </a>
                </div>
            </div>
            <div class="tab-pane" id="alerts">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 fw-bold d-flex justify-content-between">
                                    Signed in with a different device.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text fw-bold rounded-circle">
                                            <i class="bi bi-file-text"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 fw-bold d-flex justify-content-between">
                                    Your billing information is not active.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-person"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 d-flex justify-content-between">
                                    Your subscription has expired.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-hdd"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 d-flex justify-content-between">
                                    Your storage space is running low
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-success">
                        <i class="bi bi-check2 me-2"></i> Make All Read
                    </a>
                    <a href="#" class="btn btn-danger ms-2">
                        <i class="bi bi-trash me-2"></i> Delete all
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ notifications sidebar -->

<!-- settings sidebar -->
<div class="sidebar" id="settings">
    <div class="sidebar-header">
        <div>
            <i class="bi bi-gear me-2"></i>
            Settings
        </div>
        <button data-sidebar-close>
            <i class="bi bi-arrow-right"></i>
        </button>
    </div>
    <div class="sidebar-content">
        <ul class="list-group list-group-flush">
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>
                    <label class="form-check-label" for="flexCheckDefault1">
                        Remember next visits
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>
                    <label class="form-check-label" for="flexCheckDefault2">
                        Enable report generation.
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" checked>
                    <label class="form-check-label" for="flexCheckDefault3">
                        Allow notifications.
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                    <label class="form-check-label" for="flexCheckDefault4">
                        Hide user requests
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" checked>
                    <label class="form-check-label" for="flexCheckDefault5">
                        Speed up demands
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Hide menus
                    </label>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidebar-action">
        <a href="#" class="btn btn-primary">All Settings</a>
    </div>
</div>
<!-- ./ settings sidebar -->

<!-- search sidebar -->
<div class="sidebar" id="search">
    <div class="sidebar-header">
        Search
        <button data-sidebar-close>
            <i class="bi bi-arrow-right"></i>
        </button>
    </div>
    <div class="sidebar-content">
        <form class="mb-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" aria-describedby="button-search-addon">
                <button class="btn btn-outline-light" type="button" id="button-search-addon">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
        <h6 class="mb-3">Last searched</h6>
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Reports for 2021</a>
                <a href="#" class="btn text-danger btn-sm" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Current users</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Meeting notes</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </div>
        <h6 class="mb-3">Recently viewed</h6>
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-secondary avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-check-circle"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Todo list</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-warning avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-wallet2"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Pricing table</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-info avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-gear"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Settings</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-success avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-person-circle"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Users</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-action">
        <a href="#" class="btn btn-danger">All Clear</a>
    </div>
</div>
<!-- ./ search sidebar -->

<!-- ./ sidebars -->

<!-- menu -->
<div class="menu">
    <div class="menu-header">
        <a href="index.html" class="menu-header-logo">
            <img src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
        </a>
        <a href="index.html" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="../../assets/images/user/man_avatar3.jpg"
                         class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold">Timotheus Bendan</div>
                    <small class="text-muted">Sales Manager</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-person dropdown-item-icon"></i> Profile
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                    <i class="bi bi-gear dropdown-item-icon"></i> Settings
                </a>
                <a href="login.html" class="dropdown-item d-flex align-items-center text-danger"
                   target="_blank">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                </a>
            </div>
        </div>
        <ul>
            <li class="menu-divider">E-Commerce</li>
            <li>
                <a  href="index.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Orders</span>
                </a>
                <ul>
                    <li>
                        <a  href="orders.html">List</a>
                    </li>
                    <li>
                        <a  href="order-detail.html">Detail</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-truck"></i>
                    </span>
                    <span>Products</span>
                </a>
                <ul>
                    <li>
                        <a  href="product-list.html">List
                            View</a>
                    </li>
                    <li>
                        <a  href="product-grid.html">Grid
                            View</a>
                    </li>
                    <li>
                        <a  href="product-detail.html">Product Detail</a>
                    </li>
                    <li>
                        <a  href="shopping-cart.html">Shopping
                            Cart</a>
                    </li>
                    <li>
                        <a  href="checkout.html">Checkout</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Buyer</span>
                </a>
                <ul>
                    <li>
                        <a  href="buyer-dashboard.html">Dashboard</a>
                    </li>
                    <li>
                        <a  href="buyer-orders.html">Orders</a>
                    </li>
                    <li>
                        <a  href="buyer-addresses.html">Addresses</a>
                    </li>
                    <li>
                        <a  href="buyer-wishlist.html">Wishlist</a>
                    </li>
                </ul>
            </li>
            <li>
                <a  href="customers.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-person-badge"></i>
                    </span>
                    <span>Customers</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Invoices</span>
                </a>
                <ul>
                    <li>
                        <a href="invoices.html"
                           >List</a>
                    </li>
                    <li>
                        <a href="invoice-detail.html"
                           >Detail</a>
                    </li>
                </ul>
            </li>
            <li class="menu-divider">Apps</li>
            <li>
                <a  href="chats.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-chat-square"></i>
                    </span>
                    <span>Chats</span>
                    <span class="badge bg-success rounded-circle ms-auto">2</span>
                </a>
            </li>
            <li>
                <a href="email.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <span>Email</span>
                </a>
                <ul>
                    <li>
                        <a  href="email.html">
                            <span>Inbox</span>
                        </a>
                    </li>
                    <li>
                        <a  href="email-detail.html">
                            <span>Detail</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="email-template.html">
                            <span>Email Template</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="todo-list.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-check-circle"></i>
                    </span>
                    <span>Todo App</span>
                </a>
                <ul>
                    <li>
                        <a  href="todo-list.html">
                            <span>List</span>
                        </a>
                    </li>
                    <li>
                        <a  href="todo-detail.html">
                            <span>Details</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-divider">Pages</li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-person"></i>
                    </span>
                    <span>Profile</span>
                </a>
                <ul>
                    <li>
                        <a  href="profile-posts.html">Post</a>
                    </li>
                    <li>
                        <a  href="profile-connections.html">Connections</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-person-circle"></i>
                    </span>
                    <span>Users</span>
                </a>
                <ul>
                    <li><a  href="user-list.html">List View</a></li>
                    <li><a  href="user-grid.html">Grid View</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-lock"></i>
                    </span>
                    <span>Authentication</span>
                </a>
                <ul>
                    <li>
                        <a href="login.html" target="_blank">Login</a>
                    </li>
                    <li>
                        <a href="register.html" target="_blank">Register</a>
                    </li>
                    <li>
                        <a href="reset-password.html" target="_blank">Reset Password</a>
                    </li>
                    <li>
                        <a href="lock-screen.html" target="_blank">Lock Screen</a>
                    </li>
                    <li>
                        <a href="account-verified.html" target="_blank">Account Verified</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-exclamation-octagon"></i>
                    </span>
                    <span>Error Pages</span>
                </a>
                <ul>
                    <li>
                        <a href="404.html" target="_blank">404</a>
                    </li>
                    <li>
                        <a  href="access-denied.html">Access Denied</a>
                    </li>
                    <li>
                        <a href="under-construction.html" target="_blank">Under Construction</a>
                    </li>
                </ul>
            </li>
            <li>
                <a  href="settings.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-gear"></i>
                    </span>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a  href="pricing-table.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Pricing Table</span>
                    <span class="badge bg-success ms-auto">New</span>
                </a>
            </li>
            <li>
                <a  href="search-page.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-search"></i>
                    </span>
                    <span>Search Page</span>
                </a>
            </li>
            <li>
                <a  href="faq.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-question-circle"></i>
                    </span>
                    <span>FAQ</span>
                </a>
            </li>
            <li class="menu-divider">User Interface</li>
            <li>
                <a href="#" target="_blank">
                    <span class="nav-link-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </span>
                    <span>Components</span>
                </a>
                <ul>
                    <li>
                        <a  href="accordion.html">Accordion</a>
                    </li>
                    <li>
                        <a  href="alert.html">Alerts</a>
                    </li>
                    <li>
                        <a  href="badge.html">Badge</a>
                    </li>
                    <li>
                        <a  href="breadcrumb.html">Breadcrumb</a>
                    </li>
                    <li>
                        <a  href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a  href="button-group.html">Button Group</a>
                    </li>
                    <li>
                        <a  href="card.html">Card</a>
                    </li>
                    <li>
                        <a  href="card-masonry.html">Card Masonry</a>
                    </li>
                    <li>
                        <a  href="carousel.html">Carousel</a>
                    </li>
                    <li>
                        <a  href="collapse.html">Collapse</a>
                    </li>
                    <li>
                        <a  href="dropdown.html">Dropdowns</a>
                    </li>
                    <li>
                        <a  class="active"
                            href="list-group.html">List Group</a>
                    </li>
                    <li>
                        <a  href="modal.html">Modal</a>
                    </li>
                    <li>
                        <a  href="navs-tabs.html">Navs and Tabs</a>
                    </li>
                    <li>
                        <a  href="pagination.html">Pagination</a>
                    </li>
                    <li>
                        <a  href="popovers.html">Popovers</a>
                    </li>
                    <li>
                        <a  href="progress.html">Progress</a>
                    </li>
                    <li>
                        <a  href="spinners.html">Spinners</a>
                    </li>
                    <li>
                        <a  href="toasts.html">Toasts</a>
                    </li>
                    <li>
                        <a  href="tables.html">
                            <span>Tables</span>
                        </a>
                    </li>
                    <li>
                        <a  href="tooltip.html">Tooltip</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" target="_blank">
                    <span class="nav-link-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </span>
                    <span>Forms</span>
                </a>
                <ul>
                    <li>
                        <a href="#">
                            <span>Form Elements</span>
                        </a>
                        <ul>
                            <li>
                                <a  href="forms.html">Overview</a>
                            </li>
                            <li>
                                <a  href="form-control.html">Form Controls</a>
                            </li>
                            <li>
                                <a  href="select.html">Select</a>
                            </li>
                            <li>
                                <a  href="checks-radios.html">Checks and Radios</a>
                            </li>
                            <li>
                                <a  href="range.html">Range</a>
                            </li>
                            <li>
                                <a  href="input-group.html">Input Group</a>
                            </li>
                            <li>
                                <a  href="floating-label.html">Floating Label</a>
                            </li>
                            <li>
                                <a  href="forms-layout.html">Form Layout</a>
                            </li>
                            <li>
                                <a  href="form-validation.html">Validation</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href="form-wizard.html">
                            <span>Wizard</span>
                        </a>
                    </li>
                    <li>
                        <a  href="form-repeater.html">
                            <span>Repeater</span>
                        </a>
                    </li>
                    <li>
                        <a  href="file-upload.html">
                            <span>File Upload</span>
                        </a>
                    </li>
                    <li>
                        <a  href="ckeditor.html">
                            <span>CKEditor</span>
                        </a>
                    </li>
                    <li>
                        <a  href="range-slider.html">
                            <span>Range Slider</span>
                        </a>
                    </li>
                    <li>
                        <a  href="select2.html">
                            <span>Select2</span>
                        </a>
                    </li>
                    <li>
                        <a  href="tags-input.html">
                            <span>Tags Input</span>
                        </a>
                    </li>
                    <li>
                        <a  href="input-mask.html">
                            <span>Input Mask</span>
                        </a>
                    </li>
                    <li>
                        <a  href="datepicker.html">
                            <span>Datepicker</span>
                        </a>
                    </li>
                    <li>
                        <a  href="clockpicker.html">
                            <span>Clock Picker</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-heart"></i>
                    </span>
                    <span>Content</span>
                </a>
                <ul>
                    <li>
                        <a  href="typography.html">
                            <span>Typography</span>
                        </a>
                    </li>
                    <li>
                        <a  href="images.html">
                            <span>Images</span>
                        </a>
                    </li>
                    <li>
                        <a  href="figures.html">
                            <span>Figures</span>
                        </a>
                    </li>
                    <li>
                        <a  href="avatar.html">
                            <span>Avatar</span>
                        </a>
                    </li>
                    <li>
                        <a  href="icons.html">
                            <span>Icons</span>
                        </a>
                    </li>
                    <li>
                        <a  href="colors.html">
                            <span>Colors</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Charts</span>
                </a>
                <ul>
                    <li>
                        <a  href="apexchart.html">Apex Chart</a>
                    </li>
                    <li>
                        <a  href="chartjs.html">Chartjs</a>
                    </li>
                    <li>
                        <a  href="justgage.html">Justgage</a>
                    </li>
                    <li>
                        <a  href="morsis.html">Morsis</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-paperclip"></i>
                    </span>
                    <span>Extensions</span>
                </a>
                <ul>
                    <li>
                        <a  href="vector-map.html">
                            <span>Vector Map</span>
                        </a>
                    </li>
                    <li>
                        <a  href="datatable.html">
                            <span>Datatable</span>
                        </a>
                    </li>
                    <li>
                        <a  href="sweet-alert.html">Sweet Alert</a>
                    </li>
                    <li>
                        <a  href="lightbox.html">Lightbox</a>
                    </li>
                    <li>
                        <a  href="introjs.html">Introjs</a>
                    </li>
                    <li>
                        <a  href="nestable.html">Nestable</a>
                    </li>
                    <li>
                        <a  href="rating.html">Rating</a>
                    </li>
                    <li>
                        <a  href="code-highlighter.html">Code Highlighter</a>
                    </li>
                </ul>
            </li>
            <li class="menu-divider">Other</li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-list"></i>
                    </span>
                    <span>Menu Item</span>
                </a>
                <ul>
                    <li><a href="#">Menu Item 1</a></li>
                    <li>
                        <a href="#">Menu Item 2</a>
                        <ul>
                            <li>
                                <a href="#">Menu Item 2.1</a>
                            </li>
                            <li>
                                <a href="#">Menu Item 2.2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="disabled">
                    <span class="nav-link-icon">
                        <i class="bi bi-hand-index-thumb"></i>
                    </span>
                    <span>Disabled</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- ./  menu -->

<!-- layout-wrapper -->
<div class="layout-wrapper">

    <!-- header -->
    <div class="header">
    <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
        <a href="#">
            <i class="bi bi-list"></i>
        </a>
    </div>
    <!-- Logo -->
    <a href="index.html" class="logo">
        <img width="100" src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
    </a>
    <!-- ./ Logo -->
    <div class="page-title">List group</div>
    <form class="search-form">
        <div class="input-group">
            <button class="btn btn-outline-light" type="button" id="button-addon1">
                <i class="bi bi-search"></i>
            </button>
            <input type="text" class="form-control" placeholder="Search..."
                   aria-label="Example text with button addon" aria-describedby="button-addon1">
            <a href="#" class="btn btn-outline-light close-header-search-bar">
                <i class="bi bi-x"></i>
            </a>
        </div>
    </form>
    <div class="header-bar ms-auto">
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item">
                <a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
                    <i class="bi bi-bell icon-lg"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link nav-link-notify" data-count="3" data-bs-toggle="dropdown">
                    <i class="bi bi-cart2 icon-lg"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <h6 class="m-0 px-4 py-3 border-bottom">Shopping Cart</h6>
                    <div class="dropdown-menu-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="../../assets/images/products/3.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Digital clock</h6>
                                    <div>1 x $1.190,90</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="../../assets/images/products/4.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Toy Car</h6>
                                    <div>1 x $139.58</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="../../assets/images/products/5.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Sunglasses</h6>
                                    <div>2 x $50,90</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="../../assets/images/products/6.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Cake</h6>
                                    <div>1 x $10,50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="m-0 px-4 py-3 border-top small">Sub Total : <strong
                            class="text-primary">$1.442,78</strong></h6>
                </div>
            </li>
            <li class="nav-item ms-3">
                            </li>
        </ul>
    </div>
    <!-- Header mobile buttons -->
    <div class="header-mobile-buttons">
        <a href="#" class="search-bar-btn">
            <i class="bi bi-search"></i>
        </a>
        <a href="#" class="actions-btn">
            <i class="bi bi-three-dots"></i>
        </a>
    </div>
    <!-- ./ Header mobile buttons -->
</div>
    <!-- ./ header -->

    <!-- content -->
    <div class="content ">
        
    <div class="row">
        <div class="order-2 order-lg-1 col-lg-9 bd-content">

            <p class="lead">List groups are a flexible and powerful component for displaying a series of content.
                Modify and extend them to support just about any content within.</p>

            <h4>Basic example</h4>
            <p>The most basic list group is an unordered list with list items and the proper classes. Build upon it
                with the options that follow, or with your own CSS as needed.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h4>Active items</h4>
            <p>Add <code>.active</code> to a <code>.list-group-item</code> to indicate the current active selection.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item active" aria-current="true"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h4>Disabled items</h4>
            <p>Add <code>.disabled</code> to a <code>.list-group-item</code> to make it <em>appear</em> disabled.
                Note that some elements with <code>.disabled</code> will also require custom JavaScript to fully
                disable their click events (e.g., links).</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item disabled" aria-disabled="true">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item disabled" aria-disabled="true"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h4>Links and buttons</h4>
            <p>Use <code>&lt;a&gt;</code>s or <code>&lt;button&gt;</code>s to create <em>actionable</em> list group
                items with hover, disabled, and active states by adding <code>.list-group-item-action</code>. We
                separate these pseudo-classes to ensure list groups made of non-interactive elements (like <code>&lt;li&gt;</code>s
                or <code>&lt;div&gt;</code>s) don’t provide a click or tap affordance.</p>
            <p>Be sure to <strong>not use the standard <code>.btn</code> classes here</strong>.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                    Cras justo odio
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1"
                                   aria-disabled="true">Vestibulum at eros</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="list-group"&gt;
  &lt;a href="#" class="list-group-item list-group-item-action active" aria-current="true"&gt;
    Cras justo odio
  &lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;Dapibus ac facilisis in&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;Morbi leo risus&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;Porta ac consectetur ac&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true"&gt;Vestibulum at eros&lt;/a&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <p>With <code>&lt;button&gt;</code>s, you can also make use of the <code>disabled</code> attribute instead
                of the <code>.disabled</code> class. Sadly, <code>&lt;a&gt;</code>s don’t support the disabled
                attribute.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-group">
                                <button type="button" class="list-group-item list-group-item-action active"
                                        aria-current="true">
                                    Cras justo odio
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">Dapibus ac
                                    facilisis in
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">Morbi leo risus
                                </button>
                                <button type="button" class="list-group-item list-group-item-action">Porta ac
                                    consectetur ac
                                </button>
                                <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum
                                    at eros
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="list-group"&gt;
  &lt;button type="button" class="list-group-item list-group-item-action active" aria-current="true"&gt;
    Cras justo odio
  &lt;/button&gt;
  &lt;button type="button" class="list-group-item list-group-item-action"&gt;Dapibus ac facilisis in&lt;/button&gt;
  &lt;button type="button" class="list-group-item list-group-item-action"&gt;Morbi leo risus&lt;/button&gt;
  &lt;button type="button" class="list-group-item list-group-item-action"&gt;Porta ac consectetur ac&lt;/button&gt;
  &lt;button type="button" class="list-group-item list-group-item-action" disabled&gt;Vestibulum at eros&lt;/button&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Flush</h4>
            <p>Add <code>.list-group-flush</code> to remove some borders and rounded corners to render list group
                items edge-to-edge in a parent container (e.g., cards).</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group list-group-flush"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h4>Horizontal</h4>
            <p>Add <code>.list-group-horizontal</code> to change the layout of list group items from vertical to
                horizontal across all breakpoints. Alternatively, choose a responsive variant <code>.list-group-horizontal-{sm|md|lg|xl|xxl}</code>
                to make a list group horizontal starting at that breakpoint’s <code>min-width</code>. Currently
                <strong>horizontal list groups cannot be combined with flush list groups.</strong></p>
            <p><strong>ProTip:</strong> Want equal-width list group items when horizontal? Add
                <code>.flex-fill</code> to each list group item.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group list-group-horizontal">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                            </ul>
                            <ul class="list-group list-group-horizontal-sm">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                            </ul>
                            <ul class="list-group list-group-horizontal-md">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                            </ul>
                            <ul class="list-group list-group-horizontal-lg">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                            </ul>
                            <ul class="list-group list-group-horizontal-xl">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                            </ul>
                            <ul class="list-group list-group-horizontal-xxl">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group list-group-horizontal"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-sm"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-md"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-lg"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-xl"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-xxl"&gt;
  &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h4>Contextual classes</h4>
            <p>Use contextual classes to style list items with a stateful background and color.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">Dapibus ac facilisis in</li>

                                <li class="list-group-item list-group-item-primary">A simple primary list group item
                                </li>
                                <li class="list-group-item list-group-item-secondary">A simple secondary list group
                                    item
                                </li>
                                <li class="list-group-item list-group-item-success">A simple success list group item
                                </li>
                                <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                                <li class="list-group-item list-group-item-warning">A simple warning list group item
                                </li>
                                <li class="list-group-item list-group-item-info">A simple info list group item</li>
                                <li class="list-group-item list-group-item-light">A simple light list group item</li>
                                <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;

  &lt;li class="list-group-item list-group-item-primary"&gt;A simple primary list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-secondary"&gt;A simple secondary list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-success"&gt;A simple success list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-danger"&gt;A simple danger list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-warning"&gt;A simple warning list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-info"&gt;A simple info list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-light"&gt;A simple light list group item&lt;/li&gt;
  &lt;li class="list-group-item list-group-item-dark"&gt;A simple dark list group item&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <p>Contextual classes also work with <code>.list-group-item-action</code>. Note the addition of the hover
                styles here not present in the previous example. Also supported is the <code>.active</code> state; apply
                it to indicate an active selection on a contextual list group item.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>

                                <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A
                                    simple primary list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A
                                    simple secondary list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-success">A
                                    simple success list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A
                                    simple danger list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A
                                    simple warning list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple
                                    info list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light">A
                                    simple light list group item</a>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple
                                    dark list group item</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="list-group"&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;Dapibus ac facilisis in&lt;/a&gt;

  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-primary"&gt;A simple primary list group item&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-secondary"&gt;A simple secondary list group item&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-success"&gt;A simple success list group item&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-danger"&gt;A simple danger list group item&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-warning"&gt;A simple warning list group item&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-info"&gt;A simple info list group item&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-light"&gt;A simple light list group item&lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action list-group-item-dark"&gt;A simple dark list group item&lt;/a&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>With badges</h4>
            <p>Add badges to any list group item to show unread counts, activity, and more with the help of some
                utilities.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cras justo odio
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Dapibus ac facilisis in
                                    <span class="badge bg-primary rounded-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Morbi leo risus
                                    <span class="badge bg-primary rounded-pill">1</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
    Cras justo odio
    &lt;span class="badge bg-primary rounded-pill"&gt;14&lt;/span&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
    Dapibus ac facilisis in
    &lt;span class="badge bg-primary rounded-pill"&gt;2&lt;/span&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
    Morbi leo risus
    &lt;span class="badge bg-primary rounded-pill"&gt;1&lt;/span&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <h4>Custom content</h4>
            <p>Add nearly any HTML within, even for linked list groups like the one below, with the help of flexbox
                utilities.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                                        eget risus varius blandit.</p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                                        eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                                        eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="list-group"&gt;
  &lt;a href="#" class="list-group-item list-group-item-action active" aria-current="true"&gt;
    &lt;div class="d-flex w-100 justify-content-between"&gt;
      &lt;h5 class="mb-1"&gt;List group item heading&lt;/h5&gt;
      &lt;small&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class="mb-1"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
    &lt;small&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;
    &lt;div class="d-flex w-100 justify-content-between"&gt;
      &lt;h5 class="mb-1"&gt;List group item heading&lt;/h5&gt;
      &lt;small class="text-muted"&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class="mb-1"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
    &lt;small class="text-muted"&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;
    &lt;div class="d-flex w-100 justify-content-between"&gt;
      &lt;h5 class="mb-1"&gt;List group item heading&lt;/h5&gt;
      &lt;small class="text-muted"&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class="mb-1"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
    &lt;small class="text-muted"&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>Checkboxes and radios</h4>
            <p>Place Bootstrap’s checkboxes and radios within list group items and customize as needed. You can use
                them without <code>&lt;label&gt;</code>s, but please remember to include an <code>aria-label</code>
                attribute and value for accessibility.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Cras justo odio
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Dapibus ac facilisis in
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Morbi leo risus
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Porta ac consectetur ac
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Vestibulum at eros
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Cras justo odio
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Dapibus ac facilisis in
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Morbi leo risus
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Porta ac consectetur ac
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Vestibulum at eros
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

            <p>And if you want <code>&lt;label&gt;</code>s as the <code>.list-group-item</code> for large hit areas, you
                can do that, too.</p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-group">
                                <label class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="">
                                    Cras justo odio
                                </label>
                                <label class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="">
                                    Dapibus ac facilisis in
                                </label>
                                <label class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="">
                                    Morbi leo risus
                                </label>
                                <label class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="">
                                    Porta ac consectetur ac
                                </label>
                                <label class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="">
                                    Vestibulum at eros
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;div class="list-group"&gt;
  &lt;label class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
    Cras justo odio
  &lt;/label&gt;
  &lt;label class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
    Dapibus ac facilisis in
  &lt;/label&gt;
  &lt;label class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
    Morbi leo risus
  &lt;/label&gt;
  &lt;label class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
    Porta ac consectetur ac
  &lt;/label&gt;
  &lt;label class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value=""&gt;
    Vestibulum at eros
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>

            <h4>JavaScript behavior</h4>
            <p>Use the tab JavaScript plugin—include it individually or through the compiled
                <code>bootstrap.js</code> file—to extend our list group to create tabbable panes of local content.
            </p>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="list-home-list"
                                   data-bs-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list"
                                   data-bs-toggle="list" href="#list-profile" role="tab"
                                   aria-controls="profile">Profile</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list"
                                   data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list"
                                   data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                     aria-labelledby="list-home-list">Home content...
                                </div>
                                <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                     aria-labelledby="list-profile-list">Profile content...
                                </div>
                                <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                     aria-labelledby="list-messages-list">Message content...
                                </div>
                                <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                     aria-labelledby="list-settings-list">Settings content...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-code-preview">
                        <pre><code class="language-html">&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Cras justo odio
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Dapibus ac facilisis in
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Morbi leo risus
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Porta ac consectetur ac
  &lt;/li&gt;
  &lt;li class="list-group-item"&gt;
    &lt;input class="form-check-input me-1" type="checkbox" value="" aria-label="..."&gt;
    Vestibulum at eros
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>

        </div>
        <div class="order-1 order-lg-2 col-lg-3">
            <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                <nav id="TableOfContents"></nav>
            </div>
        </div>
    </div>

    </div>
    <!-- ./ content -->

    <!-- content-footer -->
    <footer class="content-footer">
        <div>© 2021 Vetra - <a href="https://laborasyon.com/" target="_blank">Laborasyon</a></div>
        <div>
            <nav class="nav gap-4">
                <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                <a href="#" class="nav-link">Change Log</a>
                <a href="#" class="nav-link">Get Help</a>
            </nav>
        </div>
    </footer>
    <!-- ./ content-footer -->

</div>
<!-- ./ layout-wrapper -->

<!-- Bundle scripts -->
<script src="../../libs/bundle.js"></script>

    <!-- Prism -->
    <script src="../../libs/prism/prism.js"></script>

<!-- Main Javascript file -->
<script src="../../dist/js/app.min.js"></script>
</body>

<!-- Mirrored from vetra.laborasyon.com/demos/default/list-group.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 15:53:17 GMT -->
</html>
