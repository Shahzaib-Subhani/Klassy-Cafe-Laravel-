@include('admin.navbar')
<section class="section" id="about">
    <div class="container">

        <div class="row d-flex justify-content-center">
           
            <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md ">
                <form enctype="multipart/form-data" action="{{url('/addchef')}}" method="post">
                  @csrf
                  <div class="form-group mb-6 ">
                    <input type="text" name="name" class="form-control block
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
                      placeholder="Name" required>

                      <input type="text" name="speciality" class="my-3 form-control block
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
                      placeholder="Speciality" required>


                      <input name="image" required class=" my-2 form-control
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

                
                  
                  
                
                  <button type="submit" class="btn text-black btn-info" >ADD</button>
                </form>
              </div>
        </div>
    </div>
</section>
@include('admin.footer')