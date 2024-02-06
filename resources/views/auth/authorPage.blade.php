@extends("layouts.main")

@section("title")
    Author Details
@endsection

@section("main-section")
<div class="container mt-4" style="height:70vh">
    <div class="row d-flex justify-content-center">
        <div class=" col-sm-10">
            <h2>Author Details</h2>
          
<form action="{{route("authorStore")}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="file" name="avatar" class="form-control" placeholder="Select Profile Image" id="file">
    </div>
    <br>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <textarea  rows="5" name="desc" class="form-control" placeholder="Enter your Description" id="desc"></textarea>
    </div>

    {{-- <input type="hidden" name="user_id" value="{{$user_id}}" > --}}

   
    <br>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
    
    <p>New Here? <a class="text-primary" href="{{url("signup")}}">Create an account</a></p>
  </form>
</div>
</div>
</div>
@endsection
