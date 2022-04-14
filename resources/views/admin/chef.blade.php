@include('admin.navbar')

<section class="section" id="about">
    <div class="container">
        <div class=" row d-flex justify-content-center mb-xl-5 mb-lg-5 mb-md-5 mb-sm-3 mb-3">
            <a href="{{url('/createchef')}}"><button class="btn btn-info ">Add New Chef</button></a>
        </div>
        <div class="row">

            <table class="border border-separate border-gray-500" align="center" >
                <thead>
                  <tr>
                    <th class="border border-gray-500 text-xl">Name</th>
                    <th class="border border-gray-500 text-xl">Speciality</th>
                    <th class="border border-gray-500 text-xl">Image</th>
                    <th class="border border-gray-500 text-xl">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($data as $data)
                    
                 <tr>
                  <td class="border border-slate-700 text-center text-black">{{$data->name}}</td>
                  <td class="border border-slate-700 text-center text-black">{{$data->speciality}}</td>
                  <td class="border border-slate-700 text-center text-black " style="width:10% "><img src="chefimage/{{$data->image}}"  alt=""></td>
                  <td class="border border-slate-700 text-center">
                   
                    <a href="{{url('/editchef')}}/{{$data->id}}"><button class="btn btn-primary btn-sm "><i class="fa fa-edit"></i></button></a>
                    <a href="{{url('/deletechef')}}/{{$data->id}}"><button class="btn btn-danger btn-sm "><i class="fa fa-trash-o"></i></button></a>
                   
                  </td>
                </tr>
                
                @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</section>
@include('admin.footer')