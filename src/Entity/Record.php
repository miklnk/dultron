<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RecordRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=RecordRepository::class)
 */
class Record
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $domain_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=64000, nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ttl;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $prio;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $disabled;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $odername;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $auth;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDomainId(): ?int
    {
        return $this->domain_id;
    }

    public function setDomainId(?int $domain_id): self
    {
        $this->domain_id = $domain_id;

        return $this;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getTtl(): ?int
    {
        return $this->ttl;
    }

    public function setTtl(?int $ttl): self
    {
        $this->ttl = $ttl;

        return $this;
    }

    public function getPrio(): ?int
    {
        return $this->prio;
    }

    public function setPrio(?int $prio): self
    {
        $this->prio = $prio;

        return $this;
    }

    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

    public function setDisabled(?bool $disabled): self
    {
        $this->disabled = $disabled;

        return $this;
    }

    public function getOdername(): ?string
    {
        return $this->odername;
    }

    public function setOdername(?string $odername): self
    {
        $this->odername = $odername;

        return $this;
    }

    public function getAuth(): ?bool
    {
        return $this->auth;
    }

    public function setAuth(?bool $auth): self
    {
        $this->auth = $auth;

        return $this;
    }
}
