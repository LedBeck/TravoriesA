<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Experiencia
 *
 * @ORM\Table(name="experiencia")
 * @ORM\Entity
 */
class Experiencia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idexperiencia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idexperiencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaInicio", type="string", length=45, nullable=true)
     */
    private $fechainicio;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaFin", type="string", length=45, nullable=true)
     */
    private $fechafin;

    /**
     * @var string
     *
     * @ORM\Column(name="idioma", type="string", length=45, nullable=true)
     */
    private $idioma;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=45, nullable=true)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoDeViaje", type="string", length=45, nullable=true)
     */
    private $tipodeviaje;

    /**
     * @var string
     *
     * @ORM\Column(name="conQuienViajar", type="string", length=500, nullable=true)
     */
    private $conquienviajar;

    /**
     * @var string
     *
     * @ORM\Column(name="queHacer", type="string", length=500, nullable=true)
     */
    private $quehacer;

    /**
     * @var string
     *
     * @ORM\Column(name="lugaresVisitados", type="string", length=500, nullable=true)
     */
    private $lugaresvisitados;

    /**
     * @var string
     *
     * @ORM\Column(name="viajeExperiencia", type="text", nullable=true)
     */
    private $viajeexperiencia;

    /**
     * @var string
     *
     * @ORM\Column(name="husoHorario", type="string", length=200, nullable=true)
     */
    private $husohorario;

    /**
     * @var string
     *
     * @ORM\Column(name="religion", type="string", length=200, nullable=true)
     */
    private $religion;

    /**
     * @var string
     *
     * @ORM\Column(name="platosTipicos", type="string", length=500, nullable=true)
     */
    private $platostipicos;

    /**
     * @var string
     *
     * @ORM\Column(name="queLlevarse", type="string", length=500, nullable=true)
     */
    private $quellevarse;

    /**
     * @var string
     *
     * @ORM\Column(name="animalesZona", type="string", length=500, nullable=true)
     */
    private $animaleszona;

    /**
     * @var string
     *
     * @ORM\Column(name="vacunas", type="string", length=45, nullable=true)
     */
    private $vacunas;

    /**
     * @var string
     *
     * @ORM\Column(name="consejos", type="string", length=200, nullable=true)
     */
    private $consejos;

    /**
     * @var string
     *
     * @ORM\Column(name="creacion", type="string", length=45, nullable=true)
     */
    private $creacion;

    /**
     * @var string
     *
     * @ORM\Column(name="modificacion", type="string", length=45, nullable=true)
     */
    private $modificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="punto", type="string", length=45, nullable=true)
     */
    private $punto;

    /**
     * @var string
     *
     * @ORM\Column(name="fotoPortada", type="string", length=45, nullable=true)
     */
    private $fotoportada;


    /**
     * Set idexperiencia
     *
     * @param integer $idexperiencia
     * @return Experiencia
     */
    public function setIdexperiencia($idexperiencia)
    {
        $this->idexperiencia = $idexperiencia;
    
        return $this;
    }

    /**
     * Get idexperiencia
     *
     * @return integer 
     */
    public function getIdexperiencia()
    {
        return $this->idexperiencia;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     * @return Experiencia
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;
    
        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set fechainicio
     *
     * @param string $fechainicio
     * @return Experiencia
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;
    
        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return string 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param string $fechafin
     * @return Experiencia
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;
    
        return $this;
    }

    /**
     * Get fechafin
     *
     * @return string 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set idioma
     *
     * @param string $idioma
     * @return Experiencia
     */
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;
    
        return $this;
    }

    /**
     * Get idioma
     *
     * @return string 
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return Experiencia
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;
    
        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set tipodeviaje
     *
     * @param string $tipodeviaje
     * @return Experiencia
     */
    public function setTipodeviaje($tipodeviaje)
    {
        $this->tipodeviaje = $tipodeviaje;
    
        return $this;
    }

    /**
     * Get tipodeviaje
     *
     * @return string 
     */
    public function getTipodeviaje()
    {
        return $this->tipodeviaje;
    }

    /**
     * Set conquienviajar
     *
     * @param string $conquienviajar
     * @return Experiencia
     */
    public function setConquienviajar($conquienviajar)
    {
        $this->conquienviajar = $conquienviajar;
    
        return $this;
    }

    /**
     * Get conquienviajar
     *
     * @return string 
     */
    public function getConquienviajar()
    {
        return $this->conquienviajar;
    }

    /**
     * Set quehacer
     *
     * @param string $quehacer
     * @return Experiencia
     */
    public function setQuehacer($quehacer)
    {
        $this->quehacer = $quehacer;
    
        return $this;
    }

    /**
     * Get quehacer
     *
     * @return string 
     */
    public function getQuehacer()
    {
        return $this->quehacer;
    }

    /**
     * Set lugaresvisitados
     *
     * @param string $lugaresvisitados
     * @return Experiencia
     */
    public function setLugaresvisitados($lugaresvisitados)
    {
        $this->lugaresvisitados = $lugaresvisitados;
    
        return $this;
    }

    /**
     * Get lugaresvisitados
     *
     * @return string 
     */
    public function getLugaresvisitados()
    {
        return $this->lugaresvisitados;
    }

    /**
     * Set viajeexperiencia
     *
     * @param string $viajeexperiencia
     * @return Experiencia
     */
    public function setViajeexperiencia($viajeexperiencia)
    {
        $this->viajeexperiencia = $viajeexperiencia;
    
        return $this;
    }

    /**
     * Get viajeexperiencia
     *
     * @return string 
     */
    public function getViajeexperiencia()
    {
        return $this->viajeexperiencia;
    }

    /**
     * Set husohorario
     *
     * @param string $husohorario
     * @return Experiencia
     */
    public function setHusohorario($husohorario)
    {
        $this->husohorario = $husohorario;
    
        return $this;
    }

    /**
     * Get husohorario
     *
     * @return string 
     */
    public function getHusohorario()
    {
        return $this->husohorario;
    }

    /**
     * Set religion
     *
     * @param string $religion
     * @return Experiencia
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;
    
        return $this;
    }

    /**
     * Get religion
     *
     * @return string 
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * Set platostipicos
     *
     * @param string $platostipicos
     * @return Experiencia
     */
    public function setPlatostipicos($platostipicos)
    {
        $this->platostipicos = $platostipicos;
    
        return $this;
    }

    /**
     * Get platostipicos
     *
     * @return string 
     */
    public function getPlatostipicos()
    {
        return $this->platostipicos;
    }

    /**
     * Set quellevarse
     *
     * @param string $quellevarse
     * @return Experiencia
     */
    public function setQuellevarse($quellevarse)
    {
        $this->quellevarse = $quellevarse;
    
        return $this;
    }

    /**
     * Get quellevarse
     *
     * @return string 
     */
    public function getQuellevarse()
    {
        return $this->quellevarse;
    }

    /**
     * Set animaleszona
     *
     * @param string $animaleszona
     * @return Experiencia
     */
    public function setAnimaleszona($animaleszona)
    {
        $this->animaleszona = $animaleszona;
    
        return $this;
    }

    /**
     * Get animaleszona
     *
     * @return string 
     */
    public function getAnimaleszona()
    {
        return $this->animaleszona;
    }

    /**
     * Set vacunas
     *
     * @param string $vacunas
     * @return Experiencia
     */
    public function setVacunas($vacunas)
    {
        $this->vacunas = $vacunas;
    
        return $this;
    }

    /**
     * Get vacunas
     *
     * @return string 
     */
    public function getVacunas()
    {
        return $this->vacunas;
    }

    /**
     * Set consejos
     *
     * @param string $consejos
     * @return Experiencia
     */
    public function setConsejos($consejos)
    {
        $this->consejos = $consejos;
    
        return $this;
    }

    /**
     * Get consejos
     *
     * @return string 
     */
    public function getConsejos()
    {
        return $this->consejos;
    }

    /**
     * Set creacion
     *
     * @param string $creacion
     * @return Experiencia
     */
    public function setCreacion($creacion)
    {
        $this->creacion = $creacion;
    
        return $this;
    }

    /**
     * Get creacion
     *
     * @return string 
     */
    public function getCreacion()
    {
        return $this->creacion;
    }

    /**
     * Set modificacion
     *
     * @param string $modificacion
     * @return Experiencia
     */
    public function setModificacion($modificacion)
    {
        $this->modificacion = $modificacion;
    
        return $this;
    }

    /**
     * Get modificacion
     *
     * @return string 
     */
    public function getModificacion()
    {
        return $this->modificacion;
    }

    /**
     * Set punto
     *
     * @param string $punto
     * @return Experiencia
     */
    public function setPunto($punto)
    {
        $this->punto = $punto;
    
        return $this;
    }

    /**
     * Get punto
     *
     * @return string 
     */
    public function getPunto()
    {
        return $this->punto;
    }

    /**
     * Set fotoportada
     *
     * @param string $fotoportada
     * @return Experiencia
     */
    public function setFotoportada($fotoportada)
    {
        $this->fotoportada = $fotoportada;
    
        return $this;
    }

    /**
     * Get fotoportada
     *
     * @return string 
     */
    public function getFotoportada()
    {
        return $this->fotoportada;
    }
}