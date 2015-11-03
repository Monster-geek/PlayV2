<?php

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
