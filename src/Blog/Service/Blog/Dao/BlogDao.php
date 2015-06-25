<?php
namespace  Blog\Service\Blog\Dao;

interface BlogDao
{
	public function getBlogs();

	public function getBlog($id);

	public function addBlog();

	public function editBlog();

	public function deleteBlog();
}
