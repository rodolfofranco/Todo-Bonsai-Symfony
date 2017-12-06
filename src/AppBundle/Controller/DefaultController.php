<?php 

namespace AppBundle\Controller;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use AppBundle\Entity\Usuario;
use AppBundle\Entity\Producto;
use AppBundle\Entity\Carrito;
use AppBundle\Entity\Wishlist;
use AppBundle\Entity\Orden;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Clase donde se manejan las rutas y el manejo de los datos de la base de datos
 */ 
class DefaultController extends Controller
{
    
    
    
    
    /**
     * Ruta de la vista de Producto
     * 
     * @Route("/product", name="product") 
     */
    public function product(Request $request) //ESTE ES EL CONTROLADOR EN DONDE SE MANDA EL HTML Y SE MANEJA LA INFORMACION
    {
        
        $form = $this->createFormBuilder()
        ->add('correoLogin', TextType::class,[
        'label' => 'Correo',
        'required' => false,
        'label_attr' => [
            'class' => 'mdl-textfield__label' // Este aplica para el <label>
            ],
        'attr' => [
            'class' => 'mdl-textfield__input' // Este aplica para el <input>
            ]
        ]
        )
        ->add('clave' , PasswordType::class,[
            'label'=> 'Contraseña',
            'required' => false,
            'label_attr' => [
            'class' => 'mdl-textfield__label' // Este aplica para el <label>
            ],
        'attr' => [
            'class' => 'mdl-textfield__input' // Este aplica para el <input>
            ]
            ])
        ->add('submit', SubmitType::class,[
            'label' => 'Login' ,
            'attr' => [
                'class' => 'mdl-button'
                ]
            ])
        ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            //Logica para el Login de Usuario
            
            //Primero se obtiene el usuario y la clave ingresada
            $email = $form->getData()['correoLogin'];
            $password = $form->getData()['clave'];
            
            //Luego se busca en la base de datos primero si existe el correo ingresado
            $repository = $this->getDoctrine()->getRepository(Usuario::class);
            $user = $repository->findOneByCorreo($email);
            
              
            
            if (!$user) {
                //Si no existe el correo se debe mostrar un mensaje
                dump('El correo no existe');
            }
            else{
                //Si el correo existe, se busca ahora si la clave ingresada le corresponde a dicho correo
                $repository = $this->getDoctrine()
                ->getRepository(Usuario::class);
                $parameters = (array('correo' => $email, 'clave' => $password ));
            
            
            $query = $repository->createQueryBuilder('u')
                ->where('u.correo = :correo AND u.clave = :clave')
                ->setParameters($parameters)
                ->getQuery();
            
            $usuarioFinal = $query->getResult();
            
            if(!$usuarioFinal){
                //La clave no corresponde con el correo ingresado
                dump('Clave ingresada no valida');
                }
            else{
                //Se logea al usuario
                //Aqui se debe de ejecutar el codigo que asigna a el usuario ingresado una sesion
                //AQUI VA EL CODIGO QUE FALTA
                dump('Estas loggeado!');
                }
                 
            }
            
          
    }
    
    

    
    
 
        $repositoryP = $this->getDoctrine()->getRepository(Producto::class);
        $products = $repositoryP->findAll();
        dump($products);
        
        if (!$products) {
        throw $this->createNotFoundException(
            'No product found for id '
        );
    }
        
    /**
     *  create a task and give it some dummy data for this example
     */
        
        return $this->render('productos.html.twig',[
            'myForm' => $form->createView(),
            'products' => $products
        ]);
    }
    
    /**
     * Ruta para la vista Home 
     * 
     * @Route("/" , name="home")
     */
    public function index(Request $request, AuthenticationUtils $authenticationUtils)
    {
        
        $errors = $authenticationUtils->getLastAuthenticationError();
        
        $form = $this->createFormBuilder()
        ->add('correo', TextType::class,[
        'label' => 'Correo',
        'required' => false,
        'label_attr' => [
            'class' => 'mdl-textfield__label' // Este aplica para el <label>
            ],
        'attr' => [
            'class' => 'mdl-textfield__input' // Este aplica para el <input>
            ]
        ]
        )
        ->add('clave' , PasswordType::class,[
            'label'=> 'Contraseña',
            'required' => false,
            'label_attr' => [
            'class' => 'mdl-textfield__label' // Este aplica para el <label>
            ],
        'attr' => [
            'class' => 'mdl-textfield__input' // Este aplica para el <input>
            ]
            ])
        ->add('submit', SubmitType::class,[
            'label' => 'Login' ,
            'attr' => [
                'class' => 'mdl-button'
                ]
            ])
        ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            //Logica para el Login de Usuario
            
            //Primero se obtiene el usuario y la clave ingresada
            $email = $form->getData()['correo'];
            $password = $form->getData()['clave'];
            
            //Luego se busca en la base de datos primero si existe el correo ingresado
            $repository = $this->getDoctrine()->getRepository(Usuario::class);
            $user = $repository->findOneByCorreo($email);
            
            if (!$user) {
                //Si no existe el correo se debe mostrar un mensaje
                dump('El correo no existe');
            }
            else{
                //Si el correo existe, se busca ahora si la clave ingresada le corresponde a dicho correo
                $repository = $this->getDoctrine()
                ->getRepository(Usuario::class);
                $parameters = (array('correo' => $email, 'clave' => $password ));
            
            
            $query = $repository->createQueryBuilder('u')
                ->where('u.correo = :correo AND u.clave = :clave')
                ->setParameters($parameters)
                ->getQuery();
            
            $usuarioFinal = $query->getResult();
            
            if(!$usuarioFinal){
                //La clave no corresponde con el correo ingresado
                dump('Clave ingresada no valida');
                }
            else{
                //Se logea al usuario
                //Aqui se debe de ejecutar el codigo que asigna a el usuario ingresado una sesion
                //AQUI VA EL CODIGO QUE FALTA
                dump('Estas loggeado!');
                }

            }
            
            
    }
        
        
        // create a task and give it some dummy data for this example
        return $this->render('index.html.twig', [
            'myForm' => $form->createView(),
            'errors' => $errors
        ]);
    }
    
    
    
    /**
     * Ruta para la vista Registrar donde los Usuarios se registran en el sistema
     * 
     * @Route("/register")
     */
    public function register(Request $request , UserPasswordEncoderInterface $passwordEncoder)
    {
        
       
        
        $form = $this->createFormBuilder()
        ->add('nombre', TextType::class , [
            'label' => 'Nombre y Apellido',
            ])
        ->add('correo', EmailType::class , [
            'label' => 'Correo'
            ])
        ->add('direccion', TextareaType::class , [
            'label' => 'Direccion'
            ])
        ->add('plainPassword', PasswordType::class, [
            'label' => 'Contraseña'
            ])
        ->add('submit', SubmitType::class, [
            'label' => 'Registrarse',
            'attr' => [
                'class' => 'btn btn-primary'
                ]
            ])
      ->getForm();
       
        
         // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            
            $user = new Usuario();
            $carrito = new Carrito();
            $wishlist = new Wishlist();
            
            
            $nombre = $form->getData()['nombre'];
            
            dump($nombre);
            
            $user->setNombre($form->getData()['nombre']);
            $user->setCorreo($form->getData()['correo']);
            $user->setPlainPassword($form->getData()['plainPassword']);
            $user->setDireccion($form->getData()['direccion']);
            $user->setPais('US');
            
            // 3) Encode the password (you could also do this via Doctrine listener)
             
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setClave($password);
            $carrito->setUsuario($user);
            $wishlist->setUsuario($user);

             // 4) save the User!
             $em = $this->getDoctrine()->getManager();
             $em->persist($user);
             $em->persist($carrito);
             $em->persist($wishlist);
             $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            
        }
        
    
            
        
        return $this->render('register.html.twig', [
            'myRegister' => $form->createView()
            ]);
        
    }
    
    
     /**
      * Ruta donde se muestran todos los productos de la base de datos
      * 
     * @Route("/product", name="products")
     */
    function productAction(){
        
        $repository = $this->getDoctrine()->getRepository(Producto::class);
        $products = $repository->findAll();
        dump($products);
        
        
        return $this->render('productos.html.twig', array(
            'products' => $products
            ));
    }
    
    /**
     * Ruta que permite el inicio de sesión del Usuario
     * 
     * @Route("/login" , name="login")
     */
    function loginAction(Request $request, AuthenticationUtils $authenticationUtils){
        
        $errors = $authenticationUtils->getLastAuthenticationError();
        $lastUserName = $authenticationUtils->getLastUsername();
        
        dump("hola");
       
       return $this->render('index.html.twig', array(
                'errors' => $errors,
                'username' => $lastUserName
            ));
    }
    
    /**
     * Ruta que permite el fin de la sesión del Usuario
     * 
     * @Route("/logout" , name="logout")
     */
    function logoutAction(Request $request, AuthenticationUtils $authenticationUtils){
        
        
       
       return $this->render('index.html.twig', array(
            ));
    }
    
    /**
     * Ruta que permite ver los Productos del Carrito del Usuario ingresado
     * 
     * @Route("/shoppingCart" , name="shoppingCart")
     */
    function shoppingCart(Request $request, AuthenticationUtils $authenticationUtils){
        
        if($this->getUser() == null){
            $errors = $authenticationUtils->getLastAuthenticationError();
            return $this->render('index.html.twig' , array(
                'errors' => $errors
                ));
        }
        
        else{
        $idUsuario = $this->getUser()->getId();
        $repositoryCarrito = $this->getDoctrine()->getRepository(Carrito::class);
        $carrito = $repositoryCarrito->findOneBy(array('usuario' => $idUsuario ));
        $productos = $carrito->getProductos();
       
       return $this->render('carrito.html.twig', array(
            'productos' => $productos
            ));
        }
    }
    
    /**
     * Ruta que permite ver las Ordenes con sus Productos del Usuario ingresado
     * 
     * @Route("/orders" , name="orders")
     */
    function orders(Request $request, AuthenticationUtils $authenticationUtils){
        
        
       if($this->getUser() == null){
            $errors = $authenticationUtils->getLastAuthenticationError();
            return $this->render('index.html.twig' , array(
                'errors' => $errors
                ));
        }
        
        else{
            
             $idUsuario = $this->getUser()->getId();
             $repositoryOrden = $this->getDoctrine()->getRepository(Orden::class);
             //Se obtienen las ordenes del usuario            
             $ordenes = $repositoryOrden->findByUsuario(array('usuario' => $idUsuario ));
             
             $array = [];
             $cont = 0;
             
             foreach($ordenes as $orden){
                 $array[$cont] = $orden->getProductos();
                 $cont = $cont + 1;
             }
             
            
            dump($ordenes);
            
          return $this->render('orders.html.twig', array(
              'ordenes' => $ordenes,
              'productos' => $array
            ));  
        }
       
       
       
    }
    
    
    /**
     * Ruta que permite agregar un Producto al Carrito del Usuario
     * 
     * @Route("/carrito" , requirements={"id" = "\d+"} , name="agregarProducto")
     * @return RedirectResponse
     */
    public function agregarProductoAction(Request $request){
        
        $idProducto = $request->query->get('id');
        $idUsuario = $this->getUser()->getId();
        $repositoryCarrito = $this->getDoctrine()->getRepository(Carrito::class);
        $carrito = $repositoryCarrito->findOneBy(array('usuario' => $idUsuario));
        $idCarrito = $carrito->getId();

        $repositoryProducto = $this->getDoctrine()->getRepository(Producto::class);
        $producto = $repositoryProducto->findOneBy(array('id' => $idProducto));
        
        $carrito->addProducto($producto);
        $em = $this->getDoctrine()->getManager();
        $em->persist($producto);
        $em->flush();
        
        $repository = $this->getDoctrine()->getRepository(Producto::class);
        $products = $repository->findAll();

        return $this->render('productos.html.twig', array(
            'products' => $products
            ));
    }
    
    
    /**
     * Ruta que permite pagar el Carrito del Usuario
     * 
     * @Route("/pagar"  , requirements={"id" = "\d+"} , name="pagarCarrito")
     * @return RedirectResponse
     */
    public function pagarCarritoAction(Request $request){
        
        $em = $this->getDoctrine()->getManager();
        
        //Aqui se guardan los productos del carrito a pagar
        //Se crea la nueva orden
        $orden = new Orden();
        $usuario=$this->getUser();
        //Se asigna la orden a un usuario
        $orden->setUsuario($usuario);
        
        $time = date('H:i:s \O\n d/m/Y');
        $direccion = $request->query->get('direccionEnvio');
        $numeroTarjeta = $request->query->get('numeroTarjeta');
        $tipoPago = $request->query->get('tipoPago');
        $montoTotal = $request->query->get('montoTotal');
        
        $orden->setDireccion($direccion);
        $orden->setNumeroTarjeta($numeroTarjeta);
        $orden->setTipoPago($tipoPago);
        $orden->setFecha($time);
        $orden->setMontoTotal($montoTotal);
        
        $idUsuario = $usuario->getId();
        
        $repositoryCarrito = $this->getDoctrine()->getRepository(Carrito::class);
        $carrito = $repositoryCarrito->findOneBy(array('usuario' => $idUsuario));
        $productos = $carrito->getProductos();
        

        foreach ($productos as $producto){
            $orden->addProducto($producto);
            $carrito->removeProducto($producto);
            $em->persist($orden);
            $em->persist($carrito);
        }
        
        $em->flush();
        
        $repositoryOrden = $this->getDoctrine()->getRepository(Orden::class);
        //Se obtienen las ordenes del usuario            
        $ordenes = $repositoryOrden->findByUsuario(array('usuario' => $idUsuario ));
             
             $array = [];
             $cont = 0;
             
             foreach($ordenes as $orden){
                 $array[$cont] = $orden->getProductos();
                 $cont = $cont + 1;
             }
        

        return $this->render('orders.html.twig' , array(
            'ordenes' => $ordenes,
            'productos' => $array
            ));
    }
    
    /**
     * Ruta que permite eliminar un Producto del Carrito
     * 
     * @Route("/remove"  , requirements={"id" = "\d+"} , name="removeProducto")
     * @return RedirectResponse
     */
    public function removeProductoAction(Request $request){
        

        $idProducto = $request->query->get('id');
        $repositoryProducto = $this->getDoctrine()->getRepository(Producto::class);
        $producto = $repositoryProducto->findOneBy(array('id' => $idProducto));
        $idUsuario = $this->getUser()->getId();
        dump($producto);
        
        $repositoryCarrito = $this->getDoctrine()->getRepository(Carrito::class);
        $carrito = $repositoryCarrito->findOneBy(array('usuario' => $idUsuario));
        
        $carrito->removeProducto($producto);
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        
        $productos = $carrito->getProductos();

        return $this->render('carrito.html.twig' , array(
            'productos' => $productos
            ));
    }
    
    /**
     * Ruta que permite eliminar un Producto de la Wishlist
     * 
     * @Route("/removeWishlist"  , requirements={"id" = "\d+"} , name="removeWishlist")
     * @return RedirectResponse
     */
    public function removeWishlistAction(Request $request){
        

        $idProducto = $request->query->get('id');
        $repositoryProducto = $this->getDoctrine()->getRepository(Producto::class);
        $producto = $repositoryProducto->findOneBy(array('id' => $idProducto));
        $idUsuario = $this->getUser()->getId();
        dump($producto);
        
        $repositoryWishlist = $this->getDoctrine()->getRepository(Wishlist::class);
        $wishlist = $repositoryWishlist->findOneBy(array('usuario' => $idUsuario));
        
        $wishlist->removeProducto($producto);
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        
        $productos = $wishlist->getProductos();

        return $this->render('wishlist.html.twig' , array(
            'productos' => $productos
            ));
    }
    
     
      /**
       * Ruta que permite agregar un Producto en la Wishlist
       * 
     * @Route("/wishlist" , requirements={"id" = "\d+"} , name="agregarWishlist")
     * @return RedirectResponse
     */
    public function agregarWishlistAction(Request $request){
        
        $idProducto = $request->query->get('id');
        $idUsuario = $this->getUser()->getId();
        $repositoryWishlist = $this->getDoctrine()->getRepository(Wishlist::class);
        $wishlist = $repositoryWishlist->findOneBy(array('usuario' => $idUsuario));
        $idWishlist = $wishlist->getId();

        $repositoryProducto = $this->getDoctrine()->getRepository(Producto::class);
        $producto = $repositoryProducto->findOneBy(array('id' => $idProducto));
        
        $wishlist->addProducto($producto);
        $em = $this->getDoctrine()->getManager();
        $em->persist($producto);
        $em->flush();
        
        $repository = $this->getDoctrine()->getRepository(Producto::class);
        $products = $repository->findAll();

        return $this->render('productos.html.twig', array(
            'products' => $products
            ));
    }
    
    /**
     * Ruta que permite ver la Wishlist del Usuario
     * 
     * @Route("/getWishlist" , name="wishlist")
     */
     public function getWishlist(Request $request, AuthenticationUtils $authenticationUtils){
         
         if($this->getUser() == null){
            $errors = $authenticationUtils->getLastAuthenticationError();
            return $this->render('index.html.twig' , array(
                'errors' => $errors
                ));
        }
        
        else{
            
        $idUsuario = $this->getUser()->getId();
        $repositoryWishlist = $this->getDoctrine()->getRepository(Wishlist::class);
        $wishlist = $repositoryWishlist->findOneBy(array('usuario' => $idUsuario ));
        $productos = $wishlist->getProductos();
       
       return $this->render('wishlist.html.twig', array(
            'productos' => $productos
            ));
        }
     }
     
    /**
     * Ruta que permite la localización y la internacionalización de la aplicación
     * 
     * @Route("/changePais" , name="pais")
     */
     public function paisAction(Request $request, AuthenticationUtils $authenticationUtils){
         
         if($this->getUser() == null){
            $errors = $authenticationUtils->getLastAuthenticationError();
            return $this->render('index.html.twig' , array(
                'errors' => $errors
                ));
        }
        else{
            
        $errors = $authenticationUtils->getLastAuthenticationError();
         
         
        $pais = $request->query->get('seleccion');
        $usuario = $this->getUser();
        $usuario->setPais($pais);
        $em = $this->getDoctrine()->getManager();
        $em->persist($usuario);
        $em->flush();
        
        dump($pais);
         
        return $this->render('index.html.twig', array(
            'errors' => $errors
            ));
        }
     }
     
     /**
      * Ruta que permite cancelar la Orden del Usuario
      * 
      * @Route("/cancelOrden" ,requirements={"id" = "\d+"}, name="cancelarOrden")
      */
     public function cancelarOrdenAction(Request $request){
         
        //Se obtiene el id de la orden a cancelaar
        $idOrden = $request->query->get('id');

        $idUsuario = $this->getUser()->getId();
        
        $repositoryOrden = $this->getDoctrine()->getRepository(Orden::class);
        $ordenUsuario = $repositoryOrden->findOneBy(array('id' => $idOrden));
        
        $usuario = $this->getUser();
        dump($ordenUsuario);
        
        $usuario->removeOrden($ordenUsuario);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($usuario);
        $em->flush();
        
        $repositoryOrden = $this->getDoctrine()->getRepository(Orden::class);
        $ordenes = $repositoryOrden->findByUsuario(array('usuario' => $idUsuario ));
        
        $array = [];
             $cont = 0;
             
             foreach($ordenes as $orden){
                 $array[$cont] = $orden->getProductos();
                 $cont = $cont + 1;
             }
        
        
         return $this->render('orders.html.twig' , array(
             'ordenes' => $ordenes,
             'productos' => $array
             ));
     }
    
    /**
     * Ruta que permite ver la vista de Administrador de la aplicación
     * 
     * @Route("/admin" , name="admin")
     */
     public function admin(){
         
        $repositoryP = $this->getDoctrine()->getRepository(Producto::class);
        $products = $repositoryP->findAll();
        dump($products);
        
        
        $repositoryOrden = $this->getDoctrine()->getRepository(Orden::class);
        $orders= $repositoryOrden->findAll();
        
        $repositoryUsuario = $this->getDoctrine()->getRepository(Usuario::class);
        $users = $repositoryUsuario->findAll();
        
        if (!$products) {
        throw $this->createNotFoundException(
            'No product found for id '
        );
    }
        
        
        return $this->render('admin.html.twig',[
            'products' => $products,
            'orders' => $orders,
            'users' => $users
        ]);
        
     }
     
     /**
      * Ruta que le permite al Administrador agregar un Producto a la base de datos
      * 
     * @Route("/addProducto" , name="agregarAdmin")
     */
     public function agregarAdminAction(Request $request){
         
         
         $nombre = $request->query->get('nombreP');
         $categoria = $request->query->get('categoriaP');
         $link = $request->query->get('linkP');
         $precio = $request->query->get('precioP');
         $descripcion = $request->query->get('descripcionP');
         
         $producto = new Producto();
         
         $producto->setNombre($nombre);
         $producto->setCategoria($categoria);
         $producto->setLink($link);
         $producto->setPrecio($precio);
         $producto->setDescripcion($descripcion);
         
         $em = $this->getDoctrine()->getManager();
         $em->persist($producto);
         $em->flush();
        
        $repositoryProducto = $this->getDoctrine()->getRepository(Producto::class);
        $productos = $repositoryProducto->findAll();
        
         return $this->render('admin.html.twig' , array(
                'products' =>$productos
             ));
     }
     
     /**
      * Ruta que le permite al Administrador eliminar un Producto de la base de datos
      * 
     * @Route("/eliminarProducto" , name="eliminarAdmin")
     */
     public function eliminarAdminAction(Request $request){
         
         
         $idProducto = $request->query->get('borrarP');
         dump($idProducto);
         $repositoryProducto = $this->getDoctrine()->getRepository(Producto::class);
         $producto = $repositoryProducto->findOneBy(array('id' => $idProducto));
         
         $em = $this->getDoctrine()->getManager();
         $em->remove($producto);
         $em->flush();
        
        $repositoryProducto = $this->getDoctrine()->getRepository(Producto::class);
        $productos = $repositoryProducto->findAll();
        
         return $this->render('admin.html.twig' , array(
                'products' =>$productos
             ));
     }
     
      /**
       * Ruta que le permite al Administrador modificar un Producto de la base de datos
       * 
     * @Route("/updateProducto" , name="updatePrice")
     */
     public function updatePriceAction(Request $request){
         
         
         $idProducto = $request->query->get('gestionarP');
         $precio = $request->query->get('precioN');
         $repositoryProducto = $this->getDoctrine()->getRepository(Producto::class);
         $producto = $repositoryProducto->findOneBy(array('id' => $idProducto));
         
         $producto->setPrecio($precio);
         
         $em = $this->getDoctrine()->getManager();
         $em->persist($producto);
         $em->flush();
        
        $repositoryProducto = $this->getDoctrine()->getRepository(Producto::class);
        $productos = $repositoryProducto->findAll();
        
         return $this->render('admin.html.twig' , array(
                'products' =>$productos
             ));
     }
     
     /**
      * Ruta que le permite al Administrador eliminar una Orden de un Cliente en especifico
      * 
      * @Route("/adminOrderCancel" , requirements={"id" = "\d+"} , name="cancelarAdmin")
      */
     public function cancelarOrdenAdminAction(Request $request){
         
         
         dump('cancelao y tramitao');
         
         $ordenId = $request->query->get('id');
         $usuarioId = $request->query->get('userid');
         
         $repositoryOrden = $this->getDoctrine()->getRepository(Orden::class);
         $orden = $repositoryOrden->findOneBy(array('id'=>$ordenId));
         
         $repositoryUsuario = $this->getDoctrine()->getRepository(Usuario::class);
         $usuario = $repositoryUsuario->findOneBy(array('id'=>$usuarioId));
             
         $usuario->removeOrden($orden);
         
         $em = $this->getDoctrine()->getManager();
         $em->persist($usuario);
         $em->flush();
         
         
        $repositoryP = $this->getDoctrine()->getRepository(Producto::class);
        $products = $repositoryP->findAll();

        
        $repositoryOrden = $this->getDoctrine()->getRepository(Orden::class);
        $orders= $repositoryOrden->findAll();
        
        $repositoryUsuario = $this->getDoctrine()->getRepository(Usuario::class);
        $users = $repositoryUsuario->findAll();
        
         return $this->render('admin.html.twig', array(
             'products' => $products,
             'orders' => $orders,
             'users' => $users
             ));
     }
     
     
     

}
 