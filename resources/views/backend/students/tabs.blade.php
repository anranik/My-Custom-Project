<table class="table table-striped table-hover">
    <tr>
        <th>{{ trans('labels.backend.teachers.table.tabs.name') }}</th>
        <td>{{ $teacher->name }}</td>

    </tr>

    <tr>
        <th>{{ trans('labels.backend.teachers.table.tabs.qualification') }}</th>
        <td>{{ $teacher->qualification }}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.teachers.table.tabs.designation') }}</th>
        <td>{{ $teacher->designation }}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.teachers.table.tabs.gender') }}</th>
        <td>{!! $teacher->gender !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.teachers.table.tabs.phone') }}</th>
        <td>{!! $teacher->phone !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.teachers.table.tabs.previous_school') }}</th>
        <td>{!! $teacher->previous_school !!}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.teachers.table.tabs.present_address') }}</th>
        <td>{!! $teacher->present_address !!}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.teachers.table.tabs.permanent_address') }}</th>
        <td>{!! $teacher->permanent_address !!}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.teachers.table.tabs.email') }}</th>
        <td>{!! $teacher->email !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.access.users.tabs.content.overview.created_at') }}</th>
        <td>{{ $teacher->created_at }} ({{ $teacher->created_at->diffForHumans() }})</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.access.users.tabs.content.overview.last_updated') }}</th>
        <td>{{ $teacher->updated_at }} ({{ $teacher->updated_at->diffForHumans() }})</td>
    </tr>

</table>