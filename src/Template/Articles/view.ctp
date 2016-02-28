<div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            <?= h($article->title) ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?= h($article->body) ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Admin</a> on <?= $article->created->format(DATE_RFC850) ?></p>
                </div>
                <hr>
                <div>
                	<h4> Comments(<?= count($article['comments']) ?>)</h4>
                	<form method="POST" action="/comments/add">
                	 <input type="hidden" name="article_id" id="article_id" value="<?= $article->id ?>" />
						<div class="row control-group">
					        <div class="form-group col-xs-12 floating-label-form-group controls">
					            <label>Post Title</label>
					               <input type="text" data-validation-required-message="Please enter title." required="" name="author" id="author" placeholder="Full Name" class="form-control">
					               <p class="help-block text-danger"></p>
					        </div>
					    </div>

					    <div class="row control-group">
					        <div class="form-group col-xs-12 floating-label-form-group controls">
					            <label>Content</label>
					                <textarea data-validation-required-message="Please enter conte nt." required="" name="body" id="body" placeholder="Add your comment here" class="form-control" rows="5" aria-invalid="false"></textarea>
					                <p class="help-block text-danger"></p>
					        </div>
					    </div>
					<br/>
					    <div class="row">
					        <div class="form-group col-xs-12">
					            <button class="btn btn-default" type="submit">Add Comment</button>
					        </div>
					    </div>
					</form>
                </div>

               <div class="row">
	               <?php foreach ($article['comments'] as $comment): ?>
		               	<div class="post-preview">
			               	<p>
			                            <?= $comment->body ?>
			                 </p>
			                 <p class="post-meta">Added by <a href="#"><?= $comment->author ?></a> on <?= $comment->created->format(DATE_RFC850) ?> </p>
		                </div>
		                <hr>
		            <?php endforeach; ?>
               </div>
    </div>
</div>
