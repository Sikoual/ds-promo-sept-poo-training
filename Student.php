<?php

class Student implements StudentInterface
{
    public function __construct(
        private string $firstname,
        private string $lastname,
        private array $marks = [],
    ) {
    }

    public static string $class = 'A';

    public function addMark(int $mark): void {
        $this->marks[] = $mark;
    }

    public function setFirstname(string $firstname): self {
        $this->firstname = $firstname;

        return $this;
    }

    public function setLastName(string $lastname): self {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): string {
        return $this->firstname;
    }

    public function getLastname(): string {
        return $this->lastname;
    }

    public function getFullname(): string {
        return "$this->firstname $this->lastname";
    }

    public function getMarks(): array {
        return $this->marks;
    }

    public function getAverageMark(): int {
        $total = array_reduce($this->marks, fn ($average, $mark) =>
            $average + $mark, 0);

        return $total / count($this->marks);
    }
}











