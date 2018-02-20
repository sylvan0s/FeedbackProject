<?php

namespace FeedBackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collaborateurs
 *
 * @ORM\Table(name="collaborateurs")
 * @ORM\Entity(repositoryClass="FeedBackBundle\Repository\CollaborateursRepository")
 */
class Collaborateurs
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
     * @var int
     *
     * @ORM\Column(name="id_team_manager", type="integer", unique=true)
     */
    private $idTeamManager;

    /**
     * @var int
     *
     * @ORM\Column(name="id_client", type="integer", unique=true)
     */
    private $idClient;


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
     * @return Collaborateurs
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
     * @return Collaborateurs
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

    /**
     * Set idTeamManager
     *
     * @param integer $idTeamManager
     *
     * @return Collaborateurs
     */
    public function setIdTeamManager($idTeamManager)
    {
        $this->idTeamManager = $idTeamManager;

        return $this;
    }

    /**
     * Get idTeamManager
     *
     * @return int
     */
    public function getIdTeamManager()
    {
        return $this->idTeamManager;
    }

    /**
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return Collaborateurs
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}

