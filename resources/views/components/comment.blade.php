@props(['comment'])

<div class="comment-container">
    <div class="comment-header">
        <div>
            <div class="comment-user">       
                <strong">{{ $comment->user->name }}</strong>
            </div>
            <div class="comment-user">    
                <small>{{ $comment->created_at->diffForHumans() }}</small>
            </div>
        </div>
        @auth
            @if($comment->user_id === Auth::id())
                <form action="{{ route('comments.destroy', $comment) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class = "button">
                        Delete
                    </button>
                </form>
            @endif
        @endauth
    </div>
    
    <p class="comment-body">{{ $comment->content }}</p>
</div>