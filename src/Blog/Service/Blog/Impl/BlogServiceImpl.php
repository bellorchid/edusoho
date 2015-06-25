<?php

namespace Blog\Service\Blog\Impl;

use Topxia\Service\Common\BaseService;
// use Topxia\Common\ArrayToolkit;
// use Topxia\Common\StringToolkit;
use Topxia\Service\Common\ServiceKernel;


class BlogServiceImpl extends BaseService implements BlogService
{
	public function showBlog()
	{
		return $this->getBlogDao()->getBlogs($id);
	}

	public function newBlog()
	{

	}

	public function editBlog()
	{

	}

	public function deleteBlog()
	{

	}

	private function getBlogDao()
	{
			return $this->createDao('Blog.BlogDao');
	}
}
