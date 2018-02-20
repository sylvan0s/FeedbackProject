<?php

namespace FeedBackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TM
 *
 * @ORM\Table(name="t_m")
 * @ORM\Entity(repositoryClass="FeedBackBundle\Repository\TMRepository")
 */
class TM
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", unique=true)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="id_commercial", type="integer", unique=true)
     */
    private $idCommercial;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return TM
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idCommercial
     *
     * @param integer $idCommercial
     *
     * @return TM
     */
    public function setIdCommercial($idCommercial)
    {
        $this->idCommercial = $idCommercial;

        return $this;
    }

    /**
     * Get idCommercial
     *
     * @return int
     */
    public function getIdCommercial()
    {
        return $this->idCommercial;
    }
}

