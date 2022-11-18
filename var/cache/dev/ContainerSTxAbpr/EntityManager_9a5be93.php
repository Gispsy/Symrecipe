<?php

namespace ContainerSTxAbpr;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6cf89 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer23454 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9818e = [
        
    ];

    public function getConnection()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'getConnection', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'getMetadataFactory', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'getExpressionBuilder', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'beginTransaction', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'getCache', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->getCache();
    }

    public function transactional($func)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'transactional', array('func' => $func), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'wrapInTransaction', array('func' => $func), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'commit', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->commit();
    }

    public function rollback()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'rollback', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'getClassMetadata', array('className' => $className), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'createQuery', array('dql' => $dql), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'createNamedQuery', array('name' => $name), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'createQueryBuilder', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'flush', array('entity' => $entity), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'clear', array('entityName' => $entityName), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->clear($entityName);
    }

    public function close()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'close', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->close();
    }

    public function persist($entity)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'persist', array('entity' => $entity), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'remove', array('entity' => $entity), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'refresh', array('entity' => $entity), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'detach', array('entity' => $entity), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'merge', array('entity' => $entity), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'getRepository', array('entityName' => $entityName), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'contains', array('entity' => $entity), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'getEventManager', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'getConfiguration', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'isOpen', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'getUnitOfWork', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'getProxyFactory', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'initializeObject', array('obj' => $obj), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'getFilters', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'isFiltersStateClean', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'hasFilters', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return $this->valueHolder6cf89->hasFilters();
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

        $instance->initializer23454 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder6cf89) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6cf89 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6cf89->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, '__get', ['name' => $name], $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        if (isset(self::$publicProperties9818e[$name])) {
            return $this->valueHolder6cf89->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6cf89;

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

        $targetObject = $this->valueHolder6cf89;
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
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6cf89;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6cf89;
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
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, '__isset', array('name' => $name), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6cf89;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6cf89;
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
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, '__unset', array('name' => $name), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6cf89;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6cf89;
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
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, '__clone', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        $this->valueHolder6cf89 = clone $this->valueHolder6cf89;
    }

    public function __sleep()
    {
        $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, '__sleep', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;

        return array('valueHolder6cf89');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer23454 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer23454;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer23454 && ($this->initializer23454->__invoke($valueHolder6cf89, $this, 'initializeProxy', array(), $this->initializer23454) || 1) && $this->valueHolder6cf89 = $valueHolder6cf89;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6cf89;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6cf89;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}