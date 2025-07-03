    @props(['concept'])
    <div class="card-container">
            <div class="card-header">
                   
                
                    <div class="card-title">
                        <h5>Concept title</h5>
                    </div>

                     <div class="card-img">
                        {{-- Placeholder image, replace with actual image path along with the style attributes. --}}
                        <img src="https://picsum.photos/seed/{{ rand(0, 1000000) }}70/70" alt="Concept Image" style="width: 70px; height: 70px; border-radius: 10%;">
                    </div>
                   
            </div>

                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, vero, mollitia reprehenderit.</p>
                        <h4>Author</h4>
                    </div>

                    <div class="card-footer">
                        <div >
                            <button class="card-button">
                            <img class="card-deco" src="{{ Vite::asset('resources/images/gear-logo.png') }}" alt="">
                            </button>
                        </div>

                        <div class="card-tags">
                        @foreach ($concept->tags as $tag)
                            <x-tag :tag="$tag" />
                        @endforeach    
                        </div>
                    </div>
            </div>

