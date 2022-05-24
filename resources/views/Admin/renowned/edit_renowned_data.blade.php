@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">edit Renowned Page </h3>
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
            @foreach ($renowned as $dt)
                
           
            <form class="cmxform" id="frm" method="POST" enctype="multipart/form-data">
              @csrf
              <fieldset>
                <div class="form-group ">
                  <label for="firstname">Title</label>
                  <input id="title" class="form-control" name="title" type="text" placeholder="Enter Title" value="{{$dt->title}}">
                </div>
                <div class="form-group">
                  <label for="lastname">Description</label>
                  <input id="description" class="form-control" name="description" type="text" placeholder="Enter Description" value="{{$dt->description}}">
                </div>
                
                <div class="form-group ">
                    <?php 
                        $loop_sub_title = explode(' | ', $dt->sub_title);
                        for ($i=0; $i<count($loop_sub_title); $i++) { ?> 
                            {{-- this is for count loop data  {{ count([$i]) }} --}}
                            <label for="lastname">Sub Title</label>
                            <input id="sub_title" class="form-control" name="sub_title[]" type="text" placeholder=" Enter Sub Title" value="{{$loop_sub_title[$i]}}" ><br>
                        
                            <?php }?>
                </div>
                
                <div class="form-group">
                    <?php
                        $loop_sub_description = explode(' | ',$dt->sub_description);
                        for($i=0;$i<count($loop_sub_description); $i++) { ?>

                            <label for="lastname">Sub Description</label>
                            <input id="sub_description" class="form-control" name="sub_description[]" type="text" placeholder="Enter Sub Description" value="{{$loop_sub_description[$i]}}"><br>
                        <?php } ?>
                </div>
                
                
                
                <div class="text-start">
                  <input class="btn btn-primary" type="submit" name="edit" value="Update">
                    <a href="{{ route('renowned.view') }}">
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
<script>
  jQuery('#frm').validate({
            rules: {
                title: 
                {
                    required: true,
                    maxlength: 100
                },
                description: 
                {
                    required: true,
                    maxlength: 1000
                },
                sub_title: "required",
            },
            messages: {
                title: 
                {
                    required: "Please enter Title",
                    maxlength: "Title must be 100 char long"
                },
                description: 
                {
                  required: "please Enter description",
                  maxlength: "profession must be 1000 char long"
                },
                sub_title: "please Enter sub_title",
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
</script>