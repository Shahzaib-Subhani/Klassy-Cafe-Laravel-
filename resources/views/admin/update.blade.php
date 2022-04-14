@include('admin.navbar')

<section class="section" id="about">
    <div class="container">

        <div class="row d-flex justify-content-center">
           
            <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md ">
                <form enctype="multipart/form-data" action="{{url('/update')}}/{{$data->id}}" method="post">
                  @csrf
                  <div class="form-group mb-6 ">
                    <input type="text" name="title" class="form-control block
                      w-full
                      px-3
                      py-1.5
                      text-base
                      font-normal
                      text-gray-700
                      bg-white bg-clip-padding
                      border border-solid border-gray-300
                      rounded
                      transition
                      ease-in-out
                      m-0
                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                      placeholder="Title" value="{{$data->title}}" required>
                      
                      <input type="text" name="price" class="my-3 form-control block
                      w-full
                      px-3
                      py-1.5
                      text-base
                      font-normal
                      text-gray-700
                      bg-white bg-clip-padding
                      border border-solid border-gray-300
                      rounded
                      transition
                      ease-in-out
                      m-0
                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                      placeholder="Price" value="{{$data->price}}" required>


                      <textarea name="descrip" id="" cols="30" rows="5" class="my-3 form-control block
                      w-full
                      px-3
                      py-1.5
                      text-base
                      font-normal
                      text-gray-700
                      bg-white bg-clip-padding
                      border border-solid border-gray-300
                      rounded
                      transition
                      ease-in-out
                      m-0
                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                      placeholder="Description" required >{{$data->description}}</textarea>

                      <div>
                          <label for="">Old Image</label>
                          <img src="/foodimage/{{$data->image}}" height="100" width="100" alt="">
                      </div>


                      <input name="image"  class=" my-2 form-control
                      block
                      w-full
                      px-3
                      py-1.5
                      text-base
                      font-normal
                      text-gray-700
                      bg-white bg-clip-padding
                      border border-solid border-gray-300
                      rounded
                      transition
                      ease-in-out
                      m-0
                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFile">
                  </div>

                
                  
                  
                
                  <button type="submit" class="btn text-black btn-info" >Save</button>
                </form>
              </div>
        </div>
    </div>
</section>
@include('admin.footer')