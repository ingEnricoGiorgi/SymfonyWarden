<?php

namespace ContainerRaUPlvc;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfe5a0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbcb32 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc7ddd = [
        
    ];

    public function getConnection()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'getConnection', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'getMetadataFactory', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'getExpressionBuilder', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'beginTransaction', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'getCache', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'transactional', array('func' => $func), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'commit', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->commit();
    }

    public function rollback()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'rollback', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'getClassMetadata', array('className' => $className), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'createQuery', array('dql' => $dql), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'createNamedQuery', array('name' => $name), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'createQueryBuilder', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'flush', array('entity' => $entity), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'clear', array('entityName' => $entityName), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->clear($entityName);
    }

    public function close()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'close', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->close();
    }

    public function persist($entity)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'persist', array('entity' => $entity), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'remove', array('entity' => $entity), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'refresh', array('entity' => $entity), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'detach', array('entity' => $entity), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'merge', array('entity' => $entity), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'contains', array('entity' => $entity), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'getEventManager', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'getConfiguration', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'isOpen', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'getUnitOfWork', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'getProxyFactory', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'initializeObject', array('obj' => $obj), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'getFilters', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'isFiltersStateClean', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'hasFilters', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return $this->valueHolderfe5a0->hasFilters();
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

        $instance->initializerbcb32 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderfe5a0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfe5a0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfe5a0->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, '__get', ['name' => $name], $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        if (isset(self::$publicPropertiesc7ddd[$name])) {
            return $this->valueHolderfe5a0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe5a0;

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

        $targetObject = $this->valueHolderfe5a0;
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
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe5a0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfe5a0;
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
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, '__isset', array('name' => $name), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe5a0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfe5a0;
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
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, '__unset', array('name' => $name), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe5a0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfe5a0;
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
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, '__clone', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        $this->valueHolderfe5a0 = clone $this->valueHolderfe5a0;
    }

    public function __sleep()
    {
        $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, '__sleep', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;

        return array('valueHolderfe5a0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbcb32 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbcb32;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbcb32 && ($this->initializerbcb32->__invoke($valueHolderfe5a0, $this, 'initializeProxy', array(), $this->initializerbcb32) || 1) && $this->valueHolderfe5a0 = $valueHolderfe5a0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfe5a0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfe5a0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}