<x-layout>

        <div class="x-card-container">
            @foreach ($concepts as $concept)
                <x-card :concept="$concept"></x-card>

            
                
            @endforeach
        </div>
</x-layout>