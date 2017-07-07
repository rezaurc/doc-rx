<?php
/**
 * Copyright (c) 2017. Rezaur Chowdhury <reza@rezaur.net>.
 *
 * This file is a part of doc-rx .
 *
 * doc-rx
 *
 * User.php
 *
 * 7/7/17 10:46 PM
 *
 * For the full copyright and license information, please view the LICENSE file
 * that is distributed with the source code.
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="`user`")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="pub_id", type="string", length=64)
     */
    public $pubId;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return string
     */
    public function getPubId()
    {
        return $this->pubId;
    }

    /**
     * @param string $pubId
     */
    public function setPubId($pubId)
    {
        $this->pubId = $pubId;
    }
}
