<?php

namespace ContainerD8UiAlP;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfe97d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbd8cb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8ba33 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'getConnection', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'getMetadataFactory', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'getExpressionBuilder', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'beginTransaction', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'getCache', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'transactional', array('func' => $func), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'commit', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->commit();
    }

    public function rollback()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'rollback', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'getClassMetadata', array('className' => $className), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'createQuery', array('dql' => $dql), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'createNamedQuery', array('name' => $name), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'createQueryBuilder', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'flush', array('entity' => $entity), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'clear', array('entityName' => $entityName), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->clear($entityName);
    }

    public function close()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'close', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->close();
    }

    public function persist($entity)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'persist', array('entity' => $entity), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'remove', array('entity' => $entity), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'refresh', array('entity' => $entity), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'detach', array('entity' => $entity), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'merge', array('entity' => $entity), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'contains', array('entity' => $entity), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'getEventManager', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'getConfiguration', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'isOpen', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'getUnitOfWork', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'getProxyFactory', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'initializeObject', array('obj' => $obj), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'getFilters', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'isFiltersStateClean', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'hasFilters', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return $this->valueHolderfe97d->hasFilters();
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

        $instance->initializerbd8cb = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderfe97d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfe97d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfe97d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, '__get', ['name' => $name], $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        if (isset(self::$publicProperties8ba33[$name])) {
            return $this->valueHolderfe97d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe97d;

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

        $targetObject = $this->valueHolderfe97d;
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
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe97d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfe97d;
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
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, '__isset', array('name' => $name), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe97d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfe97d;
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
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, '__unset', array('name' => $name), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe97d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfe97d;
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
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, '__clone', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        $this->valueHolderfe97d = clone $this->valueHolderfe97d;
    }

    public function __sleep()
    {
        $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, '__sleep', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;

        return array('valueHolderfe97d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbd8cb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbd8cb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbd8cb && ($this->initializerbd8cb->__invoke($valueHolderfe97d, $this, 'initializeProxy', array(), $this->initializerbd8cb) || 1) && $this->valueHolderfe97d = $valueHolderfe97d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfe97d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfe97d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
