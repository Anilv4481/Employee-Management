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
    <div>

    < <form method="post" action="/update/{{$data->id}}" enctype="multipart/form-data" >
        @csrf
        @method('put')
          <div class="mb-3">
            <label for="" class="form-label">Image  </label>
            <input type="file" name="image"  value="{{$data->image}}">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="name" name="name"   value="{{$data->name}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Department</label>
            <input type="text" name="department"  value="{{$data->department}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Role</label>
            <input type="text" name="role"   value="{{$data->role}}">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Degree</label>
            <input type="text" name="degree"  value="{{$data->degree}}">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Mobile</label>
            <input type="contact" name="mobile"  value="{{$data->mobile}}">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Email address</label>
            <input type="email" name="email"  value="{{$data->email}}">
            <div id="" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
