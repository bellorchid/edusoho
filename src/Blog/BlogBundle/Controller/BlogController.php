<?php
namespace Blog\BlogBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
	public function showBlogAction()
	{
		return new Response("<!DOCTYPE html>
		<html>
		<head>
			<title>zyc</title>
		</head>
		<body>
		<h1></h1>
		<h1 align = center>This is my Blog</h1>
		</body>
		</html>");
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
}
