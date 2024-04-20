@extends('dashboard')
@section('dashboard_content')
<div class="content-wrapper">
  <div class="container">
  
     <div class="card p-2">
        @if (\Session::has('success'))
        <div class="alert alert-success w-50 mx-auto text-center mb-0 mt-4">{!!
          \Session::get('success')
          !!}</div>
        @endif
        @if(\Session::has('error'))
        <div class="alert alert-danger w-50 mx-auto text-center mb-0 mt-4">{!! \Session::get('error')
          !!}
        </div>
        @endif
        
        <form method="POST" action="/dashboard/add-rent-house/submit" enctype="multipart/form-data">
            @csrf
            <div class="my-4">
              <label class="form-label"><b>Title</b></label>
              <input id="title" type="text" class="form-control" name="title" required autofocus
                placeholder="Enter House Title">
            </div>
            <div class="my-4">
              <label class="form-label"><b>Catagory</b></label>
              <select class="form-control" name="catagory" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="all">All</option>
                <option value="sell">For Sell</option>
                <option value="rent">For Rent</option>
              </select>
            </div>
         
        
            <div class="my-4">
              <label class="form-label"><b>Rent Amount</b></label>
              <input type="text" class="form-control" name="amount" required autofocus
                placeholder="House Amount">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>Contact Number</b></label>
              <input type="text" class="form-control" name="number" required autofocus
                placeholder="House Amount">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>Rent Month</b></label>
              <input type="date" class="form-control" name="rent_month" required autofocus
                placeholder="House Time">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>House Location</b></label>
              <input type="text" class="form-control" name="house_location" autofocus
                placeholder="House Time">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>House Size</b></label>
              <input type="text" class="form-control" name="size" autofocus
                placeholder="House Time">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>Room</b></label>
              <input type="number" class="form-control" name="room" required autofocus
                placeholder="House Time">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>Bath Room</b></label>
              <input type="number" class="form-control" name="bath_room" required autofocus
                placeholder="House Time">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>Kitchen Room</b></label>
              <input type="number" class="form-control" name="kitchen_room" required autofocus
                placeholder="House Time">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>House Image</b></label>
              <input id="save_img" name="img" type="file" class="form-control">
            </div>
        
            <div class="my-4">
        
              <label class="form-label"><b>Package Description</b></label>
              <textarea class="form-control" rows="7" cols="7" name="desc" placeholder="Description..."></textarea>
            </div>
        
        
        
            <button type="submit" class="btn btn-primary p-3">
              Submit
            </button>
        
        </div>
        </form>
     </div>
  </div>
</div>
@endsection