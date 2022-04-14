<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach ($data as $item)
                <div class="item">
                   <form action="{{url("/addcart")}}/{{$item->id}}" method="post">
                       @csrf
                    <div class='card ' style="background:url('/foodimage/{{$item->image}}')">
                        <div class="price"><h6>${{$item->price}}</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{$item->title}}</h1>
                          <p class='description'>{{$item->description}}</p>
                          
                        </div>
                    </div>
                    <div class="main-text-button mt-1">
                        <input type="text" min="1" name="quantity" value="1" size="5">
                        <button type="submit" class="btn btn-my ">Add to cart <i class="fa fa-plus"></i></button>
                      </div>
                   </form>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</section>