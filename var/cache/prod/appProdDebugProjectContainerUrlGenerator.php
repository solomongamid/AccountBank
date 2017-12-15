<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'account_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AccountBundle\\Controller\\AccountController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/account/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'account_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AccountBundle\\Controller\\AccountController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/account/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'account_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AccountBundle\\Controller\\AccountController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/account',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'account_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AccountBundle\\Controller\\AccountController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/account',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'account_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AccountBundle\\Controller\\AccountController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/account',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'assign_beneficiary' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AccountBundle\\Controller\\AccountController::assignBeneficiary',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assign/beneficiary',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/account',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'transaction_beneficiary' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AccountBundle\\Controller\\AccountController::transactionBeneficiary',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/transaction/beneficiary',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/account',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'account_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AccountBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/account',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'transaction_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AccountBundle\\Controller\\TransactionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/transaction/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'transaction_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AccountBundle\\Controller\\TransactionController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/transaction/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'transaction_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AccountBundle\\Controller\\TransactionController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/transaction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'transaction_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AccountBundle\\Controller\\TransactionController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/transaction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'transaction_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AccountBundle\\Controller\\TransactionController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/transaction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_css' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_css',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assetic/bootstrap_css.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_css_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_css',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assetic/bootstrap_css_bootstrap_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assetic/bootstrap_js.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assetic/bootstrap_js_bootstrap_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fddb9b6' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fddb9b6',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/fddb9b6.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fddb9b6_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fddb9b6',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/fddb9b6_part_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_215113c' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '215113c',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/215113c.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_215113c_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '215113c',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/215113c_part_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
