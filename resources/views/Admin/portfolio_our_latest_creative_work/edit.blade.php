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
                      <h4 class="card-title">Edit data</h4>
                      @foreach ($portfolio_latest_works as $dt)
                      <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                        @csrf
                          <fieldset>
                              <div class="form-group">
                                  <label for="firstname">Color Image</label>
                                  <img src="{{ asset('upload/'.$dt->color_image) }}" height="250" width="250"alt="">
                              </div>
                              <div class="form-group">
                                <label for="firstname">Colour Image Upload</label>
                                <div class="input-group col-xs-12">
                                  <input type="file" id="color_image"  class="form-control file-upload-info" style="width: 100%" name="color_image"  ><br>
                                </div>
                              </div>
                              <div class="form-group">
                                  <label for="firstname">Black Image</label>
                                  <img src="{{ asset('upload/'.$dt->black_image) }}" height="250" width="250"alt="">
                              </div>
                              <div class="form-group">
                                <label>Black and White Image Upload</label>
                                <div class="input-group col-xs-12">
                                  <input type="file" id="black_image"  class="form-control file-upload-info" style="width: 100%" name="black_image" ><br>
                                </div>
                              </div>
                              <div class="form-group ">
                                  <label for="firstname">Title</label>
                                  <input id="firstname" class="form-control" name="title" type="text"
                                      placeholder="Title" value="{{ $dt->title }}">
                              </div>
                              <input class="btn btn-primary" type="submit" name="edit" value="Update">
                              <a href="{{ route('Latest-Work.view') }}">
                                <button type="button" class="btn btn-inverse-dark ">cancel</button>
                              </a>
                          </fieldset>
                      </form>
                      @endforeach
                  </div>
              </div>
          </div>
        </div>
    </div>

    {{-- end of the page --}}

    @include('Admin/footer')
