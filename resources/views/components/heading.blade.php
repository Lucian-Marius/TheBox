 <section>
        
       <div class = "nav-deco-container"> 

              <div>
              <img src="{{ Vite::asset('resources/images/single-gear.png') }}" alt="Pandora Logo" class="nav-deco-invert">
              </div>
              
              <div >
              <img src="{{ Vite::asset('resources/images/complex-gear-deco.png') }}" alt="Pandora Logo" class="nav-deco">
              </div>

              <div >
              <img src="{{ Vite::asset('resources/images/single-gear-deco.png') }}" alt="Pandora Logo" class="nav-deco">
              </div>

              <h1>{{ $slot }}</h1>


              <div >
              <img src="{{ Vite::asset('resources/images/linked-gear.png') }}" alt="Pandora Logo" class="nav-deco-invert">
              </div>

              <div >
              <img src="{{ Vite::asset('resources/images/single-full-gear-deco.png') }}" alt="Pandora Logo" class="nav-deco">
              </div>

               <div>
              <img src="{{ Vite::asset('resources/images/gear-logo.png') }}" alt="Pandora Logo" class="logo">
              </div>
       </div>
</section>