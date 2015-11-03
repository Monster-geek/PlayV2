<?php

namespace Play\MainBundle\Entity;


class Ressources {

    protected $id;
    protected $account_money;
    protected $b1_lv;
    protected $b2_lv;
    protected $b3_lv;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set account_money
     *
     * @param string $accountMoney
     * @return Ressources
     */
    public function setAccountMoney($accountMoney)
    {
        $this->account_money = $accountMoney;

        return $this;
    }

    /**
     * Get account_money
     *
     * @return string 
     */
    public function getAccountMoney()
    {
        return $this->account_money;
    }

    /**
     * Set b1_lv
     *
     * @param string $b1Lv
     * @return Ressources
     */
    public function setB1Lv($b1Lv)
    {
        $this->b1_lv = $b1Lv;

        return $this;
    }

    /**
     * Get b1_lv
     *
     * @return string 
     */
    public function getB1Lv()
    {
        return $this->b1_lv;
    }

    /**
     * Set b2_lv
     *
     * @param string $b2Lv
     * @return Ressources
     */
    public function setB2Lv($b2Lv)
    {
        $this->b2_lv = $b2Lv;

        return $this;
    }

    /**
     * Get b2_lv
     *
     * @return string 
     */
    public function getB2Lv()
    {
        return $this->b2_lv;
    }

    /**
     * Set b3_lv
     *
     * @param string $b3Lv
     * @return Ressources
     */
    public function setB3Lv($b3Lv)
    {
        $this->b3_lv = $b3Lv;

        return $this;
    }

    /**
     * Get b3_lv
     *
     * @return string 
     */
    public function getB3Lv()
    {
        return $this->b3_lv;
    }
}
