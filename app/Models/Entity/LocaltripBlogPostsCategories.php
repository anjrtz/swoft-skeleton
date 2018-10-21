<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * @Entity()
 * @Table(name="localtrip_blog_posts_categories")
 * @uses      LocaltripBlogPostsCategories
 */
class LocaltripBlogPostsCategories extends Model
{
    /**
     * @var int $postId 
     * @Id()
     * @Column(name="post_id", type="integer")
     */
    private $postId;

    /**
     * @var int $categoryId 
     * @Id()
     * @Column(name="category_id", type="integer")
     */
    private $categoryId;

    /**
     * @param int $value
     * @return $this
     */
    public function setPostId(int $value)
    {
        $this->postId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setCategoryId(int $value)
    {
        $this->categoryId = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

}
