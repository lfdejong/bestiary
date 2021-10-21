<article class="flex bg-gray-100 p-6 rounded-lg">
    @foreach($comments as $comment)

        <div class="flex-shrink-0 ">
            <img src="#" width="60" height="60" class="rounded-lg">
        </div>
        <div>
            <header>

                <h4>{{$comment->user->name}}</h4>
                <p class="text-xs">
                    <time>{{$comment->created_at}}</time>
                </p>
            </header>
            <p>{{$comment->body}}</p>
        </div>
    @endforeach
    </article>
