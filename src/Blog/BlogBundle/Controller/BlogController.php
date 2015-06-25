<?php
namespace Blog\BlogBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
	public function showBlogAction()
	{
		$blogs = $this->getArticleService()->showBlog();
		return $this->render('BlogBundle::showList.html.twig', array(
			'id' => $blogs['id'],
			'title' => $blogs['title'],
			'content' => $blogs['content'],
			'owner' => $blogs['owner'],
		));
	}

	public function newBlogAction()
	{
		getservbyname(getNameServe, protocol);
	}

	public function editBlogAction()
	{
			return $this->render('BlogBundle::edit.html.twig');
	}

	public function deleteBlogAction()
	{

	}

	private function getArticleService()
	{
			return $this->getServiceKernel()->createService('Blog.BlogService');
	}
}
