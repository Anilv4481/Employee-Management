<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo View::make('navbar'); ?>
    @include('cdn')
    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
</head>
<body>
    <form action="" >
        @csrf
        <div class="d-flex ">

            <input class="form-control me-2" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </div>
        <br>
        <div>
            <br>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">EMP.ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Location</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Leave</th>
                        <th scope="col">Payable</th>
                        <th scope="col">Month</th>
                        <th scope="col">Net-Salary</th>
                        <th scope="col">Action</th>
                        {{-- <th scope="col"><a href="insert_salary"><button type="button" class="btn btn-success">Add</button></a></th> --}}


                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach($employee as $item)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$item->employees_id}}</td>
                        <td>{{$item->employees_name}}</td>
                        <td>{{$item->designation}}</td>
                        <td>{{$item->location}}</td>
                        <td>{{$item->gender}}</td>
                        <td>{{$item->leave}}</td>
                        <td>{{$item->day_payable}}</td>
                        <td>{{$item->month}}</td>
                        <td>{{$item->net_salary}}</td>
                        <td ><a href="saledit/{{$item->id}}"><button type="button" class="btn btn-primary" >Edit</button></a></td>
                        <td ><a href="/delete/{{$item->id}}"><button type="button"  class="btn btn-danger" >Delete</button></a></td>


        </tr>
        @endforeach --}}
    </tbody>
</table>
</div>
</form>
<script type="text/javascript">
        $('#search').on('keyup',function()
        {
           $value=$(this).val();
            $.ajax({
                type:'get',
                url:'{{URL::to('search' )}}',
                data:{$value,_token :'search',"{{ csrf_token() }}"},

            });
            // success:function(data)
            // {
            //     console.log(data);
            //     // $('#content').html(data);
            // }
        });

</script>

</body>
</html>
