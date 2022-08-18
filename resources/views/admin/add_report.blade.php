
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
    <title> Admin</title>
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
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />

  </head>
  <body>
    <div class = "container-scroller">
  
      @include('admin.sidebar')
      <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
    


          <div class="container" align = "center" style = "padding-top: 100px;">
          @if(session()->has('message'))
          <div class="alert alert-success">
          {{session()->get('message')}}
            <button type="button" class="close"  data-dismiss="alert">x</button>
           

          </div>
          @endif
            <form action ="{{url('rupload')}}"  method= "POST" enctype="multipart/form-data">
              @csrf

            <div style = "padding:5px;">
              <label> User Id : {{$data->user_id}}</lable>
              <input type = "text" style="color:black;" name= "id" value="{{$data->user_id}}" placeholder="Write the id">
      
    <div>
    <label> Doctor's Message</lable>

    <input type = "text" style="color:black;" name= "message"  placeholder="Doctor's Message">

             
    </div>
    <!-- <label> Doctor's Email Id</lable> -->

<input type = "text" style="color:black;" name= "email"  placeholder="Doctor's Email Address">

         
</div>

              
</div>
<div style = "padding:5px;">
              <label>Upload Prescription</lable>
              <input type= "file" name= "file1">
</div>
<div style = "padding:5px;">
              <label>Upload Test Report</lable>
              <input type= "file" name= "file2">
</div>
<div> 



<div style = "padding:5px;">
              <input type= "submit" class= "btn btn-success">
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
</div>
   
    <!-- End custom js for this page -->
  </body>
</html>