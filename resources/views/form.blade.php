@extends('layouts')

@section('console')
<center>
<h1 >
 CONTACT US
</h1>
</center>

@endsection()

@section('content')

</form>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th> First Name</th>
      <th> Last Name</th>
      <th> Email</th>
      <th> Phone </th>
      <th> Comments </th>
      
    </tr>
  </thead>
  <tbody>
@foreach($fetch as $ft)
    <tr>
      <td scope="row">{{$ft->id}}</td>
      <td>{{$ft->first_name}}</td>
      <td>{{$ft->last_name}}</td>
      <td>{{$ft->email}}</td>
      <td>{{$ft->phone}}</td>
      <td>{{$ft->comments}}</td>
    
    </tr>
@endforeach
  </tbody>
</table>



@endsection()