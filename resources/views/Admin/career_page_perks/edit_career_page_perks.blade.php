@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Update About Expert Data1  </h3>
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
            @foreach ($career_page_perkss as $dt)
                
            <form class="cmxform" id="frm" method="POST" enctype="multipart/form-data">
              @csrf
              <fieldset>
                <div class="form-group ">
                  <label for="firstname">Image</label>
                  <?php
                       $i=0; 
                      foreach (explode('|||', $dt->image) as $picture) 
                      {  ?>
                        <img src="{{asset('upload/'.$picture)}}" height="100" width="100"  alt=""><br>
                        <label for="lastname">Edit Image </label>
                        <input id="image" class="form-control" name="image[]" type="file" >
          <?php $i++; } ?>
                </div>
                <div class="form-group ">
                  <label for="firstname">Title</label>
                  <input id="title" class="form-control" name="title" type="text" placeholder="Title" value="{{$dt->title}}">
                </div>
                <div class="form-group">
                  <label for="lastname">Description</label>
                  <input id="description" class="form-control" name="description" type="text" placeholder="Description" value="{{$dt->description}}">
                </div>
                <div class="form-group ">
                  <?php 
                        $loop_sub_title = explode('|||', $dt->sub_title);
                        for ($i=0; $i<count($loop_sub_title); $i++) 
                        { ?> 
                          <label for="lastname">Sub Title</label>
                          <input id="description" class="form-control" name="sub_title[]" type="text" placeholder="Enter Sub Title " value="{{$loop_sub_title[$i]}}">
                  <?php } ?>
                </div>
                <div class="form-group ">
                  <?php 
                        $loop_sub_description = explode('|||', $dt->sub_description);
                        for ($i=0; $i<count($loop_sub_description); $i++) 
                        { ?> 
                          <label for="lastname">Sub Title</label>
                          <input id="description" class="form-control" name="sub_description[]" type="text" placeholder="Enter Sub description " value="{{$loop_sub_description[$i]}}">
                  <?php } ?>
                </div>
                      
                
                <div class="text-start">
                    <input class="btn btn-primary" type="submit" name="edit" value="Update">
                      <a href="{{ route('career-perks.view') }}">
                        <button type="button" class="btn btn-inverse-dark ">cancel</button>
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

  {{-- end of the page --}}
@include('Admin/footer')