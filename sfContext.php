<?php

class sfContext
{
    static protected $instance;

    protected $container;

    static public function getInstance()
    {
        return static::$instance;
    }

    public function __construct(Symfony\Component\DependencyInjection\Container $container)
    {
        self::$instance = $this;

        $this->container = $container;
    }

    public function getContainer()
    {
        return $this->container;
    }

    public function getConfiguration()
    {
        return $this->container->getParameterBag();
    }

    public function getMailer()
    {
        return $this->container->get('mailer');
    }

    public function getLogger()
    {
        return $this->container->get('logger');
    }

    public function getRequest()
    {
        return $this->container->get('request');
    }

    public function getStorage()
    {
        return $this->container->get('session');
    }

    public function getI18N()
    {
        return $this->container->get('translator');
    }

    public function getRouter()
    {
        return $this->container->get('router');
    }

    public function get($id)
    {
        if (!$this->has($id)) {
            throw new sfException(sprintf('The "%s" object does not exist in the current context.', $name));
        }

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
