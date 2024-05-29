@extends('dashboard')
@section('dashboard_content')
<div class="content-wrapper">
  <div class="container">
  
     <div class="card p-5">
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
        
        <div class="py-3">
            <h1 class="text-xl">Update Agents</h1>
        </div>
        <form method="POST" action="/dashboard/edit-agent/submit"  enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$find_agents->id}}" name="id">
            <div class="my-4">
              <label class="form-label"><b>Agents Name </b></label>
              <input type="text" class="form-control" value="{{$find_agents->name}}" name="name" required autofocus
                placeholder="Enter Category Name">
            </div>
            <div class="my-4">
              <label class="form-label"><b>Agents Image </b></label>
              <input type="file" class="form-control"  name="img" 
                placeholder="Enter Category Name">
                <input type="hidden" value="{{$find_agents->img}}" name="old_img">
            </div>

            <div class="my-4">
                <label class="form-label"><b>Agents Phone </b></label>
                <input type="text" class="form-control" value="{{$find_agents->phone}}" name="phone" required autofocus
                  placeholder="Enter Category Name">
            </div>

            <div class="my-4">
                <label class="form-label"><b>Facebook Profile Link </b></label>
                <input type="text" class="form-control" value="{{$find_agents->facebook}}" name="facebook" required autofocus
                  placeholder="Enter Category Name">
            </div>
            <div class="my-4">
                <label class="form-label"><b>Twitter Profile Link </b></label>
                <input type="text" class="form-control" value="{{$find_agents->twitter}}"  name="twitter" required autofocus
                  placeholder="Enter Category Name">
            </div>
            <div class="my-4">
                <label class="form-label"><b>Pinterest Profile Link </b></label>
                <input type="text" class="form-control" value="{{$find_agents->pinter}}" name="pinter" required autofocus
                  placeholder="Enter Category Name">
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