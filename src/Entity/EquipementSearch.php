<?php

namespace App\Entity;

use App\Repository\EquipementSearchRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipementSearchRepository::class)]
class EquipementSearch
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $lave_linge;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $lave_vaisselle;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $climatisation;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $television;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $terrasse;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $barbecue;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $piscine_privee;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $piscine_partagee;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $tennis;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $ping_pong;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isLaveLinge(): ?bool
    {
        return $this->lave_linge;
    }

    public function setLaveLinge(?bool $lave_linge): self
    {
        $this->lave_linge = $lave_linge;

        return $this;
    }

    public function isLaveVaisselle(): ?bool
    {
        return $this->lave_vaisselle;
    }

    public function setLaveVaisselle(?bool $lave_vaisselle): self
    {
        $this->lave_vaisselle = $lave_vaisselle;

        return $this;
    }

    public function isClimatisation(): ?bool
    {
        return $this->climatisation;
    }

    public function setClimatisation(?bool $climatisation): self
    {
        $this->climatisation = $climatisation;

        return $this;
    }

    public function isTelevision(): ?bool
    {
        return $this->television;
    }

    public function setTelevision(?bool $television): self
    {
        $this->television = $television;

        return $this;
    }

    public function isTerrasse(): ?bool
    {
        return $this->terrasse;
    }

    public function setTerrasse(?bool $terrasse): self
    {
        $this->terrasse = $terrasse;

        return $this;
    }

    public function isBarbecue(): ?bool
    {
        return $this->barbecue;
    }

    public function setBarbecue(?bool $barbecue): self
    {
        $this->barbecue = $barbecue;

        return $this;
    }

    public function isPiscinePrivee(): ?bool
    {
        return $this->piscine_privee;
    }

    public function setPiscinePrivee(?bool $piscine_privee): self
    {
        $this->piscine_privee = $piscine_privee;

        return $this;
    }

    public function isPiscinePartagee(): ?bool
    {
        return $this->piscine_partagee;
    }

    public function setPiscinePartagee(?bool $piscine_partagee): self
    {
        $this->piscine_partagee = $piscine_partagee;

        return $this;
    }

    public function isTennis(): ?bool
    {
        return $this->tennis;
    }

    public function setTennis(?bool $tennis): self
    {
        $this->tennis = $tennis;

        return $this;
    }

    public function isPingPong(): ?bool
    {
        return $this->ping_pong;
    }

    public function setPingPong(?bool $ping_pong): self
    {
        $this->ping_pong = $ping_pong;

        return $this;
    }
}
