
  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
      <base href="/public">

      <form class="main-form" action = "{{url('appointment')}}" mehtod= "POST">
      @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name= "name" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name= "email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name= "date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="docotor" id="departement" class="custom-select">
              <option>---select doctor---</option>
            @foreach($doctor as $doctors)
              <option value="{{$doctors->name}}">{{$doctors->name}} 
              ---Speciality--{{$doctors->speciality}}
              </option>
              @endforeach
              
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text"  name = "phone" class="form-control" placeholder="Number..">
          </div>
        
        </div>

        <button type="submit" style= "background-color: #4CAF50; /* Green */" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
    
  </div> <!-- .page-section -->
