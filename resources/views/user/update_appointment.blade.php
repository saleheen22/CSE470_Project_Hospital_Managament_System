<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
</head>
<body>
<h1>valo</h1>
  <div class= "container-fluid page-body-wrapper">
    {{$data->name}}
    {{$data->email}}
    {{$data->phone}}
    {{$data->doctor}}
    {{$data->date}}
    {{$data->message}}
    {{$data->status}}

</div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
      label{
        display: inline-block;
        width: 200px;

      }

    </style>
    <!-- Required meta tags -->
    <!-- @inclue('admin.css') -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <!-- <link rel="shortcut icon" href="admin/assets/images/favicon.png" /> -->

  </head>
  <body>
    <div class = "container-scroller">
  
      <!-- @include('admin.sidebar') -->
      <!-- partial -->
        <!-- @include('admin.navbar') -->
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
    


          <div class="container" align = "center" style = "padding-top: 100px;">
          
            <form action ="{{url('edituser', $data->id)}}"  method= "POST" >
              @csrf

            <div style = "padding:15px;">
              <label>Name </lable>
              <input type = "text" style="color:black;" name= "name" value= "{{$data->name}}" >
</div>
<div style = "padding:15px;">
              <label> Email</lable>
              <input type = "text" style="color:black;" name= "email" value= "{{$data->email}}" >
</div>
<div style = "padding:15px;">
<label> Phone </lable>
              <input type = "number" style="color:black;" name= "phone" value= "{{$data->phone}}">

</div>
<div style = "padding:15px;">
              <label>Doctor </lable>
              <input type = "text" style="color:black;" name= "doctor" value= "{{$data->doctor}}">
</div>
<div style = "padding:15px;">
              <label>Date</lable>
              <input type = "text" style="color:black;" name= "date" value= "{{$data->date}}">
</div>
<!-- <div style = "padding:15px;">
              <label> Doctor Image </lable>
              <input type= "file" name= "file">
</div> -->
    
<div style = "padding:15px;">
              <input type= "submit" class= "btn btn-success">
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
<!-- </div> -->
</form>
    <!-- End custom js for this page -->
  </body>
</html>