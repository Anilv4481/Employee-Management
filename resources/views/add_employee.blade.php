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
    <br>
    <form action="/store" method="post" enctype="multipart/form-data">
        @csrf
          <div class="mb-3">
            <label for="" class="form-label">Image  </label>
            <input type="file" name="image"  id="" >
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="name" name="name"  id="" >
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Department</label>
            <input type="text" name="department"  id="" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Role</label>
            <input type="text" name="role"  id="" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Degree</label>
            <input type="text" name="degree" id="" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Mobile</label>
            <input type="contact" name="mobile"  id="" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Email address</label>
            <input type="email" name="email" id="" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
