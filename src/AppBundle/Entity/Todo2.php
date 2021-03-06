<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Todo
 *
 * @ORM\Table(name="todo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TodoRepository")
 */
class Todo
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="finalmeal", type="string", length=255)
     */
    private $finalmeal;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_order", type="string", length=255)
     */
    private $extraOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="flight", type="string", length=255)
     */
    private $flight;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime")
     */
    private $createDate;

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
     * Set name
     *
     * @param string $name
     *
     * @return Todo
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
     * Set finalmeal.
     *
     * @param string $finalmeal
     *
     * @return Todo
     */
    public function setFinalmeal($finalmeal)
    {
        $this->finalmeal = $finalmeal;

        return $this;
    }

    /**
     * Get finalmeal.
     *
     * @return string
     */
    public function getFinalmeal()
    {
        return $this->finalmeal;
    }
    
    /**
     * Set category.
     *
     * @param string $category
     *
     * @return Todo
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set extraOrder.
     *
     * @param string $extraOrder
     *
     * @return Todo
     */
    public function setExtraOrder($extraOrder)
    {
        $this->extraOrder = $extraOrder;

        return $this;
    }

    /**
     * Get extraOrder.
     *
     * @return string
     */
    public function getExtraOrder()
    {
        return $this->extraOrder;
    }

    /**
     * Set flight.
     *
     * @param string $flight
     *
     * @return Todo
     */
    public function setFlight($flight)
    {
        $this->flight = $flight;

        return $this;
    }

    /**
     * Get flight.
     *
     * @return string
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return Todo
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
}

