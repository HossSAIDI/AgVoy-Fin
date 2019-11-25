<?php

namespace App\DataFixtures;

use App\Entity\Region;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture{
    public function load(ObjectManager $manager){
        // $product = new Product();
        // $manager->persist($product);
        foreach ($this->getRegionsData() as [$country, $name, $presentation]) {
            $region = new Region();
            $region->setCountry($country);
            $region->setName($name);
            $region->setPresentation($presentation);
            $manager->persist($region);
        }

        $manager->flush();

    }

    private function getRegionsData(){
        yield ['FR', 'Bretagne', 'La région des crêpes'];
    }
}
