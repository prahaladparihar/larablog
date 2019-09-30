@extends('layouts.app') 

@section('content')
<div class="row text-monospace text-center" style="margin-top: -30px;">
    <div style="overflow:hidden;" class="col-4">
        <img src="https://images.unsplash.com/reserve/LJIZlzHgQ7WPSh5KVTCB_Typewriter.jpg?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
    </div>
    <div style="background-color:ghostwhite" class="jumbotron col-8 mt-0 mb-0">
        <h2 class="display-4">
             Welcome to Blogger, where words matter.
        </h2>
        <hr style="width:60%;border-top:3px solid black">
         <h2 class="font-weight-normal mb-4" style="font-size:200%;margin-top:50px;">
             Ideas and perspectives you won’t find anywhere else.
         </h2>
         <p class="h4 lead ml-4" style="margin-top:50px;">
             Blogger taps into the brains of the world’s most insightful writers, thinkers, and storytellers to bring you the smartest takes on topics that matter. So whatever your interest, you can always find fresh thinking and unique perspectives.
         </p>
         @if(Auth::check())
         @else
         <a style="margin-top:50px;" class="btn btn-outline-dark btn-lg" href="{{ route('login') }}">Login</a>
         <a style="margin-top:50px;" class="btn btn-outline-dark btn-lg" href="{{ route('register') }}">Register</a>   
         @endif
     </div>
</div>

<div class="container-full mb-0" style="padding-top:50px;">
    <div class="row justify-content-center">
        <div class="col-5">
            <h1 class="display-4">
                We believe in feeding minds, not mindless feeds
            </h1>
            <div class="row">
                <div class="col-1">
                    <div class="inline mr-2" style="border-left: 3px solid black;height: 260px;"></div>
                </div>
                <div class="col-11">
                    <div class="inline-block mt-5 h3 font-weight-normal">Become a Blogger member for <strong>FREE</strong> and get unlimited access to the smartest writers and biggest ideas you won’t find anywhere else.</div>
                    <div class="inline-block d-flex mt-4">
                        @if(Auth::check())
                        @else
                        <div class="inline mr-3"><a class="btn btn-outline-dark" href="{{ route('login') }}">Login</a></div>
                        <div class="inline"><a class="btn btn-outline-dark" href={{ route('register') }}">Sign Up</a></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5" style="margin-left:50px">
            <img src="https://cdn-images-1.medium.com/max/500/1*a9dZ9L0vZrDQDrM0dHlXqg.png" alt="img">
        </div>
    </div>
</div>

<div class="container-full" style="background-color:#E8F3EC;padding-top:50px;padding-bottom:50px;">
 <h1 class="display-4 text-center mb-5">What Blogger members are saying</h1>
     <div class="row justify-content-center">
             <div class="col-2">
                 <img style="height:150px;border-radius: 50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmGyt0azNpeAnFwOtIhT_BhWkRLlkARLCuc5aqApIBeUAMKY3l "alt="jasmine">
                 <p><span style="font-size:200%;">&#34;</span>There’s no other place that combines such an excellent level of writing with a truly engaged and active community. Blogger is truly where ideas are born, shared, and spread..</p>
                 <small class="text-muted">Jasmine Bina</small>
             </div>
             <div class="col-2">
                 <img style="height:150px;border-radius:50%;"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTw2O3tGPmNL3UYlPEH6_MeXDkqAwi1p7J07ZrpM6Z5UB5bqbh0iQ"alt="andrew">
                 <p><span style="font-size:200%;">&#34;</span>Do yourself a favor and start browsing Blogger for high quality articles on just about ANY topic. Get those mental gears turning!</p>
                 <small class="text-muted">Andrew Courter</small>
             </div>
             <div class="col-2">
                 <img style="height:150px;border-radius:50%;"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRy1u6kXVrsHXH5IBO8UxnB-FVvLHAf5u74_irOLyMKUbZR4f4z"alt="kayt">
                 <p> <span style="font-size:200%;">&#34;</span> In a web full of pseudo thought-leaders, Blogger is the one place that I can reliably come to and be better informed in the easiest way possible of the things that matter to me.</p>
                 <small class="text-muted">Kayt Molina</small>
             </div>
             <div class="col-2">
                 <img style="height:150px;border-radius:50%;"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTy4tgY2So123M81MsEXyPgKb2MZXIFvBFrMRoWKfeD8Q32P58O"alt="jack">
                 <p><span style="font-size:200%;">&#34;</span>In a web full of pseudo thought-leaders, Blogger is the one place that I can reliably come to and be better informed in the easiest way possible of the things that matter to me.</p>
                 <small class="text-muted">Jack Preston King</small>
             </div>
     </div>
</div>
<div class="container-full">
     <div class="jumbotron mb-0 pt-2 pb-2" style="background-color:white;">
             <div class="row justify-content-center">
                     <div class="col-6">
                         <div class="inline-block mt-5 font-weight-normal">
                             <h1>Directly reward the stories and authors you love</h1>
                             <p class="h4 font-weight-normal">We believe in compensating writers for the value they provide to you, not the fleeting attention they attract for advertisers. That’s why your upvotes supports the authors you connect with most.
                               <br> <br>   You already love a good story. Ever thought about writing one?<br> <br> </p>
                         </div>
                         <div class="inline-block d-flex mt-4">
                         @if(Auth::check())
                         @else
                         <div class="inline"><a class="btn btn-outline-dark btn-lg" href="{{ route('login') }}">Login</a>
                            <a class="btn btn-outline-dark btn-lg" href="{{ route('register') }}">Register</a>
                            </div>
                         @endif
                         </div>
                     </div>
                     <div class="col-4">
                         <img style="height:500px;" src="https://cdn-images-1.medium.com/max/500/1*SSh2lotzr463YjvAk6_0KQ.gif" alt="">
                     </div>
                 </div>
        </div>
</div>



<div class="container-full">
     <div class="container-full mb-4 pt-2 pb-2" style="background-color: #99c2ff;">
             <div class="row justify-content-center">
                     <div class="col-6">
                         <div class="inline-block mt-5 display-4 font-weight-normal">Become a <strong>BLOGGER</strong> member for <strong>FREE</strong> and get unlimited access to the smartest writers and biggest ideas you won’t find anywhere else.</div>
                     </div>
                     <div class="col-4 offset-1">
                         <img style="margin-top: 100px;" src="https://cdn-images-1.medium.com/max/560/1*k08BmE_1I7KaMqQ0V5oK7A.png" alt="">
                     </div>
                 </div>
        </div>
</div>
<div class="container-full mb-0">
    
    <div class="row">
        <div class="col-6 offset-1">
             <div class="display-4 mb-4">Thanks For Reading. Ready to Come Onboard ?</div>
             @if(Auth::check())
            @else
            <a style="margin-top:50px;" class="btn btn-outline-dark btn-lg" href="{{ route('login') }}">Login</a>
             <a style="margin-top:50px;" class="btn btn-outline-dark btn-lg" href="{{ route('register') }}">Register</a>
             @endif
        </div>
        <div class="col-4 offset-1">
            <img style="margin-left: -170px;height:275px;" src="https://cdn-images-1.medium.com/max/726/1*vZ8miTqyE3eUnBqQjvLJeA.png" alt="">
        </div>
    </div>
    <div class="text-center">
        Crafted by Prachi Nimase with <ion-icon class="mt-1" style="height:20px;" name="heart"></ion-icon>
    </div>
</div>
@endsection


    