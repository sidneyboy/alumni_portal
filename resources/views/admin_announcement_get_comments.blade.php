<div class="social-footer" id="reloader">
    @foreach ($announcement_replies as $announcement_reply_details)
        <div class="social-comment">
            <a href class="pull-left">
                <img alt="image"
                    src="{{ asset('image/' . $announcement_reply_details->user_admin->profile_picture) }}">
            </a>
            <div class="media-body">
                <a href="#">
                    {{ $announcement_reply_details->user_admin->name }}
                </a>
                {{ $announcement_reply_details->content }}
                <br>

                <small
                    class="text-muted">{{ date('F j, Y', strtotime($announcement_reply_details->created_at)) }}</small>
            </div>
        </div>
    @endforeach
</div>
