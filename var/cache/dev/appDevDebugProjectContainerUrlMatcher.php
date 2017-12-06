<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/product')) {
            // product
            if ('/product' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::product',  '_route' => 'product',);
            }

            // products
            if ('/product' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::productAction',  '_route' => 'products',);
            }

        }

        // pagarCarrito
        if ('/pagar' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::pagarCarritoAction',  '_route' => 'pagarCarrito',);
        }

        // home
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::index',  '_route' => 'home',);
        }

        // app_default_register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::register',  '_route' => 'app_default_register',);
        }

        if (0 === strpos($pathinfo, '/remove')) {
            // removeProducto
            if ('/remove' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::removeProductoAction',  '_route' => 'removeProducto',);
            }

            // removeWishlist
            if ('/removeWishlist' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::removeWishlistAction',  '_route' => 'removeWishlist',);
            }

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
        }

        // shoppingCart
        if ('/shoppingCart' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::shoppingCart',  '_route' => 'shoppingCart',);
        }

        // orders
        if ('/orders' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::orders',  '_route' => 'orders',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // agregarProducto
            if ('/carrito' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::agregarProductoAction',  '_route' => 'agregarProducto',);
            }

            // cancelarOrden
            if ('/cancelOrden' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::cancelarOrdenAction',  '_route' => 'cancelarOrden',);
            }

            // pais
            if ('/changePais' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::paisAction',  '_route' => 'pais',);
            }

        }

        // agregarWishlist
        if ('/wishlist' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::agregarWishlistAction',  '_route' => 'agregarWishlist',);
        }

        // wishlist
        if ('/getWishlist' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::getWishlist',  '_route' => 'wishlist',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::admin',  '_route' => 'admin',);
            }

            // cancelarAdmin
            if ('/adminOrderCancel' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::cancelarOrdenAdminAction',  '_route' => 'cancelarAdmin',);
            }

        }

        // agregarAdmin
        if ('/addProducto' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::agregarAdminAction',  '_route' => 'agregarAdmin',);
        }

        // eliminarAdmin
        if ('/eliminarProducto' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::eliminarAdminAction',  '_route' => 'eliminarAdmin',);
        }

        // updatePrice
        if ('/updateProducto' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::updatePriceAction',  '_route' => 'updatePrice',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
