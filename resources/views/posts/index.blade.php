<?php foreach ($posts as $post): ?>
  <div class="well">
    <h3> <a href="posts/{{$post->id}}"> {{$post->name}} {{$post->surname}} </a></h3>

  </div>
<?php endforeach; ?>
