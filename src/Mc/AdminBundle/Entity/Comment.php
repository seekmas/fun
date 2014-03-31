<?php
namespace Mc\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;
use FOS\CommentBundle\Model\SignedCommentInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
* @ORM\Table(name="comment")
* @ORM\Entity()
* @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
**/

class Comment extends BaseComment implements SignedCommentInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Thread of this comment
     *
     * @var Thread
     * @ORM\ManyToOne(targetEntity="Mc\AdminBundle\Entity\Thread")
     */
    protected $thread;

    /**
    * Author Name
    * @ORM\ManyToOne(targetEntity="Mc\AdminBundle\Entity\User")
    * @var User
    **/
    protected $author;
    
    public function setAuthor(UserInterface $author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getAuthorName()
    {
        if (null === $this->getAuthor()) {
            return '游客';
        }

        return $this->getAuthor()->getUsername();
    }


    /**
     * @param ThreadInterface $thread
     */
    // function getThread() {
    //     return $thread;
    // }

    /**
     * @param ThreadInterface $thread
     */
    // function setThread(ThreadInterface $thread) {
    //     $this->thread = $thread;
    //     return $this;
    // }
}