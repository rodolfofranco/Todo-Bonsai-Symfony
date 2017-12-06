<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Carrito;

/**
 * Entidad Producto. Tabla Producto con atributos: id:int(11), nombre:varchar(255), precio:decimal(7,2), descripcion:longtext,
 * link:longtext, categoria:longtext
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductoRepository")
 */
class Producto
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=7, scale=2)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="text")
     */
    private $categoria;
    
    
    /**
     * 
     * @var string
     * 
     * @ORM\Column(name="link", type="text")
     */
    private $linkImagen;


    /**
     * Función que retorna el link de la imágen del Producto
     * 
     * Get link
     * 
     * @return string
     */
    public function getLink(){
        return $this->linkImagen;
    }
    
    /**
     * Función que retorna el id del Producto
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
     * Función que declara el nombre del Producto
     * 
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Función que retorna el nombre del Producto
     * 
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Función que declara el precio del Producto
     * 
     * Set precio
     *
     * @param string $precio
     *
     * @return Producto
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }
    
    /**
     * Función que declara el link del Producto
     * 
     * Set link
     *
     * @param string $linkImagen
     *
     * @return Producto
     */
    public function setLink($linkImagen)
    {
        $this->linkImagen = $linkImagen;

        return $this;
    }
    
    /**
     * Función que retorna la categoria del Producto
     * 
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Función que declara la categoria del Producto
     * 
     * Set categoria
     *
     * @param string $categoria
     *
     * @return string
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Función que retorna el precio del Producto
     * 
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Función que declara la descripción del Producto
     * 
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Producto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Función que retorna la descripción del Producto
     * 
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|Wishlist[]
     * @ORM\ManyToMany(targetEntity="Wishlist", inversedBy="producto")
     * @ORM\JoinTable(
     *  name="producto_wishlist",
     *  joinColumns={
     *      @ORM\JoinColumn(name="id_producto", referencedColumnName="id")
     *  },
     *  inverseJoinColumns={
     *      @ORM\JoinColumn(name="id_wishlist", referencedColumnName="id")
     *  }
     * )
     */
    private $wishlist;

    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|Carrito[]
     * @ORM\ManyToMany(targetEntity="Carrito", inversedBy="producto")
     * @ORM\JoinTable(
     *  name="producto_carrito",
     *  joinColumns={
     *      @ORM\JoinColumn(name="id_producto", referencedColumnName="id")
     *  },
     *  inverseJoinColumns={
     *      @ORM\JoinColumn(name="id_carrito", referencedColumnName="id")
     *  }
     * )
     */
    private $carrito;
    
     /**
     * @var \Doctrine\Common\Collections\ArrayCollection|Orden[]
     * @ORM\ManyToMany(targetEntity="Orden", mappedBy="producto")
     */
    private $orden;


    /**
     * Constructor para la entidad Producto donde se genera un array de Carrito, WishList y Orden
     */
    public function __construct()
    {
        $this->carrito = new \Doctrine\Common\Collections\ArrayCollection();
        $this->wishlist = new \Doctrine\Common\Collections\ArrayCollection();
        $this->orden = new \Doctrine\Common\Collections\ArrayCollection();
        
    }
    
     /**
      * Función que elimina el Producto del Carrito (Se manda como parámetro el id del Carrito en donde se eliminará el Producto)
      * 
     * @param Carrito $carrito
     */
    public function removeCarrito(Carrito $carrito)
    {
        if (false === $this->carrito->contains($carrito)) {
            return;
        }
        $this->carrito->removeElement($carrito);
        $carrito->removeProducto($this);
    }

    /**
     * Función que agrega Producto al Carrito (Se manda como parámetro el id del Carrito en donde se agregará el Producto)
     * 
     * @param Carrito $carrito
     */
    public function addCarrito(Carrito $carrito)
    {
        if (true === $this->carrito->contains($carrito)) {
            return;
        }
        $this->carrito->add($carrito);
        $carrito->addProducto($this);
    }
    
     /**
      * Función que elimina el Producto de la Wishlist (Se manda como parámetro el id de la Wishlist en donde se eliminará el Producto)
      * 
     * @param Wishlist $wishlist
     */
    public function removeWishlist(Wishlist $wishlist)
    {
        if (false === $this->wishlist->contains($wishlist)) {
            return;
        }
        $this->wishlist->removeElement($wishlist);
        $wishlist->removeProducto($this);
    }

    /**
     * Función que agrega el Producto en la Wishlist (Se manda como parámetro el id de la Wishlist en donde se agregará el Producto)
     * 
     * @param Wishlist $wishlist
     */
    public function addWishlist(Wishlist $wishlist)
    {
        if (true === $this->wishlist->contains($wishlist)) {
            return;
        }
        $this->wishlist->add($wishlist);
        $wishlist->addProducto($this);
    }
    
     /**
      * Función que elimina el Producto de la Orden (Se manda como parámetro el id de la Orden en donde se eliminará el Producto)
      * 
     * @param Orden $orden
     */
    public function removeOrden(Orden $orden)
    {
        if (false === $this->orden->contains($orden)) {
            return;
        }
        $this->orden->removeElement($orden);
        $orden->removeProducto($this);
    }

    /**
     * Función que agrega el Producto en la Orden (Se manda como parámetro el id de la Orden en donde se agregrá el Producto)
     * 
     * @param Orden $orden
     */
    public function addOrden(Orden $orden)
    {
        if (true === $this->orden->contains($orden)) {
            return;
        }
        $this->orden->add($orden);
        $orden->addProducto($this);
    }
}

