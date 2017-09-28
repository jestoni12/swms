@can('edit_'.$entity)
    <a href="{{ route($entity.'.edit', [str_singular($entity) => $id])  }}" class="btn btn-xs btn-info">
        <i class="fa fa-pencil"></i> Edit</a>
@endcan

@can('delete_'.$entity)
    <form action="{{route($entity.'.destroy', [str_singular($entity) => $id])}}" style="display: inline" onsubmit="return confirm('Do you really want to delete it?')" method="POST">
    	{{csrf_field()}}
    	{{ method_field('DELETE') }}
        <button type="submit" class="btn-delete btn btn-xs btn-danger">
            <i class="glyphicon glyphicon-trash"></i>
        </button>
    </form>
@endcan