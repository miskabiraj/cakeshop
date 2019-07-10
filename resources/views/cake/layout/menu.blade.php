<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav">
                    <li><a href="home">Home</a></li>


                    <li class="menu-has-children"><a class="" href="#">Category</a>
                        @if(!empty(App\Category::get()->all()))
                            <ul>
                                @foreach(App\Category::get()->all() as $Catagory)
                                    <li><a href="{{ url('/package/'.$Catagory->category) }}">{{  $Catagory->category }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>


                    <li><a href="shop">Shop Cake</a></li>
                    <li><a href="single-product">Single Cake</a></li>
                    <li><a href="cart">Cart</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



