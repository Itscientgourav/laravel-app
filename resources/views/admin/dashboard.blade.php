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
          <th>Name</th>
          <th>Country</th>
          <th>City</th>
          <th>Salary</th>
        </thead>
        <tbody>
          <tr>
            <td>Dakota Rice</td>
            <td>Niger</td>
            <td>Oud-Turnhout</td>
            <td>$36,738</td>
          </tr>
          <tr>
            <td>Dakota gyame</td>
            <td>Niger</td>
            <td>Oud-Turnhout</td>
            <td>$36,738</td>
          </tr>
          <tr>
            <td>Dakota gyame</td>
            <td>Niger</td>
            <td>Oud-Turnhout</td>
            <td>$36,738</td>
          </tr>
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