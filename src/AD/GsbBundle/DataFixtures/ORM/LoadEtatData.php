<?php
namespace AD\GsbBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AD\GsbBundle\Entity\Etat;

class LoadEtatData extends AbstractFixture implements OrderedFixtureInterface {
    
public function load(ObjectManager $manager){
    
$unEtat = new Etat();
$unEtat->setId('SA');
$unEtat->setLibelle('saisie');
$manager->persist($unEtat);
$this->addReference("etatSA", $unEtat);

$autreEtat = new Etat();
$autreEtat->setId('EN');
$autreEtat->setLibelle('enregistré');
$manager->persist($autreEtat);
$this->addReference("etatEN", $autreEtat);

$manager->flush();


}
}

