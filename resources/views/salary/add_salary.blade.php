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
    <form action="/sal_store" method="post">
        @csrf


          <div class="mb-3">
            <label for="" class="form-label">Emp. ID</label>
            <input  name="employees_id"  id="employees_id" >
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Emp. Name</label>
            <input type="text" name="employees_name"  id="" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Designation</label>
            <input type="text" name="designation"  id="" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Location</label>
            <input type="text" name="location" id="" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Gender</label>
            <input type="contact" name="gender"  id="" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Leave</label>
            <input type="contact" name="leave"  id="" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Day-Payable</label>
            <input type="contact" name="day_payable"  id="" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Month</label>
            <input type="contact" name="month"  id="" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Net-Salary</label>
            <input type="contact" name="net_salary"  id="" aria-describedby="emailHelp">
          </div>


          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
