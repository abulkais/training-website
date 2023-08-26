<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('BlogModel');
	}

	public function index()
	{
		if (empty($_GET)) {
			$this->load->view('blog/index.php');
		} else {
			$page =  $_GET['page'];
			$result = $this->BlogModel->loadmoredata($page);
			foreach ($result as $row) {
				if ($row->status == '0') {
?>
					<div class="col-sm-3" style="height:250px;">
						<div class="post">
							<a class="post-img" target="_blank" href="<?php echo $row->slug; ?>">
								<img src="<?php echo base_url(); ?>blog_backend/assets/images/posts/<?php echo $row->post_image; ?>" alt="<?php echo $row->post_image; ?>">
							</a>
							<div class="post-body">
								<h1 class="post-title"><a target="_blank" href="<?php echo $row->slug; ?>"><?php echo $row->title; ?></a></h1>
								<ul class="post-meta">
									<li><i>Posted on</i></li>
									<li><?php echo date("d M Y", strtotime($row->created_at)); ?></li>
								</ul>
							</div>
						</div>
					</div>
<?php
				}
			}
			exit;
		}
	}


	public function post($url_title = NULL)
	{
		if ($url_title != "") {
			$data['single_post'] = $this->BlogModel->single_post($url_title);

			if (empty($data['single_post'])) {
				$this->load->view('blog/404.php');
			} else {
				$this->load->view('blog/blog-post.php', $data);
			}
		}
	}

	public function loadmoredata()
	{
		$page =  $_GET['page'];
		$countries = $this->BlogModel->loadmoredata($page);
		foreach ($countries as $country) {
			echo "<tr><td>" . $country->id . "</td><td>" . $country->country_name . "</td><td>" . $country->country_code . "</td></tr>";
		}
		exit;
	}
}
