<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        // UserDataBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_UserDataBundle_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'UserDataBundle_homepage');
            }

            return array (  '_controller' => 'User\\DataBundle\\Controller\\PageController::indexAction',  '_route' => 'UserDataBundle_homepage',);
        }
        not_UserDataBundle_homepage:

        // userdata_showuser
        if ($pathinfo === '/showuser') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_userdata_showuser;
            }

            return array (  '_controller' => 'User\\DataBundle\\Controller\\UserController::showuserAction',  '_route' => 'userdata_showuser',);
        }
        not_userdata_showuser:

        // UserDataBundle_adduser
        if ($pathinfo === '/adduser') {
            if (!in_array($this->context->getMethod(), array('GET', ' POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', ' POST', 'HEAD'));
                goto not_UserDataBundle_adduser;
            }

            return array (  '_controller' => 'User\\DataBundle\\Controller\\PageController::adduserAction',  '_route' => 'UserDataBundle_adduser',);
        }
        not_UserDataBundle_adduser:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
