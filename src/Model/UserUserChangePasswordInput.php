<?php

namespace Gyroscops\Api\Model;

class UserUserChangePasswordInput
{
    /**
     * 
     *
     * @var string
     */
    protected $currentPassword;
    /**
     * 
     *
     * @var string
     */
    protected $newPassword;
    /**
     * 
     *
     * @var string
     */
    protected $confirmPassword;
    /**
     * 
     *
     * @return string
     */
    public function getCurrentPassword() : string
    {
        return $this->currentPassword;
    }
    /**
     * 
     *
     * @param string $currentPassword
     *
     * @return self
     */
    public function setCurrentPassword(string $currentPassword) : self
    {
        $this->currentPassword = $currentPassword;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNewPassword() : string
    {
        return $this->newPassword;
    }
    /**
     * 
     *
     * @param string $newPassword
     *
     * @return self
     */
    public function setNewPassword(string $newPassword) : self
    {
        $this->newPassword = $newPassword;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConfirmPassword() : string
    {
        return $this->confirmPassword;
    }
    /**
     * 
     *
     * @param string $confirmPassword
     *
     * @return self
     */
    public function setConfirmPassword(string $confirmPassword) : self
    {
        $this->confirmPassword = $confirmPassword;
        return $this;
    }
}