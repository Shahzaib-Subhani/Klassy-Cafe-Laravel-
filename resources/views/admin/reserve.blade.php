@include('admin.navbar')

<section class="section" id="about">
    <div class="container">
      
        <div class="row">

            <table class="border border-separate border-gray-500" align="center" >
                <thead>
                  <tr>
                    <th class="border border-gray-500 text-xl">Name</th>
                    <th class="border border-gray-500 text-xl">E-mail</th>
                    <th class="border border-gray-500 text-xl">Phone</th>
                    <th class="border border-gray-500 text-xl">No. of Guests</th>
                    <th class="border border-gray-500 text-xl">Date</th>
                    <th class="border border-gray-500 text-xl">Time</th>
                    <th class="border border-gray-500 text-xl">Message</th>
                    <th class="border border-gray-500 text-xl">Delete</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($data as $data)
                    
                 <tr>
                  <td class="border border-slate-700 text-center text-black">{{$data->name}}</td>
                  <td class="border border-slate-700 text-center text-black">{{$data->email}}</td>
                  <td class="border border-slate-700 text-center text-black">{{$data->phone}}</td>
                  <td class="border border-slate-700 text-center text-black">{{$data->guests}}</td>
                  <td class="border border-slate-700 text-center text-black">{{$data->date}}</td>
                  <td class="border border-slate-700 text-center text-black">{{$data->time}}</td>
                  <td class="border border-slate-700 text-center text-black" style="max-width:350px">{{$data->message}}</td>
                  
                  
                  <td class="border border-slate-700 text-center">
                    <a href="{{url('/reservation_delete')}}/{{$data->id}}"><button class="btn btn-danger btn-sm "><i class="fa fa-trash-o"></i></button></a>
                   
                  </td>
                </tr>
                
                @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</section>

@include('admin.footer')
