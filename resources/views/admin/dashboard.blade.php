@extends('layouts.master')

@section('title')
Laravel-Admin Dashboard
@endsection 


@section('content')
<style>
  table td,
  table th {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
  }
  
  thead th {
    color: #fff;
  }
  
  .card {
    border-radius: .5rem;
  }
  
  .table-scroll {
    border-radius: .5rem !important;
  }
  
  .table-scroll table thead th {
    font-size: 1.25rem !important;
  }
  thead {
    top: 0;
    position: sticky;
  }
  </style>
<div>
    <div class="card">
      <div class="card-body p-0">
        <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
          <table class="table table-striped mb-0">
            <thead style="background-color: #002d72;">
              <tr>
                <th scope="col">Sl.no</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Price</th>
                <!-- <th scope="col">Spots</th> -->
              </tr>
            </thead>
            <tbody>
              @if(count($users)>0)
              @foreach ($users as $user)
                <tr>
                  <td>{{$user->slno}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>$36</td>
                </tr>
              @endforeach
              @else
              <tr>
                <td colspan="9" class="text-center" style="font-weight:bolder;">No Found !</td>
              </tr>
              @endif
              </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

@endsection 

@section('scripts')
<script>
    $('#selector').click(function (e) { 
      e.preventDefault();
      console.log("Gourav");
    });
</script>
@endsection 