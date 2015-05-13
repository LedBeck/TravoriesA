<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Galeria
 *
 * @ORM\Table(name="galeria")
 * @ORM\Entity
 */
class Galeria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idgalerias", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgalerias;

    /**
     * @var string
     *
     * @ORM\Column(name="images", type="text", nullable=false)
     */
    private $images;

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
     * Get idgalerias
     *
     * @return integer 
     */
    public function getIdgalerias()
    {
        return $this->idgalerias;
    }

    /**
     * Set images
     *
     * @param string $images
     * @return Galeria
     */
    public function setImages($images)
    {
        $this->images = $images;
    
        return $this;
    }

    /**
     * Get images
     *
     * @return string 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set idexperiencia
     *
     * @param \Experiencia $idexperiencia
     * @return Galeria
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