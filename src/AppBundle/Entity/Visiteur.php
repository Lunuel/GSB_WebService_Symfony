<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visiteur
 *
 * @ORM\Table(name="visiteur")
 * @ORM\Entity
 */
class Visiteur
{
    /**
     * @var string
     *
     * @ORM\Column(name="vis_nom", type="string", length=50, nullable=true)
     */
    private $visNom;

    /**
     * @var string
     *
     * @ORM\Column(name="vis_prenom", type="string", length=100, nullable=true)
     */
    private $visPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="vis_adresse", type="string", length=100, nullable=true)
     */
    private $visAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="vis_cp", type="string", length=10, nullable=true)
     */
    private $visCp;

    /**
     * @var string
     *
     * @ORM\Column(name="vis_ville", type="string", length=60, nullable=true)
     */
    private $visVille;

    /**
     * @var string
     *
     * @ORM\Column(name="vis_login", type="string", length=25, nullable=true)
     */
    private $visLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="vis_mdp", type="string", length=50, nullable=true)
     */
    private $visMdp;

    /**
     * @var string
     *
     * @ORM\Column(name="vis_matricule", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $visMatricule;



    /**
     * Set visNom
     *
     * @param string $visNom
     *
     * @return Visiteur
     */
    public function setVisNom($visNom)
    {
        $this->visNom = $visNom;

        return $this;
    }

    /**
     * Get visNom
     *
     * @return string
     */
    public function getVisNom()
    {
        return $this->visNom;
    }

    /**
     * Set visPrenom
     *
     * @param string $visPrenom
     *
     * @return Visiteur
     */
    public function setVisPrenom($visPrenom)
    {
        $this->visPrenom = $visPrenom;

        return $this;
    }

    /**
     * Get visPrenom
     *
     * @return string
     */
    public function getVisPrenom()
    {
        return $this->visPrenom;
    }

    /**
     * Set visAdresse
     *
     * @param string $visAdresse
     *
     * @return Visiteur
     */
    public function setVisAdresse($visAdresse)
    {
        $this->visAdresse = $visAdresse;

        return $this;
    }

    /**
     * Get visAdresse
     *
     * @return string
     */
    public function getVisAdresse()
    {
        return $this->visAdresse;
    }

    /**
     * Set visCp
     *
     * @param string $visCp
     *
     * @return Visiteur
     */
    public function setVisCp($visCp)
    {
        $this->visCp = $visCp;

        return $this;
    }

    /**
     * Get visCp
     *
     * @return string
     */
    public function getVisCp()
    {
        return $this->visCp;
    }

    /**
     * Set visVille
     *
     * @param string $visVille
     *
     * @return Visiteur
     */
    public function setVisVille($visVille)
    {
        $this->visVille = $visVille;

        return $this;
    }

    /**
     * Get visVille
     *
     * @return string
     */
    public function getVisVille()
    {
        return $this->visVille;
    }

    /**
     * Set visLogin
     *
     * @param string $visLogin
     *
     * @return Visiteur
     */
    public function setVisLogin($visLogin)
    {
        $this->visLogin = $visLogin;

        return $this;
    }

    /**
     * Get visLogin
     *
     * @return string
     */
    public function getVisLogin()
    {
        return $this->visLogin;
    }

    /**
     * Set visMdp
     *
     * @param string $visMdp
     *
     * @return Visiteur
     */
    public function setVisMdp($visMdp)
    {
        $this->visMdp = $visMdp;

        return $this;
    }

    /**
     * Get visMdp
     *
     * @return string
     */
    public function getVisMdp()
    {
        return $this->visMdp;
    }

    /**
     * Get visMatricule
     *
     * @return string
     */
    public function getVisMatricule()
    {
        return $this->visMatricule;
    }
}
