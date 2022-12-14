@extends('layouts.app')
@section('content')
  <div class="content-wrapper">
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
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                  <h2> Show Expense</h2>
              </div>
              <div class="pull-right">
                  <a class="btn btn-primary" href="{{ route('expenses.index') }}"> Back</a>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Name:</strong>
                  {{ $expense->expense_type }}
              </div>
              <div class="form-group">
                  <strong>Expense Name:</strong>
                  {{ $expense->expense_name }}
              </div>
              <div class="form-group">
                  <strong>Amount:</strong>
                  {{ $expense->amount }}
              </div>
              <div class="form-group">
                  <strong>Date:</strong>
                  {{ $expense->ex_date }}
              </div>
              <div class="form-group">
                  <strong>Status:</strong>
                  {{ $expense->status }}
              </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection
  