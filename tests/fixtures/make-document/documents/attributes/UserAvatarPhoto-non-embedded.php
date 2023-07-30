<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations AS ODM;

#[ODM\Document]
class UserAvatarPhoto
{
    #[ODM\Id]
    private ?string $id = null;

    #[ODM\Field(type: 'string')]
    private ?string $file = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    /**
     * @param string|null $file
     * @return UserAvatarPhoto
     */
    public function setFile(?string $file): static
    {
        $this->file = $file;
        return $this;
    }

}
