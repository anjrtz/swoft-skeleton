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
 * @Table(name="cms_theme_logs")
 * @uses      CmsThemeLogs
 */
class CmsThemeLogs extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $type 
     * @Column(name="type", type="string", length=20)
     * @Required()
     */
    private $type;

    /**
     * @var string $theme 
     * @Column(name="theme", type="string", length=191)
     */
    private $theme;

    /**
     * @var string $template 
     * @Column(name="template", type="string", length=191)
     */
    private $template;

    /**
     * @var string $oldTemplate 
     * @Column(name="old_template", type="string", length=191)
     */
    private $oldTemplate;

    /**
     * @var string $content 
     * @Column(name="content", type="text", length=4294967295)
     */
    private $content;

    /**
     * @var string $oldContent 
     * @Column(name="old_content", type="text", length=4294967295)
     */
    private $oldContent;

    /**
     * @var int $userId 
     * @Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var string $createdAt 
     * @Column(name="created_at", type="timestamp")
     */
    private $createdAt;

    /**
     * @var string $updatedAt 
     * @Column(name="updated_at", type="timestamp")
     */
    private $updatedAt;

    /**
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setType(string $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setTheme(string $value): self
    {
        $this->theme = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setTemplate(string $value): self
    {
        $this->template = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setOldTemplate(string $value): self
    {
        $this->oldTemplate = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setContent(string $value): self
    {
        $this->content = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setOldContent(string $value): self
    {
        $this->oldContent = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setUserId(int $value): self
    {
        $this->userId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCreatedAt(string $value): self
    {
        $this->createdAt = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUpdatedAt(string $value): self
    {
        $this->updatedAt = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @return string
     */
    public function getOldTemplate()
    {
        return $this->oldTemplate;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getOldContent()
    {
        return $this->oldContent;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

}
