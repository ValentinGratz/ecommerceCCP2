<?php

namespace App\Entity;

use App\Repository\ArticlesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticlesRepository::class)
 */
class Articles
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $ref_article;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $designation_article;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @var File|null
     * @Assert\Image(mimeTypes={"image/jpeg", "image/jpg", "image/png"})
     * @Vich\UploadableField(mapping="upload", fileNameProperty="image")
     *
     */
    private $imageFile;

    public function getRefArticle(): ?string
    {
        return $this->ref_article;
    }

    public function setRefArticle(string $ref_article): self
    {
        $this->ref_article = $ref_article;

        return $this;
    }

    public function getDesignationArticle(): ?string
    {
        return $this->designation_article;
    }

    public function setDesignationArticle(string $designation_article): self
    {
        $this->designation_article = $designation_article;

        return $this;
    }

}
