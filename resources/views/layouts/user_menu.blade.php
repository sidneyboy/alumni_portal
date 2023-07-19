<div class="profile-header">
    <div class="cover">
        <div class="gray-shade"></div>
        <figure>
            @if ($user->timeline_picture != null)
                <img src="{{ asset('image/' . $user->timeline_picture) }}" style="width:1920px;height:350px;object-fit:cover;" class="img-fluid" alt="profile cover">
            @else
                <img src="{{ asset('image/timelinephoto.jpg') }}" class="img-fluid" alt="profile cover">
            @endif
        </figure>
        <div class="cover-body d-flex justify-content-between align-items-center">
            <div>
                <a href="" data-toggle="modal" style="text-decoration: none;" data-target="#profile_picture">
                    @if ($user->profile_picture != null)
                        <img class="profile-pic" src="{{ asset('image/' . $user->profile_picture) }}" alt="profile">
                    @else
                        <img class="profile-pic" src="https://bootdey.com/img/Content/avatar/avatar6.png"
                            alt="profile">
                    @endif
                </a>
                <span class="profile-name">{{ Str::ucfirst($user->name) }} {{ Str::ucfirst($user->middle_name) }}
                    {{ Str::ucfirst($user->last_name) }}</span>
            </div>
            <div class="d-none d-md-block">
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#timeline_photo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-edit btn-icon-prepend">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg> Edit Timeline Photo
                </button>
            </div>
        </div>
    </div>

    <div class="header-links">
        {{-- <ul class="links d-flex align-items-center mt-3 mt-md-0">
            <li class="header-link-item d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 448 512">
                    <path
                        d="M0 64C0 46.3 14.3 32 32 32c229.8 0 416 186.2 416 416c0 17.7-14.3 32-32 32s-32-14.3-32-32C384 253.6 226.4 96 32 96C14.3 96 0 81.7 0 64zM0 416a64 64 0 1 1 128 0A64 64 0 1 1 0 416zM32 160c159.1 0 288 128.9 288 288c0 17.7-14.3 32-32 32s-32-14.3-32-32c0-123.7-100.3-224-224-224c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                </svg>
                <a class="pt-1px d-none d-md-block" href="{{ url('user_feed') }}"> Feed</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-columns mr-1 icon-md">
                    <path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18">
                    </path>
                </svg>
                <a class="pt-1px d-none d-md-block" href="{{ url('user_welcome') }}">
                    Timeline</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-image mr-1 icon-md">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2">
                    </rect>
                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                    <polyline points="21 15 16 10 5 21"></polyline>
                </svg>
                <a class="pt-1px d-none d-md-block" href="{{ url('user_photos') }}">
                    Photos</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chat-left-text" viewBox="0 0 16 16">
                    <path
                        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path
                        d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                </svg>
                <a class="pt-1px d-none d-md-block" href="{{ url('admin_messenger') }}">

                    Messenger</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
                </svg>
                <a class="pt-1px d-none d-md-block" href="{{ url('logout') }}">

                    Logout</a>
            </li>
        </ul> --}}
        <ul class="links nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('user_feed') }}">
                    Feed</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('user_welcome') }}">Timeline</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('user_photos') }}">Photos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('chatify') }}" target="_blank">Messenger <span
                        class="badge badge-primary" id="get_message_notif">
                    </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}">Logout</a>
            </li>
        </ul>
    </div>



</div>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function number_of_messages() {
        announcement_id = 'asdasd';
        $.ajax({
            type: "POST",
            url: "/get_message_notif",
            data: 'announcement_id=' + announcement_id,
            success: function(res) {
                $('#get_message_notif').html(res);
            }
        });
    }

    $(function() {
        number_of_messages();
        setInterval(function() {
            number_of_messages();
        }, 5000);

    });
</script>
