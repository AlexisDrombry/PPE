<?php

namespace AD\GsbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichefrais
 *
 * @ORM\Table(name="fichefrais", uniqueConstraints={@ORM\UniqueConstraint(name="UtilMois", columns={"idUtilisateur", "mois"})}, indexes={@ORM\Index(name="idEtat", columns={"idEtat"}), @ORM\Index(name="IDX_92D5AB085D419CCB", columns={"idUtilisateur"})})
 * @ORM\Entity(repositoryClass="AD\GsbBundle\Repository\Nomdel'entityRepository")
 */
class Fichefrais
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
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=6, nullable=false)
     */
    private $mois;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbJustificatifs", type="integer", nullable=true)
     */
    private $nbjustificatifs;

    /**
     * @var string
     *
     * @ORM\Column(name="montantValide", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montantvalide;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateModif", type="date", nullable=true)
     */
    private $datemodif;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur", cascade={"Remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUtilisateur", referencedColumnName="id", nullable=false)
     * })
     */
    private $idutilisateur;

    /**
     * @var \Etat
     *
     * @ORM\ManyToOne(targetEntity="Etat", cascade={"Remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtat", referencedColumnName="id", nullable=false)
     * })
     */
    private $idetat;



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
     * Set mois
     *
     * @param string $mois
     * @return Fichefrais
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return string 
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set nbjustificatifs
     *
     * @param integer $nbjustificatifs
     * @return Fichefrais
     */
    public function setNbjustificatifs($nbjustificatifs)
    {
        $this->nbjustificatifs = $nbjustificatifs;

        return $this;
    }

    /**
     * Get nbjustificatifs
     *
     * @return integer 
     */
    public function getNbjustificatifs()
    {
        return $this->nbjustificatifs;
    }

    /**
     * Set montantvalide
     *
     * @param string $montantvalide
     * @return Fichefrais
     */
    public function setMontantvalide($montantvalide)
    {
        $this->montantvalide = $montantvalide;

        return $this;
    }

    /**
     * Get montantvalide
     *
     * @return string 
     */
    public function getMontantvalide()
    {
        return $this->montantvalide;
    }

    /**
     * Set datemodif
     *
     * @param \DateTime $datemodif
     * @return Fichefrais
     */
    public function setDatemodif($datemodif)
    {
        $this->datemodif = $datemodif;

        return $this;
    }

    /**
     * Get datemodif
     *
     * @return \DateTime 
     */
    public function getDatemodif()
    {
        return $this->datemodif;
    }

    /**
     * Set idutilisateur
     *
     * @param \AD\GsbBundle\Entity\Utilisateur $idutilisateur
     * @return Fichefrais
     */
    public function setIdutilisateur(\AD\GsbBundle\Entity\Utilisateur $idutilisateur = null)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return \AD\GsbBundle\Entity\Utilisateur 
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * Set idetat
     *
     * @param \AD\GsbBundle\Entity\Etat $idetat
     * @return Fichefrais
     */
    public function setIdetat(\AD\GsbBundle\Entity\Etat $idetat = null)
    {
        $this->idetat = $idetat;

        return $this;
    }

    /**
     * Get idetat
     *
     * @return \AD\GsbBundle\Entity\Etat 
     */
    public function getIdetat()
    {
        return $this->idetat;
    }
}
