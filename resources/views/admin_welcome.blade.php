<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>Social Media</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #f9fafb;
            margin-top: 20px;
        }

        .profile-page .profile-header {
            box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
            border: 1px solid #f2f4f9;
        }

        .profile-page .profile-header .cover {
            position: relative;
            border-radius: .25rem .25rem 0 0;
        }


        .profile-page .profile-header .cover figure {
            margin-bottom: 0;
        }

        @media (max-width: 767px) {
            .profile-page .profile-header .cover figure {
                height: 110px;
                overflow: hidden;
            }
        }

        @media (min-width: 2400px) {
            .profile-page .profile-header .cover figure {
                height: 280px;
                overflow: hidden;
            }
        }

        .profile-page .profile-header .cover figure img {
            border-radius: .25rem .25rem 0 0;
            width: 100%;
        }

        @media (max-width: 767px) {
            .profile-page .profile-header .cover figure img {
                -webkit-transform: scale(2);
                transform: scale(2);
                margin-top: 15px;
            }
        }

        @media (min-width: 2400px) {
            .profile-page .profile-header .cover figure img {
                margin-top: -55px;
            }
        }

        .profile-page .profile-header .cover .gray-shade {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background: linear-gradient(rgba(255, 255, 255, 0.1), #ffffffe8 99%);
        }

        .profile-page .profile-header .cover .cover-body {
            position: absolute;
            bottom: -20px;
            left: 0;
            z-index: 2;
            width: 100%;
            padding: 0 20px;
        }

        .profile-page .profile-header .cover .cover-body .profile-pic {
            border-radius: 50%;
            width: 100px;
        }

        @media (max-width: 767px) {
            .profile-page .profile-header .cover .cover-body .profile-pic {
                width: 70px;
            }
        }

        .profile-page .profile-header .cover .cover-body .profile-name {
            font-size: 20px;
            font-weight: 600;
            margin-left: 17px;
        }

        .profile-page .profile-header .header-links {
            padding: 15px;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            background: #fff;
            border-radius: 0 0 .25rem .25rem;
        }

        .profile-page .profile-header .header-links ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .profile-page .profile-header .header-links ul li a {
            color: #000;
            -webkit-transition: all .2s ease;
            transition: all .2s ease;
        }

        .profile-page .profile-header .header-links ul li:hover,
        .profile-page .profile-header .header-links ul li.active {
            color: #727cf5;
        }

        .profile-page .profile-header .header-links ul li:hover a,
        .profile-page .profile-header .header-links ul li.active a {
            color: #727cf5;
        }

        .profile-page .profile-body .left-wrapper .social-links a {
            width: 30px;
            height: 30px;
        }

        .profile-page .profile-body .right-wrapper .latest-photos>.row {
            margin-right: 0;
            margin-left: 0;
        }

        .profile-page .profile-body .right-wrapper .latest-photos>.row>div {
            padding-left: 3px;
            padding-right: 3px;
        }

        .profile-page .profile-body .right-wrapper .latest-photos>.row>div figure {
            -webkit-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
            margin-bottom: 6px;
        }

        .profile-page .profile-body .right-wrapper .latest-photos>.row>div figure:hover {
            -webkit-transform: scale(1.06);
            transform: scale(1.06);
        }

        .profile-page .profile-body .right-wrapper .latest-photos>.row>div figure img {
            border-radius: .25rem;
        }

        .rtl .profile-page .profile-header .cover .cover-body .profile-name {
            margin-left: 0;
            margin-right: 17px;
        }

        .img-xs {
            width: 37px;
            height: 37px;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        .card-header:first-child {
            border-radius: 0 0 0 0;
        }

        .card-header {
            padding: 0.875rem 1.5rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0);
            border-bottom: 1px solid #f2f4f9;
        }

        .card-footer:last-child {
            border-radius: 0 0 0 0;
        }

        .card-footer {
            padding: 0.875rem 1.5rem;
            background-color: rgba(0, 0, 0, 0);
            border-top: 1px solid #f2f4f9;
        }

        .grid-margin {
            margin-bottom: 1rem;
        }

        .card {
            box-shadow: 0 10px 20px 0 rgba(26, 44, 57, 0.14);
            -webkit-box-shadow: 0 10px 20px 0 rgba(26, 44, 57, 0.14);
            -moz-box-shadow: 0 10px 20px 0 rgba(26, 44, 57, 0.14);
            -ms-box-shadow: 0 10px 20px 0 rgba(26, 44, 57, 0.14);
        }

        .rounded {
            border-radius: 0.25rem !important;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #f2f4f9;
            border-radius: 0.25rem;
        }










        .img-thumbs {
            background: #eee;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            margin: 1.5rem 0;
            padding: 0.75rem;
        }

        .img-thumbs-hidden {
            display: none;
        }

        .wrapper-thumb {
            position: relative;
            display: inline-block;
            margin: 1rem 0;
            justify-content: space-around;
        }

        .img-preview-thumb {
            background: #fff;
            border: 1px solid none;
            border-radius: 0.25rem;
            box-shadow: 0.125rem 0.125rem 0.0625rem rgba(0, 0, 0, 0.12);
            margin-right: 1rem;
            max-width: 140px;
            padding: 0.25rem;
        }

        .remove-btn {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: .7rem;
            top: -5px;
            right: 10px;
            width: 20px;
            height: 20px;
            background: white;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
        }

        .remove-btn:hover {
            box-shadow: 0px 0px 3px grey;
            transition: all .3s ease-in-out;
        }













        #profile_picture_image_preview {
            width: 100%;
            /* max-width: 300px; */
            /* border: 1px solid #ccc; */
            box-shadow: 0px 3px 8px #ccc;
            border-radius: 5px;
            padding: 4px;
            display: none;
        }

        #profile_picture_image_preview.show {
            display: block;
        }


        #timeline_picture_image_preview {
            width: 100%;
            /* max-width: 300px; */
            /* border: 1px solid #ccc; */
            box-shadow: 0px 3px 8px #ccc;
            border-radius: 5px;
            padding: 4px;
            display: none;
        }

        #timeline_picture_image_preview.show {
            display: block;
        }

        input {
            width: 100%;
        }

        .gedf-wrapper {
            margin-top: 0.97rem;
        }

        <blade media|%20(min-width%3A%20992px)%20%7B%0D>.gedf-main {
            padding-left: 4rem;
            padding-right: 4rem;
        }

        .gedf-card {
            /* margin-bottom: 2.77rem; */
        }


        /**Reset Bootstrap*/
        .dropdown-toggle::after {
            content: none;
            display: none;
        }










        .profile {
            margin-top: 20px;
            margin-bottom: 60px;
        }

        .profile .profile-img-list {
            list-style-type: none;
            margin: -0.0625rem -1.3125rem;
            padding: 0;
        }

        .profile .profile-img-list:after,
        .profile .profile-img-list:before {
            content: "";
            display: table;
            clear: both;
        }

        .profile .profile-img-list .profile-img-list-item {
            float: left;
            width: 25%;
            padding: 0.0625rem;
        }

        .profile .profile-img-list .profile-img-list-item.main {
            width: 50%;
        }

        .profile .profile-img-list .profile-img-list-item .profile-img-list-link {
            display: block;
            padding-top: 75%;
            overflow: hidden;
            position: relative;
        }

        .profile .profile-img-list .profile-img-list-item .profile-img-list-link .profile-img-content,
        .profile .profile-img-list .profile-img-list-item .profile-img-list-link img {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            max-width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .profile .profile-img-list .profile-img-list-item .profile-img-list-link .profile-img-content:before,
        .profile .profile-img-list .profile-img-list-item .profile-img-list-link img:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 1px solid rgba(60, 78, 113, 0.15);
        }

        .profile .profile-img-list .profile-img-list-item.with-number .profile-img-number {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            color: #fff;
            font-size: 1.625rem;
            font-weight: 500;
            line-height: 1.625rem;
            margin-top: -0.8125rem;
            text-align: center;
        }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="profile-page tx-13">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="profile-header">
                        <div class="cover">
                            <div class="gray-shade"></div>
                            <figure>
                                <img src="{{ asset('image/' . $user->timeline_picture) }}" class="img-fluid"
                                    alt="profile cover">
                            </figure>
                            <div class="cover-body d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="" data-toggle="modal" style="text-decoration: none;"
                                        data-target="#profile_picture">
                                        <img class="profile-pic" src="{{ asset('image/' . $user->profile_picture) }}"
                                            alt="profile">
                                    </a>
                                    <span class="profile-name">{{ $user->name }}</span>
                                </div>
                                <div class="d-none d-md-block">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                        data-target="#timeline_photo">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit btn-icon-prepend">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg> Edit Timeline Photo
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="header-links">
                            <ul class="links d-flex align-items-center mt-3 mt-md-0">
                                <li class="header-link-item d-flex align-items-center active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-columns mr-1 icon-md">
                                        <path
                                            d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18">
                                        </path>
                                    </svg>
                                    <a class="pt-1px d-none d-md-block" href="#">Timeline</a>
                                </li>
                                <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-user mr-1 icon-md">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <a class="pt-1px d-none d-md-block" href="#">About</a>
                                </li>
                                <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-users mr-1 icon-md">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    <a class="pt-1px d-none d-md-block" href="#">Friends <span
                                            class="text-muted tx-12">3,765</span></a>
                                </li>
                                <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-image mr-1 icon-md">
                                        <rect x="3" y="3" width="18" height="18"
                                            rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                    <a class="pt-1px d-none d-md-block" href="#">Photos</a>
                                </li>
                                <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-video mr-1 icon-md">
                                        <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                        <rect x="1" y="5" width="15" height="14"
                                            rx="2" ry="2"></rect>
                                    </svg>
                                    <a class="pt-1px d-none d-md-block" href="#">Videos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row profile-body">
                <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
                    <div class="card rounded">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="card-title mb-0">About</h6>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <!-- Button trigger modal -->
                                        <button class="dropdown-item d-flex align-items-center" data-toggle="modal"
                                            data-target="#edit_profile">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-git-branch icon-sm mr-2">
                                                <line x1="6" y1="3" x2="6" y2="15">
                                                </line>
                                                <circle cx="18" cy="6" r="3"></circle>
                                                <circle cx="6" cy="18" r="3"></circle>
                                                <path d="M18 9a9 9 0 0 1-9 9"></path>
                                            </svg> <span class>Update</span>
                                        </button>

                                        {{-- <a class="dropdown-item d-flex align-items-center" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye icon-sm mr-2">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg> <span class>View all</span></a> --}}
                                    </div>
                                </div>
                            </div>
                            <p>{{ $user->about }}</p>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Joined:</label>
                                <p class="text-muted">
                                    {{ date('F j, Y', strtotime($user->created_at)) }}</p>
                            </div>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Date of Birth:</label>
                                <p class="text-muted">
                                    {{ date('F j, Y', strtotime($user->date_of_birth)) }}</p>
                            </div>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Age:</label>
                                <p class="text-muted">
                                    @php
                                        $dateOfBirth = date('d-m-Y', strtotime($user->date_of_birth));
                                        $today = $date_now;
                                        $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                        echo $diff->format('%y');
                                    @endphp
                                </p>
                            </div>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Gender:</label>
                                <p class="text-muted">{{ Str::ucfirst($user->gender) }}</p>
                            </div>
                            {{-- <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Email:</label>
                                <p class="text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="ee838bae80818c828b9b87c08d8183">[email&#160;protected]</a></p>
                            </div>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Website:</label>
                                <p class="text-muted">www.nobleui.com</p>
                            </div> --}}
                            {{-- <div class="mt-3 d-flex social-links">
                                <a href="javascript:;"
                                    class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon github">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"
                                        data-toggle="tooltip" title data-original-title="github.com/nobleui">
                                        <path
                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                        </path>
                                    </svg>
                                </a>
                                <a href="javascript:;"
                                    class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon twitter">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-twitter" data-toggle="tooltip" title
                                        data-original-title="twitter.com/nobleui">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="javascript:;"
                                    class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-instagram" data-toggle="tooltip" title
                                        data-original-title="instagram.com/nobleui">
                                        <rect x="2" y="2" width="20" height="20"
                                            rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-xl-6 middle-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#wall"
                                        role="tab">Wall</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#annoucement"
                                        role="tab">Announcement</a>
                                </li>
                            </ul><!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="wall" role="tabpanel">
                                    <div class="card rounded">
                                        <form action="{{ route('admin_post_wall') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <textarea name="body" class="form-control" cols="30" rows="3" placeholder="What on your mind?"></textarea>
                                                </div>
                                                <br />
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="wall_images[]"
                                                            class="custom-file-input" id="upload_wall_image" multiple>
                                                        <label class="custom-file-label"
                                                            for="upload_wall_image">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <div class="img-thumbs img-thumbs-hidden" id="upload_wall_image_prev">
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6"></div>
                                                    <div class="col-md-6">
                                                        <button class="btn btn-sm btn-block btn-primary"
                                                            type="submit">POST</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="annoucement" role="tabpanel">
                                    <div class="card rounded">
                                        <form action="{{ route('admin_post_announcement') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="text" name="subject" required
                                                        class="form-control" placeholder="Subject">
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="body" class="form-control" cols="30" rows="3" placeholder="Announcement"></textarea>
                                                </div>
                                                <br />
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="images[]"
                                                            class="custom-file-input" id="upload-img" multiple>
                                                        <label class="custom-file-label" for="upload-img">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>

                                                <div class="row">
                                                    <div class="col-md-6"></div>
                                                    <div class="col-md-6">
                                                        <button class="btn btn-sm btn-block btn-primary"
                                                            type="submit">POST</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($announcement)
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card gedf-card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="mr-2">
                                                    <img class="rounded-circle" width="45"
                                                        src="{{ asset('/image/' . $user->profile_picture) }}" alt>
                                                </div>
                                                <div class="ml-2">
                                                    <div class="h5 m-0">{{ '@' . $user->name }}</div>
                                                    <div class="h7 text-muted">{{ $user->name }}</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle" type="button"
                                                        id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="gedf-drop1">
                                                        <div class="h6 dropdown-header">Configuration</div>
                                                        <a class="dropdown-item" href="#">Disable</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-muted h7 mb-0"> <i class="fa fa-clock-o"></i>10 min ago</div>
                                        <a class="card-link" href="#">
                                            <h5 class="card-title">{{ $announcement->subject }}</h5>
                                        </a>
                                        <p class="card-text">
                                            {{ $announcement->body }}
                                        </p>
                                        <div class="container profile">
                                            <div class="profile-img-list">
                                                @if (count($announcement_counter) == 0)
                                                @elseif(count($announcement_counter) > 5)
                                                    <div class="profile-img-list-item main"><a href="#"
                                                            class="profile-img-list-link"><span
                                                                class="profile-img-content"
                                                                style="background-image: url({{ asset('announcement_photos/' . $announcement->attachments_one->attachment) }})"></span></a>
                                                    </div>
                                                    @foreach ($announcement->attachments as $item)
                                                        <div class="profile-img-list-item"><a href="#"
                                                                class="profile-img-list-link"><span
                                                                    class="profile-img-content"
                                                                    style="background-image: url({{ asset('announcement_photos/' . $item->attachment) }})"></span></a>
                                                        </div>
                                                    @endforeach
                                                    <div class="profile-img-list-item with-number">
                                                        <a href="#" class="profile-img-list-link">
                                                            <span class="profile-img-content"
                                                                style="background-image: url({{ asset('announcement_photos/' . $announcement->attachments_one->attachment) }})"></span>
                                                            <div class="profile-img-number">+12</div>
                                                        </a>
                                                    </div>
                                                @elseif(count($announcement_counter) <= 5)
                                                    <div class="profile-img-list-item main"><a href="#"
                                                            class="profile-img-list-link"><span
                                                                class="profile-img-content"
                                                                style="background-image: url({{ asset('announcement_photos/' . $announcement->attachments_one->attachment) }})"></span></a>
                                                    </div>
                                                    @foreach ($announcement->attachments as $item)
                                                        <div class="profile-img-list-item"><a href="#"
                                                                class="profile-img-list-link"><span
                                                                    class="profile-img-content"
                                                                    style="background-image: url({{ asset('announcement_photos/' . $item->attachment) }})"></span></a>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <a class="card-link" data-toggle="collapse" href="#collapseExample"
                                            role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fa fa-comment"></i> Comment
                                        </a>
                                        <a class="card-link" href="{{ url('admin_announcement',['id' => $announcement->id]) }}">
                                            <span
                                                class="badge badge-dark">{{ count($announcement->announcement_reply) }}</span>
                                            See Comments
                                        </a>
                                    </div>
                                    <div class="card-footer">
                                        <form action="{{ route('admin_reply_announcement') }}" method="post">
                                            @csrf
                                            <div class="collapse" id="collapseExample">
                                                <div class="form-group">
                                                    <textarea name="content" required class="form-control" cols="30" rows="3"></textarea>
                                                    <input type="hidden" name="announcement_id"
                                                        value="{{ $announcement->id }}">
                                                </div>
                                                <button class="btn btn-sm float-right btn-primary">Reply</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @foreach ($wall as $wall_item)
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card gedf-card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="mr-2">
                                                    <img class="rounded-circle" width="45"
                                                        src="{{ asset('/image/' . $user->profile_picture) }}" alt>
                                                </div>
                                                <div class="ml-2">
                                                    <div class="h5 m-0">{{ '@' . $user->name }}</div>
                                                    <div class="h7 text-muted">{{ $user->name }}</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle" type="button"
                                                        id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="gedf-drop1">
                                                        <div class="h6 dropdown-header">Configuration</div>
                                                        <a class="dropdown-item" href="#">Disable</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-muted h7 mb-0"> <i class="fa fa-clock-o"></i>10 min ago</div>
                                        <p class="card-text">
                                            {{ $wall_item->body }}
                                        </p>
                                        <div class="container profile">
                                            <div class="profile-img-list">
                                                @if (count($wall_item->attachments) == 0)
                                                @elseif(count($wall_item->attachments) > 5)
                                                    <div class="profile-img-list-item main"><a href="#"
                                                            class="profile-img-list-link"><span
                                                                class="profile-img-content"
                                                                style="background-image: url({{ asset('announcement_photos/' . $wall_item->attachments_one->attachment) }})"></span></a>
                                                    </div>
                                                    @foreach ($wall_item->attachments_limit_3 as $item)
                                                        <div class="profile-img-list-item"><a href="#"
                                                                class="profile-img-list-link"><span
                                                                    class="profile-img-content"
                                                                    style="background-image: url({{ asset('announcement_photos/' . $item->attachment) }})"></span></a>
                                                        </div>
                                                    @endforeach
                                                    <div class="profile-img-list-item with-number">
                                                        <a href="#" class="profile-img-list-link">
                                                            <span class="profile-img-content"
                                                                style="background-image: url({{ asset('announcement_photos/' . $wall_item->attachments_one->attachment) }})"></span>
                                                            <div class="profile-img-number">
                                                                +{{ count($wall_item->attachments) }}</div>
                                                        </a>
                                                    </div>
                                                @elseif(count($wall_item->attachments_limit_3) <= 5)
                                                    <div class="profile-img-list-item main"><a href="#"
                                                            class="profile-img-list-link"><span
                                                                class="profile-img-content"
                                                                style="background-image: url({{ asset('announcement_photos/' . $wall_item->attachments_one->attachment) }})"></span></a>
                                                    </div>
                                                    @foreach ($announcement->attachments as $item)
                                                        <div class="profile-img-list-item"><a href="#"
                                                                class="profile-img-list-link"><span
                                                                    class="profile-img-content"
                                                                    style="background-image: url({{ asset('announcement_photos/' . $item->attachment) }})"></span></a>
                                                        </div>
                                                    @endforeach
                                                @endif


                                            </div>
                                        </div>
                                        <a class="card-link" data-toggle="collapse" href="#collapseExample"
                                            role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fa fa-comment"></i> Comment
                                        </a>
                                    </div>
                                    <div class="card-footer">
                                        {{-- <form action="{{ route('admin_reply_announcement') }}" method="post">
                                            @csrf
                                            <div class="collapse" id="collapseExample">
                                                <div class="form-group">
                                                    <textarea name="content" required class="form-control" cols="30" rows="3"></textarea>
                                                    <input type="hidden" name="announcement_id"
                                                        value="{{ $announcement->id }}">
                                                </div>
                                                <button class="btn btn-sm float-right btn-primary">Reply</button>
                                            </div>
                                        </form> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="d-none d-xl-block col-xl-3 right-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card rounded">
                                <div class="card-body">
                                    <h6 class="card-title">latest photos</h6>
                                    <div class="latest-photos">
                                        <div class="row">
                                            @foreach ($latest_announcement_photos as $item)
                                                <figure>
                                                    <img class="img-fluid"
                                                        src="{{ asset('announcement_photos/' . $item->attachment) }}"
                                                        alt>
                                                </figure>
                                            @endforeach
                                            @foreach ($latest_wall_photos as $item)
                                                <figure>
                                                    <img class="img-fluid"
                                                        src="{{ asset('announcement_photos/' . $item->attachment) }}"
                                                        alt>
                                                </figure>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 grid-margin">
                            <div class="card rounded">
                                <div class="card-body">
                                    <h6 class="card-title">suggestions for you</h6>
                                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                        <div class="d-flex align-items-center hover-pointer">
                                            <img class="img-xs rounded-circle"
                                                src="https://bootdey.com/img/Content/avatar/avatar2.png" alt>
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">12 Mutual Friends</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user-plus" data-toggle="tooltip" title
                                                data-original-title="Connect">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="8.5" cy="7" r="4"></circle>
                                                <line x1="20" y1="8" x2="20" y2="14">
                                                </line>
                                                <line x1="23" y1="11" x2="17" y2="11">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                        <div class="d-flex align-items-center hover-pointer">
                                            <img class="img-xs rounded-circle"
                                                src="https://bootdey.com/img/Content/avatar/avatar3.png" alt>
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">12 Mutual Friends</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user-plus" data-toggle="tooltip" title
                                                data-original-title="Connect">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="8.5" cy="7" r="4"></circle>
                                                <line x1="20" y1="8" x2="20" y2="14">
                                                </line>
                                                <line x1="23" y1="11" x2="17" y2="11">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                        <div class="d-flex align-items-center hover-pointer">
                                            <img class="img-xs rounded-circle"
                                                src="https://bootdey.com/img/Content/avatar/avatar4.png" alt>
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">12 Mutual Friends</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user-plus" data-toggle="tooltip" title
                                                data-original-title="Connect">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="8.5" cy="7" r="4"></circle>
                                                <line x1="20" y1="8" x2="20" y2="14">
                                                </line>
                                                <line x1="23" y1="11" x2="17" y2="11">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                        <div class="d-flex align-items-center hover-pointer">
                                            <img class="img-xs rounded-circle"
                                                src="https://bootdey.com/img/Content/avatar/avatar5.png" alt>
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">12 Mutual Friends</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user-plus" data-toggle="tooltip" title
                                                data-original-title="Connect">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="8.5" cy="7" r="4"></circle>
                                                <line x1="20" y1="8" x2="20" y2="14">
                                                </line>
                                                <line x1="23" y1="11" x2="17" y2="11">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                        <div class="d-flex align-items-center hover-pointer">
                                            <img class="img-xs rounded-circle"
                                                src="https://bootdey.com/img/Content/avatar/avatar6.png" alt>
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">12 Mutual Friends</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user-plus" data-toggle="tooltip" title
                                                data-original-title="Connect">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="8.5" cy="7" r="4"></circle>
                                                <line x1="20" y1="8" x2="20" y2="14">
                                                </line>
                                                <line x1="23" y1="11" x2="17" y2="11">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center hover-pointer">
                                            <img class="img-xs rounded-circle"
                                                src="https://bootdey.com/img/Content/avatar/avatar7.png" alt>
                                            <div class="ml-2">
                                                <p>Mike Popescu</p>
                                                <p class="tx-11 text-muted">12 Mutual Friends</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user-plus" data-toggle="tooltip" title
                                                data-original-title="Connect">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="8.5" cy="7" r="4"></circle>
                                                <line x1="20" y1="8" x2="20" y2="14">
                                                </line>
                                                <line x1="23" y1="11" x2="17" y2="11">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="edit_profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ Str::ucfirst($user->name) }}'s Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin_update_profile') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Tell something about you</label>
                                <textarea name="about" class="form-control" cols="30" rows="10" required>{{ $user->about }}</textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="">Date of Birth</label>
                                <input type="date" class="form-control form-control-sm" required
                                    name="date_of_birth" value="{{ $user->date_of_birth }}">
                            </div>
                            <div class="col-md-12">
                                <label for="">Gender</label>
                                @if ($user->gender == null)
                                    <select name="gender" class="form-control form-control-sm" required>
                                        <option value="" default>Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                @elseif($user->gender == 'Male')
                                    <select name="gender" class="form-control form-control-sm" required>
                                        <option value="" default>Select</option>
                                        <option value="Male" selected>Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                @elseif($user->gender == 'Female')
                                    <select name="gender" class="form-control form-control-sm" required>
                                        <option value="" default>Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female" selected>Female</option>
                                    </select>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="timeline_photo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Timeline Photo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin_update_timeline_picture') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <img src="" id="timeline_picture_image_preview" alt="" style="width:100%;">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="timeline_picture_image"
                                    name="timeline_picture" required accept='image/*' onchange="showTimelineImage()">
                                <label class="custom-file-label" for="timeline_picture_image">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profile_picture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Profile Picture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin_update_profile_picture') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <img src="" id="profile_picture_image_preview" alt="" style="width:100%;">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="profile_picture_image"
                                    name="profile_picture" required accept='image/*' onchange="showImage()">
                                <label class="custom-file-label" for="profile_picture_image">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const imageUploader_profile_picture = document.getElementById("profile_picture_image");
        const imagePreview_profile_picture = document.getElementById("profile_picture_image_preview");

        function showImage() {
            let reader = new FileReader();
            reader.readAsDataURL(imageUploader_profile_picture.files[0]);
            reader.onload = function(e) {
                imagePreview_profile_picture.classList.add("show");
                imagePreview_profile_picture.src = e.target.result;
            };
        }

        const imageUploader_timeline_picture = document.getElementById("timeline_picture_image");
        const imagePreview_timeline_picture = document.getElementById("timeline_picture_image_preview");

        function showTimelineImage() {
            let reader = new FileReader();
            reader.readAsDataURL(imageUploader_timeline_picture.files[0]);
            reader.onload = function(e) {
                imagePreview_timeline_picture.classList.add("show");
                imagePreview_timeline_picture.src = e.target.result;
            };
        }




        var upload_wall_image = document.getElementById('upload_wall_image'),
            upload_wall_image_prev = document.getElementById('upload_wall_image_prev'),
            upload_wall_imageForm = document.getElementById('form-upload'),
            totalFiles, previewTitle, previewTitleText, img;

        upload_wall_image.addEventListener('change', wall_prev_image, true);

        function wall_prev_image(event) {
            totalFiles = upload_wall_image.files.length;

            if (!!totalFiles) {
                upload_wall_image_prev.classList.remove('img-thumbs-hidden');
            }

            for (var i = 0; i < totalFiles; i++) {
                wrapper = document.createElement('div');
                wrapper.classList.add('wrapper-thumb');
                removeBtn = document.createElement("span");
                nodeRemove = document.createTextNode('x');
                removeBtn.classList.add('remove-btn');
                removeBtn.appendChild(nodeRemove);
                img = document.createElement('img');
                img.src = URL.createObjectURL(event.target.files[i]);
                img.classList.add('img-preview-thumb');
                wrapper.appendChild(img);
                wrapper.appendChild(removeBtn);
                upload_wall_image_prev.appendChild(wrapper);

                $('.remove-btn').click(function() {
                    $(this).parent('.wrapper-thumb').remove();
                });

            }


        }












        var imgUpload = document.getElementById('upload-img'),
            imgPreview = document.getElementById('img-preview'),
            imgUploadForm = document.getElementById('form-upload'),
            totalFiles, previewTitle, previewTitleText, img;

        imgUpload.addEventListener('change', previewImgs, true);

        function previewImgs(event) {
            totalFiles = imgUpload.files.length;

            if (!!totalFiles) {
                imgPreview.classList.remove('img-thumbs-hidden');
            }

            for (var i = 0; i < totalFiles; i++) {
                wrapper = document.createElement('div');
                wrapper.classList.add('wrapper-thumb');
                removeBtn = document.createElement("span");
                nodeRemove = document.createTextNode('x');
                removeBtn.classList.add('remove-btn');
                removeBtn.appendChild(nodeRemove);
                img = document.createElement('img');
                img.src = URL.createObjectURL(event.target.files[i]);
                img.classList.add('img-preview-thumb');
                wrapper.appendChild(img);
                wrapper.appendChild(removeBtn);
                imgPreview.appendChild(wrapper);

                $('.remove-btn').click(function() {
                    $(this).parent('.wrapper-thumb').remove();
                });

            }


        }
    </script>
</body>

</html>
