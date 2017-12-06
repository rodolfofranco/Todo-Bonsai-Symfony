<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Usuario;



/**
 * Entidad Wishlist. Tabla Wishlist con atributos: id:int(11), usuario_id:int(11) (Proviene de la relación 1:1 con la entidad Usuario)
 *
 * @ORM\Table(name="wishlist")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WishlistRepository")
 */
class Wishlist
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
     * Función que retorna el id de la Wishlist
     * 
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * One Wishlist has One Usuario.
     * @ORM\OneToOne(targetEntity="Usuario", inversedBy="wishlist")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;
    
    /**
     * Función que declara el id del Usuario asociado a la Wishlist
     */
    public function setUsuario(Usuario $usuario){
        
        //Aqui se le setea el id del usuario al carrito
       $this->usuario = $usuario;
        
    }
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|Producto[]
     * @ORM\ManyToMany(targetEntity="Producto", mappedBy="wishlist")
     */
    private $producto;
    
    
    /**
     * Constructor para la entidad Wishlist donde se genera un array de Productos en cada Wishlist
     */
    public function __construct()
    {
        $this->producto = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Función que elimina un Producto de la Wishlist (Se manda como parámetro el id del Producto a eliminar)
     * 
     * @param Producto $producto
     */
    public function removeProducto(Producto $producto)
    {
        if (false === $this->producto->contains($producto)) {
            return;
        }
        $this->producto->removeElement($producto);
        $producto->removeWishlist($this);
    }

    /**
     * Función que agrega un Producto a la Wishlist (Se manda como parámetro el id del Producto a agregar)
     * 
     * @param Producto $producto
     */
    public function addProducto(Producto $producto)
    {
        if (true === $this->producto->contains($producto)) {
            return;
        }
        $this->producto->add($producto);
        $producto->addWishlist($this);
    }
    
    /**
     * Función que retorna todos los Productos de la Wishlist
     * 
     * @return \Doctrine\Common\Collections\ArrayCollection|Producto[]
     */
    public function getProductos()
    {
        return $this->producto;
    }

}

