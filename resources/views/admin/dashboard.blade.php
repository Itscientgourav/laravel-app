@extends('layouts.master')

@section('title')
Laravel-Admin Dashboard
@endsection 


@section('content')
<div class="card">
  <div class="card-header">
    <h5 class="card-category">All Persons List</h5>
      <h4 class="card-title" id="selector"> Employees Stats</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead class=" text-primary">
          <th>Id</th>
          <th>Name</th>
          <th>E-mail</th>
          <th>Salary</th>
        </thead>
        <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{$user->slno}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>$36</td>
          </tr>
        @endforeach
        </tbody>
      </table>
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