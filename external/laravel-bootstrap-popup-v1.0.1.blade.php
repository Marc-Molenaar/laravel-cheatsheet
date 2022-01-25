<section class="popup" id="example_popup" @if(!isset($_GET['show-popup'])) style="display: none" @endif>


    <div class="container">
        <button id="close" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i></button>
        
        @if(session()->has('success'))
            <div class="alert alert-success my-3">
                {{ session()->get('success') }}
            </div>
        @endif

        <div class="card my-3">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <span><b>Example Bootstrap popup</b></span>
                </div>
            </div>
            <div class="card-body">
                
                <input type="text" class="form-control" placeholder="Searcg..." name="search" id="search">

                <div class="card my-3 product_items border-0">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <span><b>Header 1</b></span>
                        </div>
                    </div>
                    <div class="row g-0">
                        
                        @foreach($items as $item)

                            <div class="col-sm-4 product_item">
                                <div class="card rounded-0">

                                    <form action="/cart" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <input type="hidden" name="cart_id" value="{{$cart->id}}">

                                        <div class="card-body">
                                            <h5 class="card-title">{{$item->name}}</h5>
                                            <p class="card-text">{{$item->descr}}</p>
                                            
                                            <div class="d-flex">
                                                <input type="number" name="amount" class="form-control w-25" id="amount" value="1" placeholder="1">
                                                <button href="#" type="submit" class="btn btn-primary add mx-1"><i class="bi bi-plus-lg"></i></button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>    
    </div>
</section>
