<?php
namespace BM\GsbBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BM\GsbBundle\Entity\Etat;

class LoadEtatData extends AbstractFixture implements OrderedFixtureInterface {
    
public function load(ObjectManager $manager){
    
$uneFicheFrais = new FicheFrais();
$uneFicheFrais->setId('SA');
$uneFicheFrais->setmois('saisie');
$uneFicheFrais->setnbJustificatifs('SA');
$uneFicheFrais->setmontantValide('SA');
$uneFicheFrais->setdateModif('SA');
$uneFicheFrais->setidUtilisateur('SA');
$uneFicheFrais->setidEtat('SA');
$manager->persist($uneFicheFrais);
$this->addReference("uneFicheFrais1", $uneFicheFrais);

$uneFicheFrais2 = new FicheFrais();
$uneFicheFrais2->setId('SA');
$uneFicheFrais2->setmois('saisie');
$uneFicheFrais2->setnbJustificatifs('SA');
$uneFicheFrais2->setmontantValide('SA');
$uneFicheFrais2->setdateModif('SA');
$uneFicheFrais2->setidUtilisateur('SA');
$uneFicheFrais2->setidEtat('SA');
$manager->persist($uneFicheFrais2);
$this->addReference("uneFicheFrais2", $uneFicheFrais2);


$manager->flush();


}
}
