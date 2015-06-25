<?php
namespace Blog\Service\Blog\Dao\Impl;

use Topxia\Service\Common\BaseDao;
use Blog\Service\Blog\Dao\BlogDao;
use PDO;

class BlogDaoImpl extends BaseDao implements BlogDao
{
    protected $table = 'blog';

    public function getBlogs()
    {
      $sql = "SELECT * FROM {$this->table} WHERE id = ? order by {$id}";

      return $this->getConnection()->fetchAll($sql, array($blog)) ? : array();
    }

    public function getBlog($id)
    {
      $sql = "SELECT * FROM {$this->table} WHERE id = ? LIMIT 1 order by id";
    }

    public function addBlog();

    public function editBlog();

    public function deleteBlog();
}
