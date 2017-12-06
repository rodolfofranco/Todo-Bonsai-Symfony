<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Usuario;
use AppBundle\Entity\Producto;

/**
 * Entidad Carrito. Tabla Carrito con atributos: id: int(11), usuario_id:int(11) (Proviene de la relacion 1:N con la entidad Usuario)
 *
 *
 * @ORM\Table(name="carrito")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CarritoRepository")
 */
class Carrito
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
     * @var \Doctrine\Common\Collections\ArrayCollection|Producto[]
     * @ORM\ManyToMany(targetEntity="Producto", mappedBy="carrito")
     */
    private $producto;


    /**
     * Constructor para la entidad Carrito donde se genera un array de Productos en cada Carrito
     */
    public function __construct()
    {
        $this->producto = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    
    /**
     * One Carrito has One Usuario.
     * @ORM\OneToOne(targetEntity="Usuario", inversedBy="carrito")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;
    
    /**
     * Función que setea el id del Usuario al Carrito (Se manda como parámetro el id del Usuario)
     */ 
    public function setUsuario(Usuario $usuario){
        
        //Aqui se le setea el id del usuario al carrito
       $this->usuario = $usuario;
        
    }

    /**
     * Función que retorna el id del Usuario dueño del Carrito
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Función que retorna los Productos de un Carrito
     * 
     * @return \Doctrine\Common\Collections\ArrayCollection|Producto[]
     */
    public function getProductos()
    {
        return $this->producto;
    }
    
    /**
     * Función que elimina un Producto del Carrito (Se manda como parámetro el id del Producto a eliminar)
     * 
     * @param Producto $producto
     */
    public function removeProducto(Producto $producto)
    {
        if (false === $this->producto->contains($producto)) {
            return;
        }
        $this->producto->removeElement($producto);
        $producto->removeCarrito($this);
    }

    /**
     * Función que agrega un Producto al Carrito (Se manda como parámetro el id del Producto a agregar)
     * 
     * @param Producto $producto
     */
    public function addProducto(Producto $producto)
    {
        if (true === $this->producto->contains($producto)) {
            return;
        }
        $this->producto->add($producto);
        $producto->addCarrito($this);
    }
}

