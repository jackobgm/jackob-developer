<div class="table-responsive">
    <table class="table" id="status-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($status as $statu)
            <tr>
                <td>{{ $statu->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['status.destroy', $statu->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('status.show', [$statu->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('status.edit', [$statu->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
