<?php

namespace Uknow\UtilisateurBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Compte
 *
 * @ORM\Table(name="compte")
 * @ORM\Entity
 */
class Compte extends BaseUser
{
    /**
     * @ORM\Column( type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $this->niveauChapitre = null;
        $this->voixChapitre = null;
        $this->donneesSauvegardees = null;
        $this->donneesEvaluees = null;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_chapitre", type="text", nullable=true)
     */
    protected $niveauChapitre;

    /**
     * @var string
     *
     * @ORM\Column(name="voix_chapitre", type="text", nullable=true)
     */
    protected $voixChapitre;

    /**
     * @var string
     *
     * @ORM\Column(name="donnees_sauvegardees", type="text", nullable=true)
     * @Assert\Null()
     */
    protected $donneesSauvegardees;

    /**
     * @var string
     *
     * @ORM\Column(name="donnees_evaluees", type="text", nullable=true)
     * @Assert\Null()
     */
    protected $donneesEvaluees;

    /**
     * @var string
     *
     * @ORM\Column(name="pages_ouvertes", type="text", nullable=true)
     * @Assert\Null()
     */
    protected $pagesOuvertes;

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
     * Set niveauChapitre
     *
     * @param string $niveauChapitre
     * @return Compte
     */
    public function setNiveauChapitre($niveauChapitre)
    {
        $this->niveauChapitre = $niveauChapitre;

        return $this;
    }

    /**
     * Get niveauChapitre
     *
     * @return string
     */
    public function getNiveauChapitre()
    {
        return $this->niveauChapitre;
    }

    /**
     * Set voixChapitre
     *
     * @param string $voixChapitre
     * @return Compte
     */
    public function setVoixChapitre($voixChapitre)
    {
        $this->voixChapitre = $voixChapitre;

        return $this;
    }

    /**
     * Get voixChapitre
     *
     * @return string
     */
    public function getVoixChapitre()
    {
        return $this->voixChapitre;
    }

    /**
     * Set donneesSauvegardees
     *
     * @param string $donneesSauvegardees
     * @return Compte
     */
    public function setDonneesSauvegardees($donneesSauvegardees)
    {
        $this->donneesSauvegardees = $donneesSauvegardees;

        return $this;
    }

    /**
     * Get donneesSauvegardees
     *
     * @return string
     */
    public function getDonneesSauvegardees()
    {
        return $this->donneesSauvegardees;
    }

    /**
     * Set donneesEvaluees
     *
     * @param string $donneesEvaluees
     * @return Compte
     */
    public function setDonneesEvaluees($donneesEvaluees)
    {
        $this->donneesEvaluees = $donneesEvaluees;

        return $this;
    }

    /**
     * Get donneesEvaluees
     *
     * @return string
     */
    public function getDonneesEvaluees()
    {
        return $this->donneesEvaluees;
    }

    /**
     * Set pagesOuvertes
     *
     * @param string $pagesOuvertes
     * @return Compte
     */
    public function setPagesOuvertes($pagesOuvertes)
    {
        $this->pagesOuvertes = $pagesOuvertes;

        return $this;
    }

    /**
     * Get pagesOuvertes
     *
     * @return string
     */
    public function getPagesOuvertes()
    {
        return $this->pagesOuvertes;
    }
}
