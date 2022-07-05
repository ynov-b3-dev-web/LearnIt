<?php

namespace Container2aOrhp1;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4ff12 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5ead2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescb719 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'getConnection', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'getMetadataFactory', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'getExpressionBuilder', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'beginTransaction', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'getCache', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'transactional', array('func' => $func), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'commit', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->commit();
    }

    public function rollback()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'rollback', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'getClassMetadata', array('className' => $className), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'createQuery', array('dql' => $dql), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'createNamedQuery', array('name' => $name), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'createQueryBuilder', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'flush', array('entity' => $entity), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'clear', array('entityName' => $entityName), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->clear($entityName);
    }

    public function close()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'close', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->close();
    }

    public function persist($entity)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'persist', array('entity' => $entity), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'remove', array('entity' => $entity), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'refresh', array('entity' => $entity), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'detach', array('entity' => $entity), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'merge', array('entity' => $entity), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'contains', array('entity' => $entity), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'getEventManager', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'getConfiguration', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'isOpen', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'getUnitOfWork', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'getProxyFactory', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'initializeObject', array('obj' => $obj), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'getFilters', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'isFiltersStateClean', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'hasFilters', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return $this->valueHolder4ff12->hasFilters();
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

        $instance->initializer5ead2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4ff12) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4ff12 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4ff12->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, '__get', ['name' => $name], $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        if (isset(self::$publicPropertiescb719[$name])) {
            return $this->valueHolder4ff12->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ff12;

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

        $targetObject = $this->valueHolder4ff12;
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
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ff12;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4ff12;
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
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, '__isset', array('name' => $name), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ff12;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4ff12;
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
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, '__unset', array('name' => $name), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4ff12;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4ff12;
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
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, '__clone', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        $this->valueHolder4ff12 = clone $this->valueHolder4ff12;
    }

    public function __sleep()
    {
        $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, '__sleep', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;

        return array('valueHolder4ff12');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5ead2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5ead2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5ead2 && ($this->initializer5ead2->__invoke($valueHolder4ff12, $this, 'initializeProxy', array(), $this->initializer5ead2) || 1) && $this->valueHolder4ff12 = $valueHolder4ff12;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4ff12;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4ff12;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
