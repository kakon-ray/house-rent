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
        
        <form method="POST" action="/dashboard/edit-rent-house/submit" enctype="multipart/form-data">
            @csrf
            <input type="text" value="{{$houserent->id}}" name="id" class="d-none">
            <div class="my-4">
              <label class="form-label"><b>Title</b></label>
              <input id="title" type="text" class="form-control" name="title" required autofocus
                value="{{$houserent->title}}">
            </div>
            <div class="my-4">
              <label class="form-label"><b>Catagory</b></label>
              <select class="form-control" name="catagory" aria-label="Default select example">
                <option selected>Open this select menu</option>
                @foreach ($category as $item)
                <option value="{{$item->category_slug}}" {{$houserent->catagory == $item->category_slug ? 'selected' : ''}}>{{$item->category_name}}</option>
               @endforeach
               
              </select>
            </div>
         
        
            <div class="my-4">
              <label class="form-label"><b>Rent Amount</b></label>
              <input type="text" class="form-control" name="amount" required autofocus
              value="{{$houserent->amount}}">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>Contact Number</b></label>
              <input type="text" class="form-control" name="number" required autofocus
              value="{{$houserent->number}}">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>Rent Month</b></label>
              <input type="date" class="form-control" name="rent_month" required autofocus
              value="{{$houserent->rent_month}}">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>House Location</b></label>
              <input type="text" class="form-control" name="house_location" autofocus
              value="{{$houserent->house_location}}">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>House Size</b></label>
              <input type="text" class="form-control" name="size" autofocus
              value="{{$houserent->size}}">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>Room</b></label>
              <input type="number" class="form-control" name="room" required autofocus
              value="{{$houserent->room}}">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>Bath Room</b></label>
              <input type="number" class="form-control" name="bath_room" required autofocus
              value="{{$houserent->bath_room}}">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>Kitchen Room</b></label>
              <input type="number" class="form-control" name="kitchen_room" required autofocus
              value="{{$houserent->kitchen_room}}">
            </div>
        
            <div class="my-4">
              <label class="form-label"><b>House Image</b></label>
              <input id="save_img" name="img" type="file" class="form-control">
              <input value="{{$houserent->img}}" name="old_img" type="text" class="d-none">
            </div>
        
            <div class="my-4">
        
              <label class="form-label"><b>Package Description</b></label>
              <textarea class="form-control" rows="7" cols="7" name="desc">{{$houserent->desc}}</textarea>
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