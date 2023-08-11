<?php

namespace App\Entity;

use App\Repository\BannerRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Vich\UploaderBundle\Entity\File as EmbeddedFile;
use Symfony\Component\HttpFoundation\File\File;

#[Vich\Uploadable]
#[ORM\Entity(repositoryClass: BannerRepository::class)]
class Banner
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 55)]
    private ?string $title = null;


    #[Vich\UploadableField(
        mapping: 'banners',
        fileNameProperty: 'image.name',
        size: 'image.size'
    )]
    private ?File $imageFile = null;

    public function __construct()
    {
        $this->image = new EmbeddedFile();
    }

    #[ORM\Embedded(class: EmbeddedFile::class)]
    private ?EmbeddedFile $image = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Banner
     */
    public function setId(?int $id): Banner
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return Banner
     */
    public function setTitle(?string $title): Banner
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @param File|null $imageFile
     * @return Banner
     */
    public function setImageFile(?File $imageFile): Banner
    {
        $this->imageFile = $imageFile;
        return $this;
    }

    /**
     * @return EmbeddedFile|null
     */
    public function getImage(): ?EmbeddedFile
    {
        return $this->image;
    }

    /**
     * @param EmbeddedFile|null $image
     * @return Banner
     */
    public function setImage(?EmbeddedFile $image): Banner
    {
        $this->image = $image;
        return $this;
    }
}
