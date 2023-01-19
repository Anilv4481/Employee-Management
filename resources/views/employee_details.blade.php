<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo View::make('navbar'); ?>
    @include('cdn')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
</head>
<body>
    <form action="">
        @csrf

        <div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Role</th>
                        <th scope="col">Degree</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                        <th scope="col"><a href="index"><button type="button" class="btn btn-success">Add</button></a></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($request as $item)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td >
                            <img src="{{url('/') }}/category/images/{{$item->image}}" height="100" >
                        </td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->department}}</td>
                        <td>{{$item->role}}</td>
                        <td>{{$item->degree}}</td>
                        <td>{{$item->mobile}}</td>
                        <td>{{$item->email}}</td>
            <td ><a href="/edit/{{$item->id}}"><button type="button" class="btn btn-primary" >Edit</button></a></td>

            <td ><a href="/delete/{{$item->id}}"><button type="button"  class="btn btn-danger" >Delete</button></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</form>

</body>
</html>
