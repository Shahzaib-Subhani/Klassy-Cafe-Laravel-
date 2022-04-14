@include('admin.navbar')

<section class="section" id="about">
    <div class="container">
        <div class=" row d-flex justify-content-center mb-xl-5 mb-lg-5 mb-md-5 mb-sm-3 mb-3">
            <a href="{{url('/createfood')}}"><button class="btn btn-info ">Create New</button></a>
        </div>
        <div class="row">

            <table class="border border-separate border-gray-500" align="center" >
                <thead>
                  <tr>
                    <th class="border border-gray-500 text-xl">Title</th>
                    <th class="border border-gray-500 text-xl">Price</th>
                    <th class="border border-gray-500 text-xl">Description</th>
                    <th class="border border-gray-500 text-xl">Image</th>
                    <th class="border border-gray-500 text-xl">created-At</th>
                    <th class="border border-gray-500 text-xl">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($data as $data)
                    
                 <tr>
                  <td class="border border-slate-700 text-center text-black">{{$data->title}}</td>
                  <td class="border border-slate-700 text-center text-black">{{$data->price}}</td>
                  <td class="border border-slate-700 text-center text-black" style="max-width:350px">{{$data->description}}</td>
                  <td class="border border-slate-700 text-center text-black " style="width:15% "><img src="foodimage/{{$data->image}}"  alt=""></td>
                  <td class="border border-slate-700 text-center text-black">{{$data->created_at}}</td>
                  <td class="border border-slate-700 text-center">
                   
                    <a href="{{url('/editfood')}}/{{$data->id}}"><button class="btn btn-primary btn-sm "><i class="fa fa-edit"></i></button></a>
                    <a href="{{url('/deletefood')}}/{{$data->id}}"><button class="btn btn-danger btn-sm "><i class="fa fa-trash-o"></i></button></a>
                   
                  </td>
                </tr>
                
                @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</section>
@include('admin.footer')