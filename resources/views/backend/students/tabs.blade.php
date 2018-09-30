<table class="table table-striped table-hover">
    <tr>
        <th>{{ trans('labels.backend.students.table.tabs.name') }}</th>
        <td>{{ $student->name }}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.students.table.tabs.gender') }}</th>
        <td>{{ $student->gender }}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.students.table.tabs.birthday') }}</th>
        <td>{{ $student->birthday }}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.students.table.tabs.guardian') }}</th>
        <td>{!! $student->guardian_id !!}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.students.table.tabs.phone') }}</th>
        <td>{!! $student->phone !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.students.table.tabs.section') }}</th>
        <td>{!! $student->section !!}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.students.table.tabs.class') }}</th>
        <td>{!! $student->class !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.students.table.tabs.email') }}</th>
        <td>{!! $student->roll !!}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.students.table.tabs.previous_school') }}</th>
        <td>{!! $student->previous_school !!}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.students.table.tabs.present_address') }}</th>
        <td>{!! $student->present_address !!}</td>
    </tr>
    <tr>
        <th>{{ trans('labels.backend.students.table.tabs.permanent_address') }}</th>
        <td>{!! $student->permanent_address !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.students.table.tabs.email') }}</th>
        <td>{!! $student->email !!}</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.access.users.tabs.content.overview.created_at') }}</th>
        <td>{{ $student->created_at }} ({{ $student->created_at->diffForHumans() }})</td>
    </tr>

    <tr>
        <th>{{ trans('labels.backend.access.users.tabs.content.overview.last_updated') }}</th>
        <td>{{ $student->updated_at }} ({{ $student->updated_at->diffForHumans() }})</td>
    </tr>

</table>