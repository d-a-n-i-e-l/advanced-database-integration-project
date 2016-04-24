<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class CounterOp extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.CounterOp');

            // optional sint64 increment = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "increment";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_SINT64;

            $descriptor->addField($f);

            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }

        /**
         * Check if "increment" has a value
         *
         * @return boolean
         */
        public function hasIncrement()
        {
            return isset($this->increment);
        }

        /**
         * Clear "increment" value
         */
        public function clearIncrement()
        {
            unset($this->increment);
        }

        /**
         * Get "increment" value
         * @return \PhpOption\Option of type (int)
         *
         *
         */
        public function getIncrement()
        {
            return \PhpOption\Option::fromValue($this->increment);
        }

        /**
         * Set "increment" value
         *
         * @param int $value
         */
        public function setIncrement($value)
        {
            return $this->increment = $value;
        }
    }
}
