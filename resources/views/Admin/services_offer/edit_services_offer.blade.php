@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Home Page Slider </h3>
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
            <h4 class="card-title">Add data</h4>
            @foreach ($edit_services_offer as $dt)
            <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
              @csrf
              <fieldset>
                <div class="form-group ">
                    <label for="firstname">image</label>
                    <img src="{{asset('upload/'.$dt->image)}}" height="200" width="200" alt="">
                </div>
                <div class="form-group ">
                  <label for="firstname">Title</label>
                  <input id="title" class="form-control" name="title" type="text" placeholder="title" value="{{$dt->title}}" >
                </div>
                <div class="form-group">
                  <label for="lastname">Description</label>
                  <input id="description" class="form-control" name="description" type="text" placeholder="Description" value="{{$dt->description}}" >
                </div>
                <div class="form-group ">
                    <?php 
                        $loop_sub_title = explode('|||', $dt->sub_title);
                        for ($i=0; $i<count($loop_sub_title); $i++) 
                          { ?>
                            <label for="firstname">Sub Title |||</label>
                            <input id="sub_title" class="form-control" name="sub_title[]" type="text" placeholder="Enter Sub Title " value="{{$loop_sub_title[$i]}}">
                    <?php } ?>
                  </div>
                <div class="form-group">
                  <label for="lastname">Sub Description</label>
                  <input id="sub_description" class="form-control" name="sub_description" type="text" placeholder="Enter Sub Description" value="{{$dt->sub_description}}">
                </div>
                <div class="form-group">
                  <label>File upload</label>
                  <div class="input-group col-xs-12">
                    <input type="file" id="image"   name="image" class="form-control file-upload-info"  placeholder="Upload Image" style="width: 100%;">
                  </div>
                </div>
                <div class="text-start">
                  <input class="btn btn-primary" type="submit" name="edit" value="Update">
                    <a href="{{ route('services-offer.view') }}">
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

@include('Admin/footer')