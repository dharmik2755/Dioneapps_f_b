@include('Admin.header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Contact Information Page  </h3>
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
            @foreach ($footer_forth as $dt)
              <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                  
                  <div class="form-group ">
                    <label for="firstname">Link</label>
                    <input id="link" class="form-control" name="link" type="text" placeholder="Enter Link" value="{{$dt->link}}" >
                  </div>
                  
                  <div class="form-group">
                    <label for="lastname">Description</label>
                    <input id="lastname" class="form-control" name="description" type="text" placeholder="Description" value="{{$dt->description}}">
                  </div>
                  
                  <div class="text-start">
                    <input class="btn btn-primary" type="submit" name="edit" value="Update">
                      <a href="{{ route('footer-forth.view') }}">
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