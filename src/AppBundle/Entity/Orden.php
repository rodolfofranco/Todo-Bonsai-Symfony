<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Usuario;
use AppBundle\Entity\Producto;


/**
 * Entidad Orden. Tabla Orden con atributos: id:int(11), usuario_id:int(11) (Proviene de la relación 1:N con la entidad Usuario),
 * direccion:longtext, fecha:longtext, montoTotal:longtext, numeroTarjeta: bigint(20), tipoPago:longtext
 *
 * @ORM\Table(name="orden")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrdenRepository")
 */
class Orden
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
     * @var string
     * 
     * @ORM\Column(name="direccion", type="text")
     * 
     */
     private $direccion;
     
     
    /**
     * @var string
     * 
     * @ORM\Column(name="fecha", type="text")
     * 
     */
     private $fecha;
     
      /**
     * @var int
     * 
     * @ORM\Column(name="numeroTarjeta", type="bigint")
     * 
     */
     private $numeroTarjeta;
     
     /**
     * @var string
     * 
     * @ORM\Column(name="tipoPago", type="text")
     * 
     */
     private $tipoPago;
     
     
     
     
    /**
     * @var string
     * 
     * @ORM\Column(name="montoTotal", type="text")
     * 
     */
     private $montoTotal;
     
    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="orden")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;
    
    
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|Producto[]
     * @ORM\ManyToMany(targetEntity="Producto", inversedBy="orden")
     * @ORM\JoinTable(
     *  name="orden_producto",
     *  joinColumns={
     *      @ORM\JoinColumn(name="id_orden", referencedColumnName="id")
     *  },
     *  inverseJoinColumns={
     *      @ORM\JoinColumn(name="id_producto", referencedColumnName="id")
     *  }
     * )
     */
    private $producto;
    
    /**
     * Constructor para la entidad Orden donde se genera un array de Productos para cada Orden
     */
     public function __construct()
    {
        $this->producto = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Función que retorna el id de la Orden
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
     /**
      * Función que elimina un Producto de la Orden (Se manda como parámetro el id del Producto a ser eliminado)
      * 
     * @param Producto $producto
     */
    public function removeProducto(Producto $producto)
    {
        if (false === $this->producto->contains($producto)) {
            return;
        }
        $this->producto->removeElement($producto);
        $producto->removeOrden($this);
    }

    /**
     * Función que agrega un Producto a la Orden (Se manda como parámetro el id del Producto a ser agregado)
     * 
     * @param Producto $producto
     */
    public function addProducto(Producto $producto)
    {
        if (true === $this->producto->contains($producto)) {
            return;
        }
        $this->producto->add($producto);
        $producto->addOrden($this);
    }
    
    
    

    /**
     * Función que declara la dirección de la Orden
     * 
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Orden
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Función que retorna la dirección de la Orden
     * 
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Función que declara la fecha de la Orden
     * 
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Orden
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Función que retorna la fecha de la Orden
     * 
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Función que declara el número de tarjeta del cliente a la Orden
     * 
     * Set numeroTarjeta
     *
     * @param integer $numeroTarjeta
     *
     * @return Orden
     */
    public function setNumeroTarjeta($numeroTarjeta)
    {
        $this->numeroTarjeta = $numeroTarjeta;

        return $this;
    }

    /**
     * Función que retorna el número de tarjeta del cliente de la Orden
     * 
     * Get numeroTarjeta
     *
     * @return integer
     */
    public function getNumeroTarjeta()
    {
        return $this->numeroTarjeta;
    }

    /**
     * Función que declara el tipo de pago de la Orden
     * 
     * Set tipoPago
     *
     * @param string $tipoPago
     *
     * @return Orden
     */
    public function setTipoPago($tipoPago)
    {
        $this->tipoPago = $tipoPago;

        return $this;
    }

    /**
     * Función que retorna el tipo de pago de la Orden
     * 
     * Get tipoPago
     *
     * @return string
     */
    public function getTipoPago()
    {
        return $this->tipoPago;
    }

    /**
     * Función que declara el monto total de la Orden
     * 
     * Set montoTotal
     *
     * @param string $montoTotal
     *
     * @return Orden
     */
    public function setMontoTotal($montoTotal)
    {
        $this->montoTotal = $montoTotal;

        return $this;
    }

    /**
     * Función que retorna el monto total de la Orden
     * 
     * Get montoTotal
     *
     * @return string
     */
    public function getMontoTotal()
    {
        return $this->montoTotal;
    }

    /**
     * Función que declara el Usuario asociado a la Orden
     * 
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Orden
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Función que retorna el Usuario asociado a la Orden
     * 
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
    
     /**
      * Función que declara el id del Usuario asociado a la Orden
      * 
     * Set usuario
     *
     * @param integer $usuario
     *
     * @return Orden
     */
    public function setUsuarioId($Usuario)
    {
        $this->usuarioId = $usuario;

        return $this;
    }
    
    
    /**
     * Función que retorna los Productos de la Orden
     * 
     * @return \Doctrine\Common\Collections\ArrayCollection|Producto[]
     */
    public function getProductos()
    {
        return $this->producto;
    }
    
}
