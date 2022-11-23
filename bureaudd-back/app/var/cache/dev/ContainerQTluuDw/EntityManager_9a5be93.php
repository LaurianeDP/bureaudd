<?php

namespace ContainerQTluuDw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7126a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer16b77 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties75900 = [
        
    ];

    public function getConnection()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'getConnection', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'getMetadataFactory', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'getExpressionBuilder', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'beginTransaction', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'getCache', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'transactional', array('func' => $func), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'commit', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->commit();
    }

    public function rollback()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'rollback', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'getClassMetadata', array('className' => $className), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'createQuery', array('dql' => $dql), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'createNamedQuery', array('name' => $name), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'createQueryBuilder', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'flush', array('entity' => $entity), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'clear', array('entityName' => $entityName), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->clear($entityName);
    }

    public function close()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'close', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->close();
    }

    public function persist($entity)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'persist', array('entity' => $entity), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'remove', array('entity' => $entity), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'refresh', array('entity' => $entity), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'detach', array('entity' => $entity), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'merge', array('entity' => $entity), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'contains', array('entity' => $entity), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'getEventManager', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'getConfiguration', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'isOpen', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'getUnitOfWork', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'getProxyFactory', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'initializeObject', array('obj' => $obj), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'getFilters', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'isFiltersStateClean', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'hasFilters', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return $this->valueHolder7126a->hasFilters();
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

        $instance->initializer16b77 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder7126a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7126a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7126a->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, '__get', ['name' => $name], $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        if (isset(self::$publicProperties75900[$name])) {
            return $this->valueHolder7126a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7126a;

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

        $targetObject = $this->valueHolder7126a;
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
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7126a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7126a;
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
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, '__isset', array('name' => $name), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7126a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7126a;
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
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, '__unset', array('name' => $name), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7126a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7126a;
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
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, '__clone', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        $this->valueHolder7126a = clone $this->valueHolder7126a;
    }

    public function __sleep()
    {
        $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, '__sleep', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;

        return array('valueHolder7126a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer16b77 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer16b77;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer16b77 && ($this->initializer16b77->__invoke($valueHolder7126a, $this, 'initializeProxy', array(), $this->initializer16b77) || 1) && $this->valueHolder7126a = $valueHolder7126a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7126a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7126a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
