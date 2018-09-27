<table class="table table-striped table-hover">
    <tr>
        <th>{{ trans('labels.backend.guardians.table.tabs.name') }}</th>
        <td>{{ $guardian->name }}</td>

    </tr>

    <tr>
        <th>{{ trans('labels.backend.guardians.table.tabs.occupation') }}</th>
        <td>{{ $guardian->occupation }}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.guardians.table.tabs.gender') }}</th>
        <td>{!! $guardian->gender !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.guardians.table.tabs.phone') }}</th>
        <td>{!! $guardian->phone !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.guardians.table.tabs.address') }}</th>
        <td>{!! $guardian->address !!}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.guardians.table.tabs.email') }}</th>
        <td>{!! $guardian->email !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.access.users.tabs.content.overview.created_at') }}</th>
        <td>{{ $guardian->created_at }} ({{ $guardian->created_at->diffForHumans() }})</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.access.users.tabs.content.overview.last_updated') }}</th>
        <td>{{ $guardian->updated_at }} ({{ $guardian->updated_at->diffForHumans() }})</td>
    </tr>

</table>