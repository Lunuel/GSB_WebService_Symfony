<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RapportVisite
 *
 * @ORM\Table(name="rapport_visite")
 * @ORM\Entity
 */
class RapportVisite
{
    /**
     * @var string
     *
     * @ORM\Column(name="rap_bilan", type="string", length=510, nullable=true)
     */
    private $rapBilan = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rap_dateVisite", type="date", nullable=true)
     */
    private $rapDatevisite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rap_dateRapport", type="date", nullable=true)
     */
    private $rapDaterapport;

    /**
     * @var integer
     *
     * @ORM\Column(name="rap_num", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $rapNum;

    /**
     * @var \AppBundle\Entity\Visiteur
     *

     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Visiteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vis_matricule", referencedColumnName="vis_matricule")
     * })
     */
    private $visMatricule;

    /**
     * @var \AppBundle\Entity\Praticien
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Praticien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pra_num", referencedColumnName="pra_num")
     * })
     */
    private $praticien;



    /**
     * Set rapBilan
     *
     * @param string $rapBilan
     *
     * @return RapportVisite
     */
    public function setRapBilan($rapBilan)
    {
        $this->rapBilan = $rapBilan;

        return $this;
    }

    /**
     * Get rapBilan
     *
     * @return string
     */
    public function getRapBilan()
    {
        return $this->rapBilan;
    }

    /**
     * Set rapDatevisite
     *
     * @param \DateTime $rapDatevisite
     *
     * @return RapportVisite
     */
    public function setRapDatevisite($rapDatevisite)
    {
        $this->rapDatevisite = $rapDatevisite;

        return $this;
    }

    /**
     * Get rapDatevisite
     *
     * @return \DateTime
     */
    public function getRapDatevisite()
    {
        return $this->rapDatevisite;
    }

    /**
     * Set rapDaterapport
     *
     * @param \DateTime $rapDaterapport
     *
     * @return RapportVisite
     */
    public function setRapDaterapport($rapDaterapport)
    {
        $this->rapDaterapport = $rapDaterapport;

        return $this;
    }

    /**
     * Get rapDaterapport
     *
     * @return \DateTime
     */
    public function getRapDaterapport()
    {
        return $this->rapDaterapport;
    }

    /**
     * Set rapNum
     *
     * @param integer $rapNum
     *
     * @return RapportVisite
     */
    public function setRapNum($rapNum)
    {
        $this->rapNum = $rapNum;

        return $this;
    }

    /**
     * Get rapNum
     *
     * @return integer
     */
    public function getRapNum()
    {
        return $this->rapNum;
    }

    /**
     * Set visMatricule
     *
     * @param \AppBundle\Entity\Visiteur $visMatricule
     *
     * @return RapportVisite
     */
    public function setVisMatricule(\AppBundle\Entity\Visiteur $visMatricule)
    {
        $this->visMatricule = $visMatricule;

        return $this;
    }

    /**
     * Get visMatricule
     *
     * @return \AppBundle\Entity\Visiteur
     */
    public function getVisMatricule()
    {
        return $this->visMatricule;
    }

    /**
     * Set praNum
     *
     * @param \AppBundle\Entity\Praticien $praNum
     *
     * @return RapportVisite
     */
    public function setPraticien(\AppBundle\Entity\Praticien $praticien= null)
    {
        $this->praticien = $praticien;

        return $this;
    }

    /**
     * Get praNum
     *
     * @return \AppBundle\Entity\Praticien
     */
    public function getPraticien()
    {
        return $this->praticien;
    }
}
