<?php

namespace ContainerVlXkhEn;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2473c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere6986 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4a755 = [
        
    ];

    public function getConnection()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'getConnection', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'getMetadataFactory', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'getExpressionBuilder', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'beginTransaction', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'getCache', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->getCache();
    }

    public function transactional($func)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'transactional', array('func' => $func), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'wrapInTransaction', array('func' => $func), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'commit', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->commit();
    }

    public function rollback()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'rollback', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'getClassMetadata', array('className' => $className), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'createQuery', array('dql' => $dql), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'createNamedQuery', array('name' => $name), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'createQueryBuilder', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'flush', array('entity' => $entity), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'clear', array('entityName' => $entityName), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->clear($entityName);
    }

    public function close()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'close', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->close();
    }

    public function persist($entity)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'persist', array('entity' => $entity), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'remove', array('entity' => $entity), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'refresh', array('entity' => $entity), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'detach', array('entity' => $entity), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'merge', array('entity' => $entity), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'getRepository', array('entityName' => $entityName), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'contains', array('entity' => $entity), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'getEventManager', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'getConfiguration', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'isOpen', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'getUnitOfWork', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'getProxyFactory', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'initializeObject', array('obj' => $obj), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'getFilters', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'isFiltersStateClean', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'hasFilters', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return $this->valueHolder2473c->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializere6986 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder2473c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2473c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2473c->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, '__get', ['name' => $name], $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        if (isset(self::$publicProperties4a755[$name])) {
            return $this->valueHolder2473c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2473c;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2473c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2473c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2473c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, '__isset', array('name' => $name), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2473c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2473c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, '__unset', array('name' => $name), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2473c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2473c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, '__clone', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        $this->valueHolder2473c = clone $this->valueHolder2473c;
    }

    public function __sleep()
    {
        $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, '__sleep', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;

        return array('valueHolder2473c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere6986 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere6986;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere6986 && ($this->initializere6986->__invoke($valueHolder2473c, $this, 'initializeProxy', array(), $this->initializere6986) || 1) && $this->valueHolder2473c = $valueHolder2473c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2473c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2473c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
