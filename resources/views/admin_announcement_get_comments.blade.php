<div class="social-footer" id="reloader">
    @foreach ($announcement_replies as $announcement_reply_details)
        @if ($announcement_reply_details->user_type == 'admin')
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
        @else
            <div class="social-comment">
                <a href class="pull-left">
                    <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                </a>
                <div class="media-body">
                    <a href="#">
                        Andrew Williams
                    </a>
                    Internet tend to repeat predefined chunks as necessary, making
                    this
                    the first true generator on the
                    Internet. It uses a dictionary of over 200 Latin words.
                    <br>
                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i>
                        26 Like this!</a> -
                    <small class="text-muted">12.06.2014</small>
                </div>
            </div>
        @endif
    @endforeach
</div>
