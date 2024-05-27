@extends('layouts.app')

@section('content')



<div class="container-scroller">
    
<div class="container">

<div class="add-band">
    <div>
      <h3>
        ADD BANDS
      </h3>
    </div>
  </div>
    <form method="POST" action="/admin/add-band">
        @csrf
        <div class="form-group">
            <label>Band Name</label>
        <input class="input-val" type="text" name="name" placeholder="Enter Band Name">
    
        <label>Genre</label>
        <input class="input-val" type="text" name="genre" placeholder="Enter Genre">

        <label>Country</label>
        <input class="input-val" type="text" name="country" placeholder="Enter Country">


        <label>Founding Year</label>
        <input class="input-val" type="number" name="founding_year" placeholder="Enter Founding Year"><br>

        <label>Description</label>
        <input class="input-val" type="text" name="description" placeholder="Enter Description">

        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


    

</div>
@endsection
