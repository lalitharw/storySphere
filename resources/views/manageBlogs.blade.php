@extends("layouts.main")

@section("title")
    Manage Blogs
@endsection

@section("main-section")
<section class="page-header section-sm">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="section-title h2 mb-3">
            <span>Manage Post</span>
          </h1>
          <ul class="list-inline breadcrumb-menu mb-3">
            <li class="list-inline-item"><a href="{{url("/")}}"><i class="ti ti-home"></i>  <span>Home</span></a></li>
            <li class="list-inline-item">• &nbsp; <a href="/qurno/blog"><span>Manage Posts</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
    <div class="container">
    
      <div class="row gy-5 gx-4 g-xl-5">
        <table class="table p-1">
          <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Action Button</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($blogs as $blog)
            <tr>
              <td ><h4>{{$blog->title}}</h4></td>
              <td class="d-flex gap-2 align-items-center"><a class="btn btn-primary btn-sm" href="{{ url('/edit/' . $blog->id) }}"><i class="ti ti-edit"></i> Edit</a>
                
                <form action="{{url('/delete/'. $blog->id)}}" method="post">
                  @csrf
                  <button class="btn btn-danger btn-sm"><i class="ti ti-x"></i> Delete</button>
                </form>
                
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
   </div>
    </div>
  </section>
@endsection

@section("scripts")

@if(Session::has("message"))
Toastify({
  text: "{{Session::get('message')}}",
  duration: 3000,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "center", // `left`, `center` or `right`
  stopOnFocus: true, // Prevents dismissing of toast on hover
  style: {
    background: "linear-gradient(to right, #f08e80, #f08e80)",
    color:"#fff",
   
  },
  
}).showToast();
    
@endif
@endsection