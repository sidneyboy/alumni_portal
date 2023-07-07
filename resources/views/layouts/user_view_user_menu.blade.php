<div class="profile-header">
    <div class="cover">
        <div class="gray-shade"></div>
        <figure>
            <img src="{{ asset('image/' . $user->timeline_picture) }}" class="img-fluid" alt="profile cover">
        </figure>
        <div class="cover-body d-flex justify-content-between align-items-center">
            <div>
                <a href="" data-toggle="modal" style="text-decoration: none;" data-target="#profile_picture">
                    <img class="profile-pic" src="{{ asset('image/' . $user->profile_picture) }}" alt="profile">
                </a>
                <span class="profile-name">{{ Str::ucfirst($user->name) }} {{ Str::ucfirst($user->middle_name) }}
                    {{ Str::ucfirst($user->last_name) }}</span>
            </div>
        </div>
    </div>

    <div class="header-links">
        <ul class="links d-flex align-items-center mt-3 mt-md-0">
            <li class="header-link-item d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-columns mr-1 icon-md">
                    <path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18">
                    </path>
                </svg>
                <a class="pt-1px d-none d-md-block"
                    href="{{ url('user_view_user', ['id' => $user->id]) }}">Timeline</a>
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
                <a class="pt-1px d-none d-md-block" href="{{ url('user_view_user_photos', ['id' => $user->id]) }}">Photos</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
                </svg>
                <a class="pt-1px d-none d-md-block" href="{{ url('home') }}">
                    Home</a>
            </li>
        </ul>
    </div>
</div>
