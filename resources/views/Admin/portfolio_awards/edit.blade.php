@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Portfolio Awards Slider </h3>
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
                      @foreach ($portfolio_awards as $dt)
                      <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                        @csrf
                          <fieldset>
                            <div class="form-group">
                                    <?php
                                    $i=0; 
                                    foreach (explode('|||', $dt->image) as $picture) 
                                    {  ?>
                                        <label for="lastname">Edit Image </label><br>
                                        <img src="{{asset('upload/'.$picture)}}" height="100" width="100"  alt=""><br>
                                        <input id="image" class="form-control" name="image[]" type="file" >
                                    <?php $i++; } ?>
                              </div>
                              <div class="form-group ">
                                  <label for="firstname">Title</label>
                                  <input id="firstname" class="form-control" name="title" type="text"
                                      placeholder="Title" value="{{ $dt->title }}">
                              </div>
                              <div class="form-group">
                                  <label for="lastname">Description</label>
                                  <input id="lastname" class="form-control" name="description" type="text"
                                      placeholder="Description" value="{{ $dt->description }}">
                              </div>
                              
                              <input class="btn btn-primary" type="submit" name="edit" value="Submit">
                              <a href="{{ route('portfolio-awards.view') }}">
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
