@foreach($posts as $post)
    {{$post['id']}}
    {{$post['title']}}
    {{$post['posted_by']}}
    <br>
@endforeach
