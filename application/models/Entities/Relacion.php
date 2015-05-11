<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Relacion
 *
 * @ORM\Table(name="relacion")
 * @ORM\Entity
 */
class Relacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iduser1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $iduser1;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduser2", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $iduser2;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=false)
     */
    private $status;


    /**
     * Set iduser1
     *
     * @param integer $iduser1
     * @return Relacion
     */
    public function setIduser1($iduser1)
    {
        $this->iduser1 = $iduser1;
    
        return $this;
    }

    /**
     * Get iduser1
     *
     * @return integer 
     */
    public function getIduser1()
    {
        return $this->iduser1;
    }

    /**
     * Set iduser2
     *
     * @param integer $iduser2
     * @return Relacion
     */
    public function setIduser2($iduser2)
    {
        $this->iduser2 = $iduser2;
    
        return $this;
    }

    /**
     * Get iduser2
     *
     * @return integer 
     */
    public function getIduser2()
    {
        return $this->iduser2;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Relacion
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}