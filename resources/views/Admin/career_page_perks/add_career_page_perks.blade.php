@include('Admin/header')

{{-- home slider page form validation page --}}
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Add Career Page Perks Data  </h3>
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
            <form class="cmxform" id="frm" method="POST" enctype="multipart/form-data">
              @csrf
              <fieldset>
                <div class="form-group ">
                  <label for="firstname">Title</label>
                  <input id="title" class="form-control" name="title" type="text" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="lastname">Description</label>
                  <input id="description" class="form-control" name="description" type="text" placeholder="Description">
                </div>
                <div class="form-group ">
                  <label for="lastname">Image </label>
                  <input id="image" class="form-control" name="image[]" type="file" multiple >
                </div>

                {{-- <div class="form-group ">
                    <label for="lastname">Sub Title </label>
                    <input id="sub_title" class="form-control" name="sub_title[]" type="text" placeholder="Enter Sub Title">
                </div> --}}
                <div class="form-group">
                  <label for="lastname">Sub Title</label>
                  <div id="inputFormRow">
                      <div class="d-flex mb-2">
                          <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                              <input type="text" name="sub_title[]"
                                  class="form-control form-control-sm" placeholder="Enter Sub Title">
                          </div>
                          <button id="addRow" type="button"
                              class="btn btn-info btn-sm icon-btn ms-2 mb-2 ">
                              Add
                          </button>
                      </div>
                  </div>
                  <div id="newRow"></div>
              </div>
                {{-- <div class="form-group ">
                    <label for="lastname">Sub Description </label>
                    <input id="sub_description" class="form-control" name="sub_description[]" type="text" placeholder="Enter Sub description">
                </div> --}}
                <div class="form-group">
                  <label for="lastname">Sub Description</label>
                  <div id="inputFormRow2">
                      <div class="d-flex mb-2">
                          <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                              <input id="sub_description" type="text" name="sub_description[]"
                                  class="form-control form-control-sm" placeholder="Enter Sub Desciption">
                          </div>
                          <button id="addRow2" type="button"
                              class="btn btn-info btn-sm icon-btn ms-2 mb-2 ">
                              Add
                          </button>
                      </div>
                  </div>
                  <div id="newRow2"></div>
              </div>
                
                <div class="text-start">
                    <input class="btn btn-primary" type="submit" name="add" value="Submit">
                      <a href="{{ route('career-perks.view') }}">
                        <button type="button" class="btn btn-inverse-dark ">cancel</button>
                      </a>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- end of the page --}}
@include('Admin.footer')
<script>

   //  start sub title
   $('#addRow').click(function() {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="d-flex mb-2">';
            html += '<div class="input-group mb-2 mr-sm-2 mb-sm-0">';
            html +=
                '<input type="text" name="sub_title[]" class="form-control form-control-sm" placeholder="Enter Sub Title">';
            html += '</div>';
            html +=
                '<button id="removeRow" type="button" class="btn btn-danger btn-sm icon-btn ms-2"><i class="icon-trash"></i></button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });
        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
        });

        // start sub description
        $('#addRow2').click(function() {
            var html = '';
            html += '<div id="inputFormRow2">';
            html += '<div class="d-flex mb-2">';
            html += '<div class="input-group mb-2 mr-sm-2 mb-sm-0">';
            html +=
                '<input type="text" name="sub_description[]" class="form-control form-control-sm" placeholder="Enter Sub Description">';
            html += '</div>';
            html +=
                '<button id="removeRow2" type="button" class="btn btn-danger btn-sm icon-btn ms-2"><i class="icon-trash"></i></button>';
            html += '</div>';
            html += '</div>';

            $('#newRow2').append(html);
        });
        $(document).on('click', '#removeRow2', function() {
            $(this).closest('#inputFormRow2').remove();
        });

  jQuery('#frm').validate({
            rules: {
                title: {
                    required: true,
                    maxlength: 50
                },
                description: {
                  required: true,
                  maxlength:1000
                },
                'sub_title[]': {
                    required: true,
                    maxlength: 2000
                },
                
            },
            messages: {
                title: {
                    required: "Please enter Title",
                    maxlength: "Title must be 50 char long"
                },
                description: {
                  required: "please Enter Description",
                  maxlength: "Description must be 1000 char long"
                },
                'sub_title[]': {
                    required: "please enter Sub Title ",
                    maxlength: "Sub Title must be 2000 char long"
                },
                
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
</script>