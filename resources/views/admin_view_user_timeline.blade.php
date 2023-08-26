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
                '" target="_blank">'+ JSON.stringify(data.name) +'</a>')
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="profile-page tx-13">
            <div class="row">
                <div class="col-12 grid-margin">
                    @include('layouts/admin_view_user_timeline_menu')
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
                                            viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
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
                                    @if ($user->date_of_birth != null)
                                        {{ date('F j, Y', strtotime($user->date_of_birth)) }}
                                    @else
                                        N/A
                                    @endif
                                </p>
                            </div>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Age:</label>
                                <p class="text-muted">
                                    @if ($user->date_of_birth != null)
                                        @php
                                            $dateOfBirth = date('d-m-Y', strtotime($user->date_of_birth));
                                            $today = $date_now;
                                            $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                            echo $diff->format('%y');
                                        @endphp
                                    @else
                                        N/A
                                    @endif
                                </p>
                            </div>
                            <div class="mt-3">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Gender:</label><br />
                                @if ($user->date_of_birth != null)
                                    <p class="text-muted">{{ Str::ucfirst($user->gender) }}</p>
                                @else
                                    N/A
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-xl-6 middle-wrapper">
                    @foreach ($wall as $wall_item)
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card gedf-card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="mr-2">
                                                    <img class="rounded-circle" width="45"
                                                        src="{{ asset('/image/' . $wall_item->user_admin->profile_picture) }}"
                                                        alt>
                                                </div>
                                                <div class="ml-2">
                                                    <div class="h5 m-0">{{ '@' . $wall_item->user_admin->name }}</div>
                                                    <div class="h7 text-muted">
                                                        <a
                                                            href="{{ url('admin_view_user_timeline', ['id' => $wall_item->user_id]) }}">{{ Str::ucfirst($wall_item->user_admin->name) }}
                                                            {{ Str::ucfirst($wall_item->user_admin->middle_name) }}
                                                            {{ Str::ucfirst($wall_item->user_admin->last_name) }}</a>
                                                        <i
                                                            style="color:#007bff;font-size:12px;">({{ date('F j, Y', strtotime($wall_item->created_at)) }})</i>
                                                    </div>
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
                                                    @foreach ($wall_item->attachments_limit_3 as $item)
                                                        <div class="profile-img-list-item"><a href="#"
                                                                class="profile-img-list-link"><span
                                                                    class="profile-img-content"
                                                                    style="background-image: url({{ asset('announcement_photos/' . $item->attachment) }})"></span></a>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <a class="card-link" data-toggle="collapse"
                                            href="#collapseExampleadmin_view_user_wall_reply{{ $wall_item->id }}"
                                            role="button" aria-expanded="false"
                                            aria-controls="collapseExampleadmin_view_user_wall_reply{{ $wall_item->id }}">
                                            <i class="fa fa-comment"></i> Comment
                                        </a>
                                        <a class="card-link"
                                            href="{{ url('admin_view_user_wall', ['id' => $wall_item->id]) }}">
                                            <span
                                                class="badge badge-dark">{{ count($wall_item->wall_replies) }}</span>
                                            See Comments
                                        </a>
                                    </div>
                                    <div class="card-footer">
                                        <form action="{{ route('admin_view_user_reply') }}" method="post">
                                            @csrf
                                            <div class="collapse"
                                                id="collapseExampleadmin_view_user_wall_reply{{ $wall_item->id }}">
                                                <div class="form-group">
                                                    <textarea name="content" required class="form-control" cols="30" rows="3"></textarea>
                                                    <input type="hidden" name="wall_id"
                                                        value="{{ $wall_item->id }}">
                                                </div>
                                                <button class="btn btn-sm float-right btn-primary">Reply</button>
                                            </div>
                                        </form>
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

                    </div>
                </div>

            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
