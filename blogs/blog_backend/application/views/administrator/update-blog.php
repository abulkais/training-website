<div class="page-header">
	<div class="page-header-title">
		<h4>
			<?php echo $title; ?>
		</h4>
	</div>
	<div class="page-header-breadcrumb">
		<ul class="breadcrumb-title">
			<li class="breadcrumb-item">
				<a href="index-2.html">
					<i class="icofont icofont-home"></i>
				</a>
			</li>
			<?php //print_r($viewBlogComments); ?>
			<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>administrator/add/blog">Add Blogs</a>
			</li>
			<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>administrator/blogs/list-blog">List Blogs</a>
			</li>
		</ul>
	</div>
</div>
<!-- Page body start -->
<div class="page-body">
	<div class="row">
		<div class="col-sm-12">
			<!-- Basic Form Inputs card start -->
			<div class="card">
				<div class="card-block">
					<?php echo form_open_multipart('administrator/blogs/update-blog'); ?>
					<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
					<div class="form-group col-sm-8">
						<label>Title</label>
						<input type="text" class="form-control" name="title" id="title" placeholder="Add Title"
							value="<?php echo $post['title']; ?>">
					</div>
					<div class="form-group col-sm-12">
						<label>Meta Description</label>
						<textarea class="form-control" name="metadescription"
							placeholder="Add Meta Description"><?php echo $post['meta_description']; ?></textarea>
					</div>
					<div class="form-group col-sm-12">
						<label>Meta Keywords</label>
						<textarea class="form-control" name="metakeywords"
							placeholder="Add Meta Keywords"><?php echo $post['meta_keywords']; ?></textarea>
					</div>
					<div class="form-group col-sm-12">
									<label>Canonical</label>
									<textarea class="form-control" id="canonicallink" name="canonicallink" placeholder="Add Canonical Link"><?php echo $post['canonical_link']; ?></textarea>
									<!-- <span id="canonicallinkerror" style="color:red;"></span> -->
								  </div>
					<div class="form-group col-sm-6">
						<label>Current Blog Image</label>
						<div class="col-sm-10">
							<img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>"
								width="100px">
						</div>
					</div>
					<div class="form-group col-sm-6">
						<label>Upload New Image</label><br>
						<input type="file" name="userfile" class="form-control" size="20" value="">
					</div>
					<div class="form-group col-sm-12">
						<label>Body</label>
						<textarea id="editor1" class="form-control" name="body"
							placeholder="Add Body"><?php echo $post['body']; ?></textarea>
					</div>
					<button type="submit" id="submitbutton" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
			<!-- Basic Form Inputs card end -->
		</div>
	</div>
</div>
<!-- Page body end -->
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script>
	$('#canonicallink').on('keyup', function () {
		var title = $('#title').val();
		var baseurl = window.location.origin + '/blogs/';
		var canonicallink = $('#canonicallink').val();
		var result = canonicallink.toLowerCase().trim().split(baseurl).join('');
		var final_result = result.toLowerCase().trim().split('-').join(' ');
		if (final_result != title.toLowerCase()) {
			$('#submitbutton').attr('disabled', true);
			$('#canonicallinkerror').html('Canonical link not matched');
		}
		else {
			$('#submitbutton').attr('disabled', false);
			$('#canonicallinkerror').html('');
		}
	});
	$('#title').on('keyup', function () {
		var baseurl = window.location.origin + '/blogs/';
		var str = $('#title').val();
		var result = str.toLowerCase().trim().split(' ').join('-');
		if (result.length > 0) {
			$('#canonicallink').val(baseurl + result);
		}
		else {
			$('#canonicallink').val('');
		}
	});
	$('#title').bind('paste', function () {
		var baseurl = window.location.origin + '/blogs/';
		var elem = $(this);
		setTimeout(function () {
			elem.val()
			var result = (elem.val()).toLowerCase().trim().split(' ').join('-');
			if (result.length > 0) {
				$("#canonicallink").val(baseurl + result);
			}
			else {
				$('#canonicallink').val('');
			}
		}, 100);
	});
	$('#canonicallink').bind('paste', function () {
		var baseurl = window.location.origin + '/blogs/';
		var title = $('#title').val();
		setTimeout(function () {
			var result = title.toLowerCase().trim().split(' ').join('-');
			if (result.length > 0) {
				$("#canonicallink").val(baseurl + result);
			}
			else {
				$('#canonicallink').val('');
			}
		}, 100);
	});
</script> -->