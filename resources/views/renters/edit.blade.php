@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  @if ($errors->any())
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Renter Information</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('renters.update',$renter->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" value="{{$renter->name}}" class="form-control"
                        placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" name="email" value="{{$renter->email}}" class="form-control"
                        placeholder="Enter Email">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="fb_id">Facebook ID</label>
                      <input type="text" name="fb_id" value="{{$renter->fb_id}}" class="form-control"
                        placeholder="Enter Facebook ID">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="e_back">Educational Background</label>
                      <input type="text" name="e_back" value="{{$renter->e_back}}" class="form-control"
                        placeholder="Enter Edu back">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="fb_id">Address</label>
                      <input type="text" name="fb_id" value="{{$renter->fb_id}}" class="form-control"
                        placeholder="Enter Facebook ID">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="phone_1">Phone 1</label>
                      <input type="text" name="phone_1" value="{{$renter->phone_1}}" class="form-control"
                        placeholder="Enter Phone 1">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="phone_2">Phone 2</label>
                      <input type="text" name="phone_2" value="{{$renter->phone_2}}" class="form-control"
                        placeholder="Enter Phone 2">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="salary">Salary</label>
                      <input type="text" name="salary" value="{{$renter->salary}}" class="form-control"
                        placeholder="Enter Salary">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="designation">Designation</label>
                      <input type="text" name="designation" value="{{$renter->designation}}" class="form-control"
                        placeholder="Enter designation">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <select name="gender" class="custom-select rounded-0">
                        <option value="1" {{$renter->gender == 1 ? 'selected' : ''}}>Male</option>
                        <option value="2" {{$renter->gender == 2 ? 'selected' : ''}}>Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="rent_payer">Rent Payer</label>
                      <select name="rent_payer" class="custom-select rounded-0">
                        <option value="1" {{$renter->rent_payer == 1 ? 'selected' : ''}}>Yes</option>
                        <option value="2" {{$renter->rent_payer == 2 ? 'selected' : ''}}>No</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="nid">NID</label>
                      <input type="text" name="nid" value="{{$renter->nid}}" class="form-control"
                        placeholder="Enter nid">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="office_id">Office</label>
                      <select name="office_id" class="custom-select rounded-0">
                        <option value="">-- Office --</option>
                        @foreach($office as $item)
                        <option value="{{ $item->id }}" {{$renter->office_id == $item->id ? 'selected' : ''}}>{{
                          $item->office_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="home_id">Home</label>
                      <select name="home_id" class="custom-select rounded-0">
                        <option value="">-- Select Home --</option>
                        @foreach($home as $item)
                        <option value="{{ $item->id }}" {{$renter->home_id == $item->id ? 'selected' : ''}}>{{
                          $item->home_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="home_id">Rooms</label>
                      <select name="home_id" class="custom-select rounded-0">
                        <option value="">-- Select Rooms--</option>
                        @foreach($rms as $hd)
                        <option value="{{ $hd->id }}" {{$renter->room_id == $hd->id ? 'selected' : ''}}>{{
                          $hd->room_number}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="birthdate">Birthdate</label>
                      <input type="date" name="birthdate" value="{{$renter->birthdate}}" class="form-control"
                        placeholder="Enter Birthdate">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="rent_from">Rent From Date</label>
                      <input type="date" name="rent_from" value="{{$renter->rent_from}}" class="form-control"
                        placeholder="Enter Rent From Date">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="address">Address</label>
                      <textarea class="form-control" name="address" rows="4"
                        placeholder="Enter ...">{{$renter->address}}</textarea>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a type="submit" href="{{ route('renters.index') }}" class="btn btn-info">Back</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection