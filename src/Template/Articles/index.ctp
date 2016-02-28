<!-- File: src/Template/Articles/index.ctp -->
<div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach ($articles as $article): ?>
                <div class="post-preview">
                    <a href="/articles/view/<?= $article->id ?>">
                        <h2 class="post-title">
                            <?= $article->title ?>
                        </h2>
                    </a> 
                     <li>
                    <?php if ($this->request->session()->read('Auth.User.username')): ?>
                           <span style="float:right"><a href="/articles/edit/<?=$article->id ?>">Edit</a></span>
                    <?php endif; ?>
                     
                        <h3 class="post-subtitle">
                            <?= $article->body ?>
                        </h3>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on <?= $article->created->format(DATE_RFC850) ?>&nbsp; 
                     </p>

                </div>
                <hr>
                <?php endforeach; ?>
            </div>
</div>