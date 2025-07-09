<x-layout>
    <h1 class="title">{{ $concept->title }}</h1>

    <div  class="description"> 
        <p>{{ $concept->description }}</p>
        <h4 class="author">by: {{ $concept->name }}</h4>

          <div class="card-tags">
        @foreach ($concept->tags as $tag)
            <x-tag :tag="$tag" />
        @endforeach
    </div>

    </div>
<div class="concept-actions">
    
    <a class="button-link" style="padding: 12px" href="{{ route('concepts.edit', $concept) }}">Edit Concept</a>

    <form action="/concepts/{{ $concept->id }}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="button">Delete Concept</button>
    </form>
</div>
</x-layout>`