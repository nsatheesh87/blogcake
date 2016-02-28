<!-- File: src/Template/Articles/edit.ctp -->
<h1>Edit Article</h1>
<?= $this->Form->create($article) ?>
	<div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Post Title</label>
                            <input type="text" data-validation-required-message="Please enter title." required="" name="title" id="title" placeholder="Post Title" class="form-control" value="<?= $article->title ?>">
                            <p class="help-block text-danger"></p>
        </div>
    </div>

    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Content</label>
                            <textarea data-validation-required-message="Please enter conte nt." required="" name="body" id="body" placeholder="Post Content" class="form-control" rows="5" aria-invalid="false"><?= $article->body ?></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
<br/>
    <div class="row">
                        <div class="form-group col-xs-12">
                            <button class="btn btn-default" type="submit">Update Post</button>
                        </div>
                    </div>
<?= $this->Form->end() ?>
