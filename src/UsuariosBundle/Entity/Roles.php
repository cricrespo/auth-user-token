<?php

namespace UsuariosBundle\Entity;

/**
 * Roles
 */
class Roles
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="Roles")
     * @ORM\JoinColumn(name="users_id", referencedColumnName="id")
     */

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
     * Set name
     *
     * @param string $name
     *
     * @return Roles
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

