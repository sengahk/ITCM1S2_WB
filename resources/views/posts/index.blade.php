<h4> Show function Index in PostController</h4>

        @if(count($posts)>1)
            @foreach($posts as $post)


                <p><small><a href="/posts/{{$post->pos_id}}"> {{$post->title}}</a></small></p>
                <small>{{$post->body}}</small>
                <small> {{$post->created_at}}</small>


            @endforeach
        @else
            <p> No Posts found</p>
        @endif









