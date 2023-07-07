<div class="social-footer" id="reloader">
    @foreach ($wall_replies as $wall_reply_details)
        <div class="social-comment">
            <a href class="pull-left">
                <img alt="image" src="{{ asset('image/' . $wall_reply_details->user_admin->profile_picture) }}">
            </a>
            <div class="media-body">
                @if ($wall_reply_details->user_id == auth()->user()->id)
                    {{ Str::ucfirst($wall_reply_details->user_admin->name) }}
                    {{ Str::ucfirst($wall_reply_details->user_admin->middle_name) }}
                    {{ Str::ucfirst($wall_reply_details->user_admin->last_name) }}
                @else
                    <a style="text-decoration: none"
                        href="{{ url('admin_view_user_timeline', ['id' => $wall_reply_details->user_id]) }}">
                        {{ Str::ucfirst($wall_reply_details->user_admin->name) }}
                        {{ Str::ucfirst($wall_reply_details->user_admin->middle_name) }}
                        {{ Str::ucfirst($wall_reply_details->user_admin->last_name) }}
                    </a>
                @endif
                {{ $wall_reply_details->content }}
                <br>
                <small class="text-muted">{{ date('F j, Y', strtotime($wall_reply_details->created_at)) }}</small>
            </div>
        </div>
    @endforeach
</div>
