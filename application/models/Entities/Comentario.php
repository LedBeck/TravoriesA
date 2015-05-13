<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Comentario
 *
 * @ORM\Table(name="comentario")
 * @ORM\Entity
 */
class Comentario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcomentario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomentario;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarioText", type="text", nullable=false)
     */
    private $comentariotext;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="iduser")
     * })
     */
    private $iduser;

    /**
     * @var \Experiencia
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToOne(targetEntity="Experiencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idexperiencia", referencedColumnName="idexperiencia")
     * })
     */
    private $idexperiencia;


    /**
     * Get idcomentario
     *
     * @return integer 
     */
    public function getIdcomentario()
    {
        return $this->idcomentario;
    }

    /**
     * Set comentariotext
     *
     * @param string $comentariotext
     * @return Comentario
     */
    public function setComentariotext($comentariotext)
    {
        $this->comentariotext = $comentariotext;
    
        return $this;
    }

    /**
     * Get comentariotext
     *
     * @return string 
     */
    public function getComentariotext()
    {
        return $this->comentariotext;
    }

    /**
     * Set iduser
     *
     * @param \User $iduser
     * @return Comentario
     */
    public function setIduser(\User $iduser)
    {
        $this->iduser = $iduser;
    
        return $this;
    }

    /**
     * Get iduser
     *
     * @return \User 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set idexperiencia
     *
     * @param \Experiencia $idexperiencia
     * @return Comentario
     */
    public function setIdexperiencia(\Experiencia $idexperiencia)
    {
        $this->idexperiencia = $idexperiencia;
    
        return $this;
    }

    /**
     * Get idexperiencia
     *
     * @return \Experiencia 
     */
    public function getIdexperiencia()
    {
        return $this->idexperiencia;
    }
}