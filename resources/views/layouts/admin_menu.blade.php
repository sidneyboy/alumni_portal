<div class="profile-header">
    <div class="cover">
        <div class="gray-shade"></div>
        <figure>
            @if ($user->timeline_picture != null)
                <img src="{{ asset('image/' . $user->timeline_picture) }}" class="img-fluid" alt="profile cover">
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
        <ul class="links nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('admin_feed') }}">
                    Feed</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('home') }}">Timeline</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin_photos') }}">Photos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('chatify') }}" target="_blank">Messenger <span
                        class="badge badge-primary" id="get_message_notif">
                    </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin_user_list') }}">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin_survey') }}">Survey</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin_reports') }}">Reports</a>
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
