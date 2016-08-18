@extends(config('loglogin.admin_layout'))

@section(config('loglogin.admin_layout_styles_section'))
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection

@section(config('loglogin.admin_layout_content_section'))

    <div class="table-responsive">
        <table class="table table-condensed table-striped">
            <tbody>
            <tr>
                <th>Username</th>
                <th>IP</th>
                @if (config('loglogin.login_request_url'))
                    <th>Request URL</th>
                @endif
                @if (config('loglogin.locale'))
                    <th>Locale</th>
                @endif
                @if (config('loglogin.user_agent'))
                    <th>User agent</th>
                @endif
                <th>Logged at</th>
            </tr>

            @foreach($logs as $log)
                <tr>
                    <td>{{$log->user->getAttributes()[config('loglogin.belongs_class_username_attribute')]}}</td>
                    <td>{{$log->ip_address}}</td>

                    @if (config('loglogin.login_request_url'))
                        <td>{{$log->login_request_url}}</td>
                    @endif
                    @if (config('loglogin.locale'))
                        <td>{{$log->locale}}</td>
                    @endif
                    @if (config('loglogin.user_agent'))
                        <td>{{$log->user_agent}}</td>
                    @endif

                    <td>{{$log->logged_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section(config('loglogin.admin_layout_scripts_section'))
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
@endsection
