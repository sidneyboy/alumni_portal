@if ($announcement)
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card gedf-card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-2">
                                <img class="rounded-circle" width="45"
                                    src="{{ asset('/image/' . $announcement->user->profile_picture) }}" alt>
                            </div>
                            <div class="ml-2">
                                <div class="h5 m-0">
                                    {{ '@' . Str::ucfirst($announcement->user->name) }} (Announcement)</div>
                                <div class="h7 text-muted">
                                    @if ($announcement->user_id == $current_user_id->id)
                                        {{ Str::ucfirst($announcement->user->name) }}
                                        {{ Str::ucfirst($announcement->user->middle_name) }}
                                        {{ Str::ucfirst($announcement->user->last_name) }}
                                    @else
                                        <a style="text-decoration: none"
                                            href="{{ url('user_view_user', ['id' => $announcement->user_id]) }}">
                                            {{ Str::ucfirst($announcement->user->name) }}
                                            {{ Str::ucfirst($announcement->user->middle_name) }}
                                            {{ Str::ucfirst($announcement->user->last_name) }}</a>
                                    @endif
                                    <i
                                        style="color:#007bff;font-size:12px;">({{ date('F j, Y', strtotime($announcement->created_at)) }})</i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                    <div class="h6 dropdown-header">Configuration</div>
                                    <a class="dropdown-item" href="#">Disable</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{ $announcement->body }}
                    </p>
                    <div class="container profile">
                        <div class="profile-img-list">
                            @if (count($announcement->attachments) == 0)
                            @elseif(count($announcement->attachments) > 5)
                                <div class="profile-img-list-item main"><a href="#"
                                        class="profile-img-list-link"><span class="profile-img-content"
                                            style="background-image: url({{ asset('announcement_photos/' . $announcement->attachments_one->attachment) }})"></span></a>
                                </div>
                                @foreach ($announcement->attachments as $item)
                                    <div class="profile-img-list-item"><a href="#"
                                            class="profile-img-list-link"><span class="profile-img-content"
                                                style="background-image: url({{ asset('announcement_photos/' . $item->attachment) }})"></span></a>
                                    </div>
                                @endforeach
                                <div class="profile-img-list-item with-number">
                                    <a href="#" class="profile-img-list-link">
                                        <span class="profile-img-content"
                                            style="background-image: url({{ asset('announcement_photos/' . $announcement->attachments_one->attachment) }})"></span>
                                        <div class="profile-img-number">
                                            +{{ count($announcement->attachments) }}</div>
                                    </a>
                                </div>
                            @elseif(count($announcement->attachments) <= 5)
                                <div class="profile-img-list-item main"><a href="#"
                                        class="profile-img-list-link"><span class="profile-img-content"
                                            style="background-image: url({{ asset('announcement_photos/' . $announcement->attachments_one->attachment) }})"></span></a>
                                </div>
                                @foreach ($announcement->attachments as $item)
                                    <div class="profile-img-list-item"><a href="#"
                                            class="profile-img-list-link"><span class="profile-img-content"
                                                style="background-image: url({{ asset('announcement_photos/' . $item->attachment) }})"></span></a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <a class="card-link" data-toggle="collapse"
                        href="#collapseExampleuser_announcement_reply{{ $announcement->id }}" role="button"
                        aria-expanded="false"
                        aria-controls="collapseExampleuser_announcement_reply{{ $announcement->id }}">
                        <i class="fa fa-comment"></i> Comment
                    </a>
                    <a class="card-link" href="{{ url('user_announcement', ['id' => $announcement->id]) }}">
                        <span class="badge badge-dark">{{ count($announcement->announcement_reply) }}</span>
                        See Comments
                    </a>
                </div>
                <div class="card-footer">
                    <form action="{{ route('user_announcement_reply') }}" method="post">
                        @csrf
                        <div class="collapse" id="collapseExampleuser_announcement_reply{{ $announcement->id }}">
                            <div class="form-group">
                                <textarea name="content" required class="form-control" cols="30" rows="3"></textarea>
                                <input type="hidden" name="announcement_id" value="{{ $announcement->id }}">
                            </div>
                            <button class="btn btn-sm float-right btn-primary">Reply</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif


@if (count($wall) != 0)
    @foreach ($wall as $wall_item)
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    @if ($wall_item->user_admin->profile_picture != null)
                                        <img class="rounded-circle" width="45"
                                            src="{{ asset('/image/' . $wall_item->user_admin->profile_picture) }}" alt>
                                    @else
                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" width="45"
                                            class="rounded-circle" alt="profile cover">
                                    @endif
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">
                                        {{ '@' . Str::ucfirst($wall_item->user_admin->name) }}</div>
                                    <div class="h7 text-muted">
                                        @if ($wall_item->user_id == $current_user_id->id)
                                            {{ Str::ucfirst($wall_item->user_admin->name) }}
                                            {{ Str::ucfirst($wall_item->user_admin->middle_name) }}
                                            {{ Str::ucfirst($wall_item->user_admin->last_name) }}
                                        @else
                                            <a style="text-decoration: none"
                                                href="{{ url('user_view_user', ['id' => $wall_item->user_id]) }}">
                                                {{ Str::ucfirst($wall_item->user_admin->name) }}
                                                {{ Str::ucfirst($wall_item->user_admin->middle_name) }}
                                                {{ Str::ucfirst($wall_item->user_admin->last_name) }}</a>
                                        @endif
                                        <i
                                            style="color:#007bff;font-size:12px;">({{ date('F j, Y', strtotime($wall_item->created_at)) }})</i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuration</div>
                                        <a class="dropdown-item" href="#">Disable</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{ $wall_item->body }}
                        </p>
                        <div class="container profile">
                            <div class="profile-img-list">
                                @if (count($wall_item->attachments) == 0)
                                @elseif(count($wall_item->attachments) > 5)
                                    <div class="profile-img-list-item main"><a href="#"
                                            class="profile-img-list-link"><span class="profile-img-content"
                                                style="background-image: url({{ asset('announcement_photos/' . $wall_item->attachments_one->attachment) }})"></span></a>
                                    </div>
                                    @foreach ($wall_item->attachments_limit_3 as $item)
                                        <div class="profile-img-list-item"><a href="#"
                                                class="profile-img-list-link"><span class="profile-img-content"
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
                                            class="profile-img-list-link"><span class="profile-img-content"
                                                style="background-image: url({{ asset('announcement_photos/' . $wall_item->attachments_one->attachment) }})"></span></a>
                                    </div>
                                    @foreach ($wall_item->attachments as $item)
                                        <div class="profile-img-list-item"><a href="#"
                                                class="profile-img-list-link"><span class="profile-img-content"
                                                    style="background-image: url({{ asset('announcement_photos/' . $item->attachment) }})"></span></a>
                                        </div>
                                    @endforeach
                                @endif


                            </div>
                        </div>
                        <a class="card-link" data-toggle="collapse"
                            href="#collapseExampleuser_wall_reply{{ $wall_item->id }}" role="button"
                            aria-expanded="false" aria-controls="collapseExampleuser_wall_reply{{ $wall_item->id }}">
                            <i class="fa fa-comment"></i> Comment
                        </a>
                        <a class="card-link" href="{{ url('user_wall', ['id' => $wall_item->id]) }}">
                            <span class="badge badge-dark">{{ count($wall_item->wall_replies) }}</span>
                            See Comments
                        </a>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('user_wall_reply') }}" method="post">
                            @csrf
                            <div class="collapse" id="collapseExampleuser_wall_reply{{ $wall_item->id }}">
                                <div class="form-group">
                                    <textarea name="content" required class="form-control" cols="30" rows="3"></textarea>
                                    <input type="hidden" name="wall_id" value="{{ $wall_item->id }}">
                                </div>
                                <button class="btn btn-sm float-right btn-primary">Reply</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
