@include('Admin/header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Data table </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data table</li>
                </ol>
                {{-- <ol class="breadcrumb">
                    <a href="{{ route('about.create') }}">
                        <button type="button" class="btn btn-outline-info btn-fw">Add Mobile Data</button>
                    </a>
                </ol> --}}
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data table</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contact_data as $dt)
                                        <tr>
                                            <td>{{ $dt->id }}</td>
                                            <td>{{ $dt->title }}</td>
                                            <td>{{ $dt->description }}</td>
                                            <td>
                                                <img height="200px" width="200px" src="{{ asset('upload/' . $dt->image) }}" alt="">
                                            </td>
                                            <td>
                                                {{-- edit link --}}
                                                <a href="{{ url('/edit-our-contact-of-work-data/' . $dt->id) }}">
                                                    <button class="btn btn-outline-primary">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    @include('Admin/footer')
