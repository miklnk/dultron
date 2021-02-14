<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DomainsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DomainsRepository::class)
 */
class Domain
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $master;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $last_check;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $notified_serial;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $account;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getMaster(): ?string
    {
        return $this->master;
    }

    public function setMaster(?string $master): self
    {
        $this->master = $master;

        return $this;
    }

    public function getLastCheck(): ?int
    {
        return $this->last_check;
    }

    public function setLastCheck(?int $last_check): self
    {
        $this->last_check = $last_check;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNotifiedSerial(): ?int
    {
        return $this->notified_serial;
    }

    public function setNotifiedSerial(?int $notified_serial): self
    {
        $this->notified_serial = $notified_serial;

        return $this;
    }

    public function getAccount(): ?string
    {
        return $this->account;
    }

    public function setAccount(?string $account): self
    {
        $this->account = $account;

        return $this;
    }
}
