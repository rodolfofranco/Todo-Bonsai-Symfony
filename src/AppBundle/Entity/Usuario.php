<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use AppBundle\Entity\Orden;


/**
 * Entidad Usuario. Tabla Usuario con atributos: id:int(11), correo:varchar(255), clave:varchar(255), nombre:varchar(255), direccion:longtext,
 * pais:varchar(255)
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 */
class Usuario implements UserInterface , \Serializable
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
     * One Usuario has One Wishlist.
     * @ORM\OneToOne(targetEntity="Wishlist", mappedBy="usuario")
     */
    private $wishlist;
    
    /**
     * One Usuario has One Carrito.
     * @ORM\OneToOne(targetEntity="Carrito", mappedBy="usuario")
     */
    private $carrito;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=255, unique=true)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=255)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=255)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="text")
     */
    private $direccion;

    /**
     * @ORM\OneToMany(targetEntity="Orden", mappedBy="usuario" , orphanRemoval=true)
     */
    private $orden;
    
    /**
     * Constructor para la entidad Usuario donde se genera un array de Ordenes para cada Usuario
     */
    public function __construct()
    {
        $this->orden = new  \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Función que retorna el id del Usuario
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
     * Función que declara el correo del Usuario
     * 
     * Set correo
     *
     * @param string $correo
     *
     * @return Usuario
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Función que retorna el correo del Usuario
     * 
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }
    
    /**
     * Función que declara el pais del Usuario
     * 
     * Set pais
     *
     * @param string $pais
     *
     * @return Usuario
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Función que retorna el pais del Usuario
     * 
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Función que declara la clave del Usuario
     * 
     * Set clave
     *
     * @param string $clave
     *
     * @return Usuario
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Función que retorna la clave del Usuario
     * 
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Función que declara el nombre del Usuario
     * 
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Función que retorna el nombre del Usuario
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
     * Función que declara la dirección del Usuario
     * 
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Usuario
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Función que retorna la dirección del Usuario
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
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;
    
    /**
     * Función que retorna la clave encriptada del Usuario
     */ 
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * Función que declara la clave encriptada del Usuario
     */ 
    public function setPlainPassword($clave)
    {
        $this->plainPassword = $clave;
    }
    
    
     public function getSalt()
    {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }
    
    /**
     * Función que retorna las Ordenes del Usuario
     * 
     * @return \Doctrine\Common\Collections\ArrayCollection|Orden[]
     */
    public function getOrders()
    {
        return $this->orden;
    }
    
    
    /**
     * Función que retorna el rol del Usuario
     */ 
    public function getRoles() {
    switch ($this->roles) {
        case 1:
            $role =  'ROLE_USER';
            break;

        case 2:
            $role =  'ROLE_ADMIN';
            break;

        case 3:
            $role =  'ROLE_SUPER_ADMIN';
            break;

        default:
            $role = 'ROLE_USER';
            break;
        }

    return array($role);
    }
    
    /**
     * Función que declara el rol del Usuario
     */ 
    public function setRoles($roles) {
        $this->roles = $roles;
        return $this;
    }
    
    /**
     * Función que retorna el Usuario ingresado
     */ 
     public function getUsername(){
         // method's body
         return $this->correo;
     }
     
     /**
     * Función que borra las credenciales del Usuario
     */
     public function eraseCredentials(){
         // method's body
     }
     
     /**
     * Función que retorna la clave del Usuario
     */
     public function getPassword(){
         // method´s body
         return $this->clave;
     }
    
    
    /**
     * Función que retorna los datos del Usuario ingresado
     */
     /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
    
     /**
      * Función que elimina la Orden del Usuario
      * 
     * @param Orden $orden
     */
    public function removeOrden(Orden $orden){
        
        if (false === $this->orden->contains($orden)) {
            return;
        }
        $this->orden->removeElement($orden);
        $orden->setUsuario(null);
    }
}

