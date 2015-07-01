<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 21/05/15
 * Time: 01:11
 */

namespace Play\MainBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

class Accounts extends BaseUser {



    /**
     * @var integer
     */
    protected  $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
