<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo View::make('navbar'); ?>
    @include('cdn')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salary</title>
</head>
<body>
    <br>
    <form action="/salupdate/{{$data->id}}" method="post">
        @csrf
        @method('put')

          <div class="mb-3">
            <label for="" class="form-label">Emp. ID</label>
            <input  name="employees_id"  id="employees_id"  value="{{$data->employees_id}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Emp. Name</label>
            <input type="text" name="employees_name"  value="{{$data->employees_name}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Designation</label>
            <input type="text" name="designation"  value="{{$data->designation}}">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Location</label>
            <input type="text" name="location" value="{{$data->location}}">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Gender</label>
            <input type="contact" name="gender" value="{{$data->gender}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Leave</label>
            <input type="contact" name="leave"  value="{{$data->leave}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Day-Payable</label>
            <input type="contact" name="day_payable" value="{{$data->day_payable}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Month</label>
            <input type="contact" name="month"  value="{{$data->month}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Net-Salary</label>
            <input type="contact" name="net_salary"  value="{{$data->net_salary}}">
          </div>


          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
