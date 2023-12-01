<?php

abstract class Hero
{
    public function __construct(
        private string $name,
        private int $hp = 100,
        private int $mana = 50,
        private int $level = 1,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        if ($name === $this->name) {
            throw new Error('Le nom doit être différent');
        }
        $this->name = $name;

        return $this;
    }

    public function getHp(): int|string
    {
        if($this->hp <= 0){
            return 'Votre héro a été tuée';
        }
        return $this->hp;
    }

    public function setHp(int $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    public function getMana(): int
    {
        return $this->mana;
    }

    public function setMana(int $mana): self
    {
        $this->mana = $mana;

        return $this;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function levelUp(): self
    {
        if($this->getLevel() >= 10){
            throw new Error('Le niveau maximum a été atteint');
        }
        $this->level++;
        $this->hp = $this->hp + 50;
        $this->mana = $this->mana + 25;

        return $this;
    }

    public function attack(Hero $hero): void{
        $hero->hp = $hero->hp - 20;
    }
}


