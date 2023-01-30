@extends('layouts.master')

@section('title')
Laravel-Admin Items
@endsection 


@section('content')
<div class="card">
  <div class="card-header">
    <h5 class="card-category">All Items List</h5>
      <h4 class="card-title" id="selector"> Items Stats</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead class=" text-primary">
          <th>Id</th>
          <th>Items Name</th>
          <th>Quantity</th>
          <th>Price</th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mobile</td>
            <td>2 Unit</td>
            <td>$33</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Mobile Cable</td>
            <td>4 Unit</td>
            <td>$3</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Mobile Stand</td>
            <td>5 Unit</td>
            <td>$2</td>
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