
<!DOCTYPE html>
<html lang="en">
  <head>
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
    <title>Admin</title>
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
            <div align="center" style="padding-top:100px;">
                <table>
                    <tr style= "background-color:black;">
                    <th style="padding:10px;">User Id</th>
                        <th style="padding:10px;">Patient Name</th>
                        <th style="padding:10px;">Email</th>
                        <th style="padding:10px;">Phone</th>
                        <th style="padding:10px;">Doctor Name</th>
                        
                        
                        
                      
                        <th style="padding-right:10px;">Upload</th>
                      
                        
                      
                      </th>

                    </tr>
                    @foreach($data as $appoint)

                    <tr align="center" style="background-color:skyblue;">
                      <td>{{$appoint->user_id}}</td>
                      <td>{{$appoint->name}}</td>
                      <td>{{$appoint->email}}</td>
                      <td>{{$appoint->phone}}</td>
                      <td>{{$appoint->doctor}}</td>
                      
                      
                      <td style="padding-right:70px;">
                            <a class = "btn btn-success" href="{{url('addreport', $appoint->id)}}">Upload</a>
                        </td>





                    </tr>
                    @endforeach
                 
     

                </table>

    </div>
    
    </div>



































    

<!-- 
          <div class="container" align = "center" style = "padding-top: 100px;">
          @if(session()->has('message'))
          <div class="alert alert-success">
          {{session()->get('message')}}
            <button type="button" class="close"  data-dismiss="alert">x</button>
           

          </div>
          @endif
            <form action ="{{url('upload_doctor')}}"  method= "POST" enctype="multipart/form-data">
              @csrf

            <div style = "padding:15px;">
              <label> Doctor Name </lable>
              <input type = "text" style="color:black;" name= "name" placeholder="Write The doctor Name">
</div>
<div style = "padding:15px;">
              <label> Phone</lable>
              <input type = "number" style="color:black;" name= "number" placeholder="The phone number">
</div>
<div style = "padding:15px;">
<label> Speciality </lable>
              <input type = "text" style="color:black;" name= "name" placeholder="Write the speciality"> -->
              <!-- <label> Speciality</lable>
              <select sytle="color:black; width:200px;">
                <option sytle="color:black; width:200px;" >--Select--</option>
                <option  value="Medicine">Medicine</option>
                <option  value="Skin "> Skin</option>
                <option  value="Heart">Heart</option>
                <option   value="Eye">Eye</option>
                <option  value="Gynaecology">Gynaecology</option>
              </select> -->
<!-- </div>
<div style = "padding:15px;">
              <label> Patient Name </lable>
              <input type = "text" style="color:black;" name= "room" placeholder="Write The doctor Room number">
</div>
<div style = "padding:15px;">
              <label> Email </lable>
              <input type= "file" name= "file">
</div>
<div style = "padding:15px;">
              <input type= "submit" class= "btn btn-success">
</div> -->
    <!-- container-scroller -->
    <!-- plugins:js -->
</div>
   
    <!-- End custom js for this page -->
  </body>
</html>