<table class="table table-striped table-hover">
    <tr>
        <th>{{ trans('labels.backend.stuffs.table.tabs.name') }}</th>
        <td>{{ $stuff->name }}</td>

    </tr>

    <tr>
        <th>{{ trans('labels.backend.stuffs.table.tabs.position') }}</th>
        <td>{{ $stuff->position }}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.stuffs.table.tabs.qualification') }}</th>
        <td>{{ $stuff->qualification }}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.stuffs.table.tabs.birthday') }}</th>
        <td>{!! $stuff->birthday !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.stuffs.table.tabs.gender') }}</th>
        <td>{!! $stuff->gender !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.stuffs.table.tabs.phone') }}</th>
        <td>{!! $stuff->phone !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.stuffs.table.tabs.job_started') }}</th>
        <td>{!! $stuff->job_started !!}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.stuffs.table.tabs.present_address') }}</th>
        <td>{!! $stuff->present_address !!}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.stuffs.table.tabs.permanent_address') }}</th>
        <td>{!! $stuff->permanent_address !!}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.stuffs.table.tabs.email') }}</th>
        <td>{!! $stuff->email !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.access.users.tabs.content.overview.created_at') }}</th>
        <td>{{ $stuff->created_at }} ({{ $stuff->created_at->diffForHumans() }})</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.access.users.tabs.content.overview.last_updated') }}</th>
        <td>{{ $stuff->updated_at }} ({{ $stuff->updated_at->diffForHumans() }})</td>
    </tr>

</table>