<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class ExecutionWorkflowTerminateWorkflowExecutionCommand extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var ExecutionId|null
     */
    protected $id;
    /**
     * @var \DateTime|null
     */
    protected $date;
    /**
     * @var string|null
     */
    protected $reason;
    /**
     * @var UserId|null
     */
    protected $user;

    public function getId(): ?ExecutionId
    {
        return $this->id;
    }

    public function setId(?ExecutionId $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }

    public function getUser(): ?UserId
    {
        return $this->user;
    }

    public function setUser(?UserId $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
