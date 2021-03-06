<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class RpbCounterUpdateResp extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.RpbCounterUpdateResp');

            // optional sint64 value = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "value";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_SINT64;

            $descriptor->addField($f);

            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
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
         * @return \PhpOption\Option of type (int)
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
         * @param int $value
         */
        public function setValue($value)
        {
            return $this->value = $value;
        }
    }
}
