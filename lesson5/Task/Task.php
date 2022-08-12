<?php

class Task
{
    private User $user;
    private ?string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private array $comments = [];

    public function __construct(User $user, string $description = null, int $priority = 1)
    {
        $this->description = $description;
        $this->priority = $priority;
        $this->user = $user;
        $this->setDateCreated(new DateTime());
    }

    public function makeAsDone(): void
    {
        $this->setDateUpdated(new DateTime());
        $this->setDateDone(new DateTime());
        $this->setIsDone();
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function isDone(): bool
    {
        return $this->isDone;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function setDescription(string $description): void
    {
        $this->setDateUpdated(new DateTime());
        $this->description = $description;
    }

    public function setDateCreated(DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    public function setDateUpdated(DateTime $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }

    public function setDateDone(DateTime $dateDone): void
    {
        $this->dateDone = $dateDone;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    public function setIsDone(bool $isDone): void
    {
        $this->isDone = true;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function setComment(Comment $comment): void
    {
        $this->comments[] = $comment;
    }


}
