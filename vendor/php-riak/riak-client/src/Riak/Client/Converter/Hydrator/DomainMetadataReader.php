<?php

namespace Riak\Client\Converter\Hydrator;

use Riak\Client\Annotation\RiakAnnotation;
use Doctrine\Common\Annotations\Reader;
use ReflectionProperty;
use ReflectionClass;

/**
 * Domain Metadata reader.
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class DomainMetadataReader
{
    /**
     * @var \Doctrine\Common\Annotations\Reader
     */
    private $reader;

    /**
     * @var \Riak\Client\Converter\Hydrator\ClassMetadata[]
     */
    private $mapping = [];

    /**
     * @param \Doctrine\Common\Annotations\Reader $reader
     */
    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }

    /**
     * @param string $className
     *
     * @return \Riak\Client\Converter\Hydrator\ClassMetadata
     */
    public function getMetadataFor($className)
    {
        if (isset($this->mapping[$className])) {
            return $this->mapping[$className];
        }

        $metadata   = new ClassMetadata();
        $reflection = new ReflectionClass($className);

        $metadata->className      = $reflection->name;
        $metadata->riakProperties = $this->getRiakPropertiesMapping($reflection);

        return $this->mapping[$className] = $metadata;
    }

    /**
     * @param \ReflectionClass $reflection
     *
     * @return array
     */
    private function getRiakPropertiesMapping(ReflectionClass $reflection)
    {
        $properties = $reflection->getProperties();
        $metadata   = [];

        foreach ($properties as $property) {
            $metadata = array_merge($this->getPropertyMapping($property), $metadata);
        }

        return $metadata;
    }

    /**
     * @param \ReflectionProperty $property
     *
     * @return array
     */
    private function getPropertyMapping(ReflectionProperty $property)
    {
        $metadata = [];

        foreach ($this->reader->getPropertyAnnotations($property) as $value) {
            if ( ! $value instanceof RiakAnnotation) {
                continue;
            }

            $class = get_class($value);
            $name  = $property->getName();
            $key   = lcfirst(substr($class, strrpos($class, '\\') + 1));

            $metadata[$key] = $name;
        }

        return $metadata;
    }
}
