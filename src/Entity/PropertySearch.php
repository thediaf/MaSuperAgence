<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

class PropertySearch
{
    /**
     *
     * @var int|null
     */
    private $maxPrice;

    /**
     *
     * @var int|null
     * @Assert\Range(min=10, max=400)
     */
    private $minSurface;

    /**
     *
     * @var ArrayCollection
     */
    private $options;

    public function __construct()
    {
        $this->options = new ArrayCollection();
    }

    /**
     * 
     *
     * @return integer|null
     */
    public function getMaxPrice(): ?int   
    {
        return $this->maxPrice;
    }

    /**
     * Undocumented function
     *
     * @param integer|null $maxPrice
     * @return PropertySearch
     */
    public function setMaxPrice(int $maxPrice): PropertySearch
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return integer|null
     */
    public function getMinSurface(): ?int 
    {
        return $this->minSurface;
    }

    /**
     *
     * @param integer|null $minSurface
     * @return PropertySearch
     */
    public function setMinSurface(int $minSurface): PropertySearch
    {
        $this->minSurface = $minSurface;
        return $this;
    }


    /**
     * Undocumented function
     *
     * @return ArrayCollection
     */
    public function getOptions(): ArrayCollection 
    {
        return $this->options;
    }

    /**
     *
     * @param ArrayCollection $options
     * @return PropertySearch
     */
    public function setOptions(int $options): PropertySearch
    {
        $this->options = $options;
        return $this;
    }
}