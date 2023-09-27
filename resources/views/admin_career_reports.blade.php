<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>Social Media</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

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
            font-size: 15px;
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









        .margin30 {
            margin-bottom: 30px;
        }

        .item-img-wrap {
            position: relative;
            text-align: center;
            overflow: hidden;
        }

        .item-img-wrap img {
            -moz-transition: all 200ms linear;
            -o-transition: all 200ms linear;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
            width: 100%;
        }

        /************************image hover effect*******************/
        .item-img-wrap {
            position: relative;
            text-align: center;
            overflow: hidden;
        }

        .item-img-wrap img {
            -moz-transition: all 200ms linear;
            -o-transition: all 200ms linear;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
            width: 100%;
        }

        .item-img-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
        }

        .item-img-overlay span {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: url(http://bootstraplovers.com/templates/assan-2.2/main-template/img/plus.png) no-repeat center center rgba(0, 0, 0, 0.7);
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
            opacity: 0;
            -moz-transition: opacity 250ms linear;
            -o-transition: opacity 250ms linear;
            -webkit-transition: opacity 250ms linear;
            transition: opacity 250ms linear;
        }

        .item-img-wrap:hover .item-img-overlay span {
            opacity: 1;
        }

        .item-img-wrap:hover img {
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }


        /*************pagination***********/
        .gallery-bottom .pagination {
            margin-top: 0px;
        }

        .pagination>li>a,
        .pagination>li>span {
            background-color: #ccc;
            padding: 3px 9px;
            color: #fff;
            border: 0px;
        }

        .pagination>li>a {
            margin-right: 5px;
        }

        .pagination>.active>a,
        .pagination>.active>span,
        .pagination>.active>a:hover,
        .pagination>.active>span:hover,
        .pagination>.active>a:focus,
        .pagination>.active>span:focus {
            background-color: #32c5d2;
        }


        #demo {
            height: 100%;
            position: relative;
            overflow: hidden;
        }


        .green {
            background-color: #6fb936;
        }

        .thumb {
            margin-bottom: 30px;
        }

        .page-top {
            margin-top: 85px;
        }


        img.zoom {
            width: 100%;
            height: 200px;
            border-radius: 5px;
            object-fit: cover;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
        }


        .transition {
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
            transform: scale(1.2);
        }

        .modal-header {

            border-bottom: none;
        }

        .modal-title {
            color: #000;
        }

        .modal-footer {
            display: none;
        }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('07d36cf2e72c01629c13', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('comment_channel');
        channel.bind('comment_event', function(data) {
            // toastr.info(JSON.stringify(data.name));
            toastr["success"]('<div><a href="' + data.link +
                '" target="_blank">' + JSON.stringify(data.name) + '</a>')
        });
    </script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

</head>

<body>
    <div class="container">
        <div class="profile-page tx-13">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="profile-header">
                        @include('layouts/admin_menu')
                    </div>
                </div>
            </div>
            <div class="row profile-body">
                <div class="col-md-12 col-xl-12 middle-wrapper">
                    <div class="card rounded">
                        <div class="card-body">
                            <form id="admin_year_graduated_show">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="year_graduated" id="year_graduated" class="form-control" required>
                                            <option value="" default>Select Batch</option>
                                            @foreach ($user_batch as $data)
                                                @php
                                                    $variable_data = explode('-', $data->year_graduated);
                                                    $year_graduated = $variable_data[0];
                                                @endphp
                                                <option value="{{ $year_graduated }}">Batch {{ $year_graduated }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="career" id="career" class="form-control" required>
                                            <option value="" default>Select Career</option>
                                            <option value="Working">Working</option>
                                            <option value="Tertiary Education">Tertiary Education</option>
                                            <option value="Business">Business</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <br />
                                            <button class="btn btn-sm float-right btn-info"
                                                type="submit">Generate</button>
                                            <br />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="admin_year_graduated_show_page"></div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />

        <div class="modal fade" id="edit_profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ Str::ucfirst($user->name) }}
                            {{ $user->middle_name }}
                            {{ $user->last_name }}'s Profile</h5>
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
                            <button type="button" class="btn btn-sm btn-secondary"
                                data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="timeline_photo" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img src="" id="timeline_picture_image_preview" alt=""
                                style="width:100%;">
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="timeline_picture_image"
                                        name="timeline_picture" required accept='image/*'
                                        onchange="showTimelineImage()">
                                    <label class="custom-file-label" for="timeline_picture_image">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <button type="button" class="btn btn-sm btn-secondary"
                                data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="profile_picture" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img src="" id="profile_picture_image_preview" alt=""
                                style="width:100%;">
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
                            <button type="button" class="btn btn-sm btn-secondary"
                                data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
        <script>
            $("#admin_year_graduated_show").on('submit', (function(e) {
                e.preventDefault();
                $.ajax({
                    url: "admin_year_graduated_show",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $('#admin_year_graduated_show_page').html(data);
                    },
                    error: function(error) {
                        $('#loader').hide();
                        alert('Cannot Proceed! Contact IT support!');
                    }
                });
            }));



          



            $(document).ready(function() {
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });

                $(".zoom").hover(function() {

                    $(this).addClass('transition');
                }, function() {

                    $(this).removeClass('transition');
                });
            });








            $("#admin_survey_proceed").on('submit', (function(e) {
                e.preventDefault();
                $.ajax({
                    url: "admin_survey_proceed",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $('#admin_survey_proceed_page').html(data);
                    },
                    error: function(error) {
                        $('#loader').hide();
                        alert('Cannot Proceed! Contact IT support!');
                    }
                });
            }));


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