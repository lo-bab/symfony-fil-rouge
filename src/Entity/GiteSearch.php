<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class GiteSearch
{
    /**
     * @var int|null
     * @Assert\Range(
     *  min=30,
     *  max=500,
     *  minMessage = "valeur minimum attendue {{ min }} m²",
     *  maxMessage = "valeur maximum attendue {{ max }} m²"
     * )
     */
    private $minSurface;
    
    /**
     * @var int|null
     * @Assert\Range(
     *  min=1,
     *  max=15,
     *  minMessage = "valeur minimum attendue {{ min }} m²",
     *  maxMessage = "valeur maximum attendue {{ max }} m²"
     * )
     */
    private $minChambre;
    
    /**
     * @var int|null
     * @Assert\Range(
     *  min=1,
     *  max=15,
     *  minMessage = "valeur minimum attendue {{ min }} m²",
     *  maxMessage = "valeur maximum attendue {{ max }} m²"
     * )
     */
    private $minCouchage;

    /**
     * Get the value of minSurface
     *
     * @return  int|null
     */
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }

    /**
     * Set the value of minSurface
     *
     * @param  int  $minSurface
     *
     * @return  self
     */
    public function setMinSurface(int $minSurface)
    {
        $this->minSurface = $minSurface;

        return $this;
    }

    /**
     * Get the value of minChambre
     *
     * @return  int|null
     */
    public function getMinChambre(): ?int
    {
        return $this->minChambre;
    }

    /**
     * Set the value of minChambre
     *
     * @param  int  $minChambre
     *
     * @return  self
     */
    public function setMinChambre(int $minChambre)
    {
        $this->minChambre = $minChambre;

        return $this;
    }

    /**
     * Get the value of minCouchage
     *
     * @return  int|null
     */
    public function getMinCouchage(): ?int
    {
        return $this->minCouchage;
    }

    /**
     * Set the value of minCouchage
     *
     * @param  int  $minCouchage
     *
     * @return  self
     */
    public function setMinCouchage(int $minCouchage)
    {
        $this->minCouchage = $minCouchage;

        return $this;
    }
}