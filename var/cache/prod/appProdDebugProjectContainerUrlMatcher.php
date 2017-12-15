<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/account')) {
            // account_index
            if ('/account' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_account_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'account_index');
                }

                return array (  '_controller' => 'AccountBundle\\Controller\\AccountController::indexAction',  '_route' => 'account_index',);
            }
            not_account_index:

            // account_new
            if ('/account/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_account_new;
                }

                return array (  '_controller' => 'AccountBundle\\Controller\\AccountController::newAction',  '_route' => 'account_new',);
            }
            not_account_new:

            // account_show
            if (preg_match('#^/account/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_account_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_show')), array (  '_controller' => 'AccountBundle\\Controller\\AccountController::showAction',));
            }
            not_account_show:

            // account_edit
            if (preg_match('#^/account/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_account_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_edit')), array (  '_controller' => 'AccountBundle\\Controller\\AccountController::editAction',));
            }
            not_account_edit:

            // account_delete
            if (preg_match('#^/account/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_account_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_delete')), array (  '_controller' => 'AccountBundle\\Controller\\AccountController::deleteAction',));
            }
            not_account_delete:

            // assign_beneficiary
            if (preg_match('#^/account/(?P<id>[^/]++)/assign/beneficiary$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_assign_beneficiary;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'assign_beneficiary')), array (  '_controller' => 'AccountBundle\\Controller\\AccountController::assignBeneficiary',));
            }
            not_assign_beneficiary:

            // transaction_beneficiary
            if (preg_match('#^/account/(?P<id>[^/]++)/transaction/beneficiary$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_transaction_beneficiary;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transaction_beneficiary')), array (  '_controller' => 'AccountBundle\\Controller\\AccountController::transactionBeneficiary',));
            }
            not_transaction_beneficiary:

            // account_default_index
            if ('/account' === $pathinfo) {
                return array (  '_controller' => 'AccountBundle\\Controller\\DefaultController::indexAction',  '_route' => 'account_default_index',);
            }

        }

        elseif (0 === strpos($pathinfo, '/assetic/bootstrap_')) {
            // _assetic_bootstrap_css
            if ('/assetic/bootstrap_css.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
            }

            // _assetic_bootstrap_css_0
            if ('/assetic/bootstrap_css_bootstrap_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
            }

            // _assetic_bootstrap_js
            if ('/assetic/bootstrap_js.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
            }

            // _assetic_bootstrap_js_0
            if ('/assetic/bootstrap_js_bootstrap_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
            }

        }

        elseif (0 === strpos($pathinfo, '/transaction')) {
            // transaction_index
            if ('/transaction' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_transaction_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'transaction_index');
                }

                return array (  '_controller' => 'AccountBundle\\Controller\\TransactionController::indexAction',  '_route' => 'transaction_index',);
            }
            not_transaction_index:

            // transaction_new
            if ('/transaction/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_transaction_new;
                }

                return array (  '_controller' => 'AccountBundle\\Controller\\TransactionController::newAction',  '_route' => 'transaction_new',);
            }
            not_transaction_new:

            // transaction_show
            if (preg_match('#^/transaction/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_transaction_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transaction_show')), array (  '_controller' => 'AccountBundle\\Controller\\TransactionController::showAction',));
            }
            not_transaction_show:

            // transaction_edit
            if (preg_match('#^/transaction/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_transaction_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transaction_edit')), array (  '_controller' => 'AccountBundle\\Controller\\TransactionController::editAction',));
            }
            not_transaction_edit:

            // transaction_delete
            if (preg_match('#^/transaction/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_transaction_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transaction_delete')), array (  '_controller' => 'AccountBundle\\Controller\\TransactionController::deleteAction',));
            }
            not_transaction_delete:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // _assetic_fddb9b6
        if ('/css/fddb9b6.css' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fddb9b6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_fddb9b6',);
        }

        // _assetic_fddb9b6_0
        if ('/css/fddb9b6_part_1.css' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fddb9b6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_fddb9b6_0',);
        }

        // _assetic_215113c
        if ('/js/215113c.js' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '215113c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_215113c',);
        }

        // _assetic_215113c_0
        if ('/js/215113c_part_1.js' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '215113c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_215113c_0',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
