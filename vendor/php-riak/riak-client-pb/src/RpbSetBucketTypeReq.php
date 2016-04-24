<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class RpbSetBucketTypeReq extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.RpbSetBucketTypeReq');

            // required bytes type = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "type";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // required message props = 2
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 2;
            $f->name   = "props";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_MESSAGE;

            $f->reference = '\Riak\Client\ProtoBuf\RpbBucketProps';

            $descriptor->addField($f);

            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }

        /**
         * Check if "type" has a value
         *
         * @return boolean
         */
        public function hasType()
        {
            return isset($this->type);
        }

        /**
         * Clear "type" value
         */
        public function clearType()
        {
            unset($this->type);
        }

        /**
         * Get "type" value
         * @return string                  *
         *
         */
        public function getType()
        {
            return $this->type;
        }

        /**
         * Set "type" value
         *
         * @param string $value
         */
        public function setType($value)
        {
            return $this->type = $value;
        }

        /**
         * Check if "props" has a value
         *
         * @return boolean
         */
        public function hasProps()
        {
            return isset($this->props);
        }

        /**
         * Clear "props" value
         */
        public function clearProps()
        {
            unset($this->props);
        }

        /**
         * Get "props" value
         * @return RpbBucketProps                  *
         *
         */
        public function getProps()
        {
            return $this->props;
        }

        /**
         * Set "props" value
         *
         * @param RpbBucketProps $value
         */
        public function setProps($value)
        {
            return $this->props = $value;
        }
    }
}
