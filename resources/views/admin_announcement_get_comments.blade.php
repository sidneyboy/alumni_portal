<div class="social-footer" id="reloader">
    @foreach ($announcement_replies as $announcement_reply_details)
        <div class="social-comment">
            <a href class="pull-left">
                <img alt="image"
                    src="{{ asset('image/' . $announcement_reply_details->user_admin->profile_picture) }}">
            </a>
            <div class="media-body">
                {{-- <a href="#">
                    {{ $announcement_reply_details->user_admin->name }}
                </a>
                {{ $announcement_reply_details->content }}
                <br> --}}

                @if ($announcement_reply_details->user_id == auth()->user()->id)
                    {{ Str::ucfirst($announcement_reply_details->user_admin->name) }}
                    {{ Str::ucfirst($announcement_reply_details->user_admin->middle_name) }}
                    {{ Str::ucfirst($announcement_reply_details->user_admin->last_name) }}
                    <small class="text-muted">{{ date('F j, Y', strtotime($announcement_reply_details->created_at)) }}</small>
                @else
                    <a style="text-decoration: none"
                        href="{{ url('admin_view_user_timeline', ['id' => $announcement_reply_details->user_id]) }}">
                        {{ Str::ucfirst($announcement_reply_details->user_admin->name) }}
                        {{ Str::ucfirst($announcement_reply_details->user_admin->middle_name) }}
                        {{ Str::ucfirst($announcement_reply_details->user_admin->last_name) }}
                    </a>
                    <small class="text-muted">{{ date('F j, Y', strtotime($announcement_reply_details->created_at)) }}</small>
                @endif
                <br>
                {{ $announcement_reply_details->content }}
            </div>
        </div>
    @endforeach
</div>
