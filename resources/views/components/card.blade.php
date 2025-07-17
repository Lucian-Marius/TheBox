@auth
        
    @props(['concept'])


    <fieldset class="card-fieldset">
        <legend class="card-legend">
            @if($concept->category)
                <span class="card-category">
                    {{ $concept->category }}
                </span>
            @endif
        </legend>
        
        <div class="card-container">
            <div class="card-header">
                <div class="card-title">
                    <h5>{{ $concept->title }}</h5>
                </div>

                <div class="card-img">
                    {{-- Placeholder image, replace with actual image path along with the style attributes. --}}
                    <img src="https://picsum.photos/seed/{{ rand(0, 1000000) }}/70/70" 
                         alt="Concept Image" 
                         style="width: 70px; height: 70px; border-radius: 10%;">
                </div>
            </div>

            <div class="card-body">
                <p>{{ $concept->description }}</p>
                <h4 class="card-author">Dreamed by: {{ $concept->name }}</h4>
            </div>

            <div class="card-footer">
                <div>
                    <button class="card-button">
                        <a href="{{ route('concepts.show', $concept) }}" class="card-link">
                            <img class="card-deco" src="{{ Vite::asset('resources/images/gear-logo.png') }}" alt="Edit">
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
    </fieldset>
    @endauth
