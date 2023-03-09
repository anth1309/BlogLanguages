<?php

namespace App\Model;

use DateTimeInterface;

interface TimestampedInterface
{
    public function getCreatedAt(): ?DateTimeInterface;

    public function setCreatedAt(\DateTime $createdAt);

    public function getUpdatedAt(): ?DateTimeInterface;

    public function setUpdatedAt(\DateTime $updatedAt);
}
