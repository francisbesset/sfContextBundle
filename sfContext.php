<?php

class sfContext
{
    static protected $instance;

    protected $container;

    protected function __construct(Symfony\Component\DependencyInjection\Container $container)
    {
        $this->container = $container;
    }

    static public function createInstance(Symfony\Component\DependencyInjection\Container $container)
    {
        static::$instance = new static($container);

        return static::$instance;
    }

    /**
     * @return sfContext
     */
    static public function getInstance()
    {
        return static::$instance;
    }

    /**
     * @return Symfony\Component\DependencyInjection\ContainerInterface
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @return Symfony\DependencyInjection\ParameterBag\ParameterBag
     */
    public function getConfiguration()
    {
        return $this->container->getParameterBag();
    }

    /**
     * @return Swift_Mailer
     */
    public function getMailer()
    {
        return $this->container->get('mailer');
    }

    /**
     * Monolog\Logger
     */
    public function getLogger()
    {
        return $this->container->get('logger');
    }

    /**
     * @return Symfony\Component\HttpFoundation\Request
     */
    public function getRequest()
    {
        return $this->container->get('request');
    }

    /**
     * @return Symfony\Component\HttpFoundation\Session
     */
    public function getStorage()
    {
        return $this->container->get('session');
    }

    /**
     * @return Symfony\Component\Translation\TranslatorInterface
     */
    public function getI18N()
    {
        return $this->container->get('translator');
    }

    /**
     * @return Symfony\Component\Routing\RouterInterface
     */
    public function getRouter()
    {
        return $this->container->get('router');
    }

    /**
     * @return mixed
     */
    public function get($id)
    {
        return $this->container->get($id);
    }

    public function set($id, $object, $scope = Symfony\Component\DependencyInjection\Container::SCOPE_CONTAINER)
    {
        $this->container->set($id, $service, $scope);
    }

    public function has($id)
    {
        return $this->container->has($id);
    }
}
