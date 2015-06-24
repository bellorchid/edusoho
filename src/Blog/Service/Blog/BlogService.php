<?php

namespace Blog\Service\Blog;

interface BlogService
{
	
	public function  showBlog();

	public function  newBlog();

	public function  editBlog();

	public function deleteBlog();
}