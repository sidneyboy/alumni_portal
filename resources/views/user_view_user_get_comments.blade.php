<div class="social-footer" id="reloader">
    @foreach ($wall_replies as $wall_reply_details)
        <div class="social-comment">
            <a href class="pull-left">



                @if ($wall_reply_details->user_admin->profile_picture != null)
                    <img alt="image" src="{{ asset('image/' . $wall_reply_details->user_admin->profile_picture) }}">
                @else
                    <img class="profile-pic" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="profile">
                @endif
            </a>
            <div class="media-body">
                @if ($wall_reply_details->user_id == auth()->user()->id)
                    {{ Str::ucfirst($wall_reply_details->user_admin->name) }}
                    {{ Str::ucfirst($wall_reply_details->user_admin->middle_name) }}
                    {{ Str::ucfirst($wall_reply_details->user_admin->last_name) }}
                    <small class="text-muted">{{ date('F j, Y', strtotime($wall_reply_details->created_at)) }}</small>
                @else
                    <a style="text-decoration: none"
                        href="{{ url('user_view_user', ['id' => $wall_reply_details->user_id]) }}">
                        {{ Str::ucfirst($wall_reply_details->user_admin->name) }}
                        {{ Str::ucfirst($wall_reply_details->user_admin->middle_name) }}
                        {{ Str::ucfirst($wall_reply_details->user_admin->last_name) }}
                    </a>
                    <small class="text-muted">{{ date('F j, Y', strtotime($wall_reply_details->created_at)) }}</small>
                @endif
                <br>
                {{ $wall_reply_details->content }}
            </div>
        </div>
    @endforeach
</div>
