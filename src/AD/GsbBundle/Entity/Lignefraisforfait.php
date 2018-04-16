<?php

namespace AD\GsbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignefraisforfait
 *
 * @ORM\Table(name="lignefraisforfait", indexes={@ORM\Index(name="idFicheFrais", columns={"idFicheFrais"}), @ORM\Index(name="idFraisForfait", columns={"idFraisForfait"})})
 * @ORM\Entity(repositoryClass="AD\GsbBundle\Repository\Nomdel'entityRepository")
 */
class Lignefraisforfait
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var \Fraisforfait
     *
     * @ORM\ManyToOne(targetEntity="Fraisforfait", cascade={"Remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFraisForfait", referencedColumnName="id",nullable=false)
     * })
     */
    private $idfraisforfait;

    /**
     * @var \Fichefrais
     *
     * @ORM\ManyToOne(targetEntity="Fichefrais", cascade={"Remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFicheFrais", referencedColumnName="id",nullable=false)
     * })
     */
    private $idfichefrais;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Lignefraisforfait
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set idfraisforfait
     *
     * @param \AD\GsbBundle\Entity\Fraisforfait $idfraisforfait
     * @return Lignefraisforfait
     */
    public function setIdfraisforfait(\AD\GsbBundle\Entity\Fraisforfait $idfraisforfait = null)
    {
        $this->idfraisforfait = $idfraisforfait;

        return $this;
    }

    /**
     * Get idfraisforfait
     *
     * @return \AD\GsbBundle\Entity\Fraisforfait 
     */
    public function getIdfraisforfait()
    {
        return $this->idfraisforfait;
    }

    /**
     * Set idfichefrais
     *
     * @param \AD\GsbBundle\Entity\Fichefrais $idfichefrais
     * @return Lignefraisforfait
     */
    public function setIdfichefrais(\AD\GsbBundle\Entity\Fichefrais $idfichefrais = null)
    {
        $this->idfichefrais = $idfichefrais;

        return $this;
    }

    /**
     * Get idfichefrais
     *
     * @return \AD\GsbBundle\Entity\Fichefrais 
     */
    public function getIdfichefrais()
    {
        return $this->idfichefrais;
    }
}
