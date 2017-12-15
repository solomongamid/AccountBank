<?php

namespace AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Account
 *
 * @ORM\Table(name="account")
 * @ORM\Entity(repositoryClass="AccountBundle\Repository\AccountRepository")
 */
class Account
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="num", type="integer", unique=true)
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set num
     *
     * @param integer $num
     *
     * @return Account
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Account
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Account
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Account
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

// les beneficiaries
    /**
     * @ORM\ManyToMany(targetEntity="Account")
     * @ORM\JoinTable(name="account_beneficiaries", joinColumns={@ORM\JoinColumn(name="account_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="beneficiaries_id", referencedColumnName="id")}
     *      )
     */    
    private $beneficiaries;

//start Transaction
    /**
     * @ORM\OneToMany(targetEntity="Transaction", mappedBy="startAccount")
     */
     private $startTransaction;

    /**
     * @ORM\OneToMany(targetEntity="Transaction", mappedBy="endAccount")
     */
    private $endTransaction;

    public function __construct()
    {
        $this->startTransaction = new ArrayCollection();
        $this->endTransaction = new ArrayCollection();
        $this->beneficiaries = new ArrayCollection();
    }

    public function getStartTransaction(){
      return $this->startTransaction;
    }

    public function setStartTransaction($transaction){
        $this->startTransaction = $transaction ;
    }

//End transaction


    public function getEndTransaction(){
      return $this->endTransaction;
    }

    public function setEndTransaction($transactionEnd){
        $this->endTransaction = $transactionEnd ;
    }

// les beneficiaries

    public function getBeneficiaries(){
      return $this->beneficiaries;
    }

    public function setBeneficiaries($beneficiaries){
        $this->beneficiaries = $beneficiaries ;
    }   

//To add beneficiary to the exit beneficiaries
    public function addBeneficiary($beneficiary){
        $this->beneficiaries[] = $beneficiary ;
    } 

}

