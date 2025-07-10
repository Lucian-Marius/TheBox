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
    
    @if($concept->boxuser_id === Auth::id())
    <a class="button-link" style="padding: 12px" href="{{ route('concepts.edit', $concept) }}">Edit Concept</a>

    <form action="/concepts/{{ $concept->id }}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="button">Delete Concept</button>
    @endif
    </form>
</div>

            <form class="comment-form" method="POST" action="{{ route('comments.store', $concept) }}">
                @csrf
                <div>
                    <label for="content" class="auth-label">Add a comment</label>
                    <textarea 
                        class="auth-input-field" 
                        id="content" 
                        name="content" 
                        placeholder="Write your comment here..." 
                        required
                    ></textarea>
                </div>
                <button type="submit" class="button">Post Comment</button>
            </form>
            

        <div>
            @forelse($concept->comments->sortByDesc('created_at') as $comment)
                <x-comment :comment="$comment" />
            @empty
                <p class="no-comments">No comments yet. Be the first to comment!</p>
            @endforelse
        </div>
    </div>

</x-layout>`