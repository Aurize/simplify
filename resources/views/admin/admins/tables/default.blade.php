<table id="{{ $id }}" class="table table-striped table-bordered table-hover" width="100%">
    <thead>
        <tr>
            <th class=""></th>
            @include('admin.admins.tables.header.default')
            <th class="col-md-2"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($admins as $index => $admin)
            <tr>
                <td>
                    <input type="checkbox" data-id="{{ $admin->id }}">
                </td>

                @include('admin.admins.tables.row.default', ['admin' => $admin])

                <td>
                    @include('admin.admins.tables.buttons.' . $buttons)
                </td>
            </tr>
        @endforeach
    </tbody>
</table>