<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Enter the post's name" type="search" name="" id="">
    </div>
    @if ($posts->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2">
                        <a class="btn btn-success" href="{{ route('admin.posts.create') }}">Create Post</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td width="10px">
                            <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post) }}">Edit</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="card-footer">
        {{$posts->links()}}
    </div>  
    
    @else
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        
                        <th class="float-right">
                            <a class="btn btn-success" href="{{ route('admin.posts.create') }}">Create Post</a>
                        </th>
                    </tr>
                </thead>
            </table>
            <strong class="mt-4">No posts match the query</strong>
        </div>
    @endif
    
</div>
