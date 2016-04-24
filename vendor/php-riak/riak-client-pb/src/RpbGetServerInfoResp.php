<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class RpbGetServerInfoResp extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.RpbGetServerInfoResp');

            // optional bytes node = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "node";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // optional bytes server_version = 2
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 2;
            $f->name   = "server_version";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }

        /**
         * Check if "node" has a value
         *
         * @return boolean
         */
        public function hasNode()
        {
            return isset($this->node);
        }

        /**
         * Clear "node" value
         */
        public function clearNode()
        {
            unset($this->node);
        }

        /**
         * Get "node" value
         * @return \PhpOption\Option of type (string)
         *
         *
         */
        public function getNode()
        {
            return \PhpOption\Option::fromValue($this->node);
        }

        /**
         * Set "node" value
         *
         * @param string $value
         */
        public function setNode($value)
        {
            return $this->node = $value;
        }

        /**
         * Check if "server_version" has a value
         *
         * @return boolean
         */
        public function hasServerVersion()
        {
            return isset($this->server_version);
        }

        /**
         * Clear "server_version" value
         */
        public function clearServerVersion()
        {
            unset($this->server_version);
        }

        /**
         * Get "server_version" value
         * @return \PhpOption\Option of type (string)
         *
         *
         */
        public function getServerVersion()
        {
            return \PhpOption\Option::fromValue($this->server_version);
        }

        /**
         * Set "server_version" value
         *
         * @param string $value
         */
        public function setServerVersion($value)
        {
            return $this->server_version = $value;
        }
    }
}