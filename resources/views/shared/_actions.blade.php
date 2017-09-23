@can('edit_users')
    <a href="{{ route($entity.'.edit', [str_singular($entity) => $id])  }}" class="btn btn-xs btn-info">
        <i class="fa fa-pencil"></i> Edit</a>
@endcan

@can('delete_users')
    <form action="{{route($entity.'.destroy', ['user' => $id])}}" style="display: inline" onsubmit="return confirm('Do you really want to delete it?')">
        <button type="submit" class="btn-delete btn btn-xs btn-danger">
            <i class="glyphicon glyphicon-trash"></i>
        </button>
    </form>
@endcan