@include('Admin.header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Services Page  </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page">Validation</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update data</h4>
            @foreach ($footer_secound as $dt)
              <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                  
                  <div class="form-group ">
                    <label for="firstname">Service Title</label>
                    <input id="title" class="form-control" name="title" type="text" placeholder="Enter Title" value="{{$dt->title}}" >
                  </div>
                  
                  <div class="form-group ">
                    <label for="lastname">Services</label>
                    <?php 
                          $loop_services = explode('|||', $dt->services);
                          for ($i=0; $i<count($loop_services); $i++) 
                          { ?> 
                            <input id="services" class="form-control" name="services[]" type="text" placeholder="Enter services" value="{{$loop_services[$i]}}">
                    <?php } ?>
                  </div>
                  
                  <div class="text-start">
                    <input class="btn btn-primary" type="submit" name="edit" value="Update">
                      <a href="{{ route('footer-secound.view') }}">
                          <button type="button" class="btn btn-inverse-dark btn-fw">Cancel </button>
                      </a>
                  </div>
                </fieldset>
              </form>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

@include('Admin.footer')