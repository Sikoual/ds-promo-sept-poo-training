<?php

class Rogue extends Hero
{
    public function assassinat(Hero $hero): int|string
    {
        if (get_class($hero) === 'Mage') {
            $hero->setHp($hero->getHp() - 50);
        } else {
            $hero->setHp($hero->getHp() - 10);
        }

        return $hero->getHp();
    }
}