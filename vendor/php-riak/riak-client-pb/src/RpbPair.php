<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class RpbPair extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.RpbPair');

            // required bytes key = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "key";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // optional bytes value = 2
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 2;
            $f->name   = "value";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }

        /**
         * Check if "key" has a value
         *
         * @return boolean
         */
        public function hasKey()
        {
            return isset($this->key);
        }

        /**
         * Clear "key" value
         */
        public function clearKey()
        {
            unset($this->key);
        }

        /**
         * Get "key" value
         * @return string                  *
         *
         */
        public function getKey()
        {
            return $this->key;
        }

        /**
         * Set "key" value
         *
         * @param string $value
         */
        public function setKey($value)
        {
            return $this->key = $value;
        }

        /**
         * Check if "value" has a value
         *
         * @return boolean
         */
        public function hasValue()
        {
            return isset($this->value);
        }

        /**
         * Clear "value" value
         */
        public function clearValue()
        {
            unset($this->value);
        }

        /**
         * Get "value" value
         * @return \PhpOption\Option of type (string)
         *
         *
         */
        public function getValue()
        {
            return \PhpOption\Option::fromValue($this->value);
        }

        /**
         * Set "value" value
         *
         * @param string $value
         */
        public function setValue($value)
        {
            return $this->value = $value;
        }
    }
}
