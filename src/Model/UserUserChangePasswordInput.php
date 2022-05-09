<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class UserUserChangePasswordInput
{
    /**
     * @var string
     */
    protected $currentPassword;
    /**
     * @var string
     */
    protected $newPassword;
    /**
     * @var string
     */
    protected $confirmPassword;

    public function getCurrentPassword(): string
    {
        return $this->currentPassword;
    }

    public function setCurrentPassword(string $currentPassword): self
    {
        $this->currentPassword = $currentPassword;

        return $this;
    }

    public function getNewPassword(): string
    {
        return $this->newPassword;
    }

    public function setNewPassword(string $newPassword): self
    {
        $this->newPassword = $newPassword;

        return $this;
    }

    public function getConfirmPassword(): string
    {
        return $this->confirmPassword;
    }

    public function setConfirmPassword(string $confirmPassword): self
    {
        $this->confirmPassword = $confirmPassword;

        return $this;
    }
}
