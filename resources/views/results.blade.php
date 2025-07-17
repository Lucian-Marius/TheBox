<x-heading>Results</x-heading>

<x-layout>

        <div class="x-card-container">
            @foreach ($concepts as $concept)
                <x-card :concept="$concept"></x-card>
            @endforeach
        </div>

        @if ($concepts->isEmpty())
            <div class="no-results">
                <h2>No results found</h2>
                <p>Try searching for a different term or check your spelling.</p>
            </div>
        @endif
</x-layout>