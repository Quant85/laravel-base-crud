<div class="wrap">
      @foreach ($posts as $post)
      <a class="card-link" href="/">
        <article class="blog-card">
          <img class="post-image" src="<?php echo " {$post->img}" ;?>" />
          <div class="article-details">
            <h2 class="post-title"><?php echo " {$post->title}" ;?></h2>
            <h3 class="post-subtitle"><?php echo " {$post->subtitle}" ;?></h3>
            <p class="post-description"><?php echo " {$post->body}" ;?></p>
          </div>
          <!-- /.article-details -->
        </article>
      </a>
      @endforeach
</div>