@auth
        
    @props(['concept'])

    <fieldset class="card-fieldset">
        <legend class="card-legend">
            <div class="card-legend">
            <img src="https://picsum.photos/seed/{{ rand(0, 1000000) }}/50/50" 
                         alt="Avatar" 
                         style="border-radius: 50%; border: 2px solid var(--highlight-color);">
            </div>
            <div>   
            @if($concept->category)
                <span class="card-category">
                    {{ $concept->category }}
                </span>
            </div>
            @endif
        </legend>
        
        <div class="card-container">
            <div class="card-header">
                <div class="card-title">
                    <h5>{{ $concept->title }}</h5>
                     
                </div>

             
            </div>

            <div class="card-body">
                <p>{{ $concept->description }}</p>
                <h5 class="card-author">Dreamed by: {{ $concept->name }}</h5>
            </div>

            <div class="card-footer">
                <div>
                    <button class="card-button">
                        <a href="{{ route('concepts.show', $concept) }}" class="card-link">
                            <img class="card-deco" src="{{ Vite::asset($concept->getCategory()) }}" alt="Edit">
                        </a>    
                    </button>
                </div>

                <div class="card-tags">
                    @foreach ($concept->tags as $tag)
                        <x-tag :tag="$tag" />
                    @endforeach    
                </div>

          
            </div>
        </div>
        {{-- <div>
                <label>Rate this idea<label>
                <input type="radio">
                <input type="radio">
                <input type="radio">
                <input type="radio">
                <input type="radio">
        </div> --}}
        <div class="unboxing-button-container">
            <button class="unbox-button button" type="button">
                Unbox the full concept
            </button>
        </div>
    </fieldset>
    @endauth
