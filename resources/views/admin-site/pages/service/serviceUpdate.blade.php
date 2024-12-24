@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Service</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Update Service</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Your Services</h5>

          <!-- Vertical service Form -->
          <form class="row g-3" action="{{route('serviceListEdit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$serviceDataUpdate->id}}">
            <div class="col-12">
              <label for="ServiceImage" class="form-label">Service Image</label>
              <input type="file"  name="ServiceImage" class=" form-control" id="ServiceImage">
            </div>
            <div class="col-12">
              <label for="ServiceTitle" class="form-label">Service Title</label>
              <input type="text" name="ServiceTitle" value="{{$serviceDataUpdate->ServiceTitle}}" class=" form-control" id="ServiceTitle">
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control "  name="ServiceDetails" placeholder="Leave a comment here" id="ServiceDetails" style="height: 100px;">{{$serviceDataUpdate->ServiceDetails}}</textarea>
                <label for="ServiceDetails">Service Details</label>
              </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>
  </main>
@endsection