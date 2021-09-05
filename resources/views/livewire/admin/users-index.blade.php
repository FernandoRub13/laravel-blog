<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" type="text" placeholder="Enter the email or name's user" class="form-control">
        </div>
        @if ($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('admin.users.edit', $user)}}">Edit</a>
                            <td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$users->links()}}
        </div>
        @else
        <div class="card-body">
            <strong>No users match the query</strong>
        </div>
            
        @endif
    </div>
</div>
