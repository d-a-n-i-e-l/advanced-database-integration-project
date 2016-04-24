<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class MapEntry extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.MapEntry');

            // required message field = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "field";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_MESSAGE;

            $f->reference = '\Riak\Client\ProtoBuf\MapField';

            $descriptor->addField($f);

            // optional sint64 counter_value = 2
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 2;
            $f->name   = "counter_value";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_SINT64;

            $descriptor->addField($f);

            // repeated bytes set_value = 3
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 3;
            $f->name   = "set_value";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REPEATED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // optional bytes register_value = 4
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 4;
            $f->name   = "register_value";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // optional bool flag_value = 5
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 5;
            $f->name   = "flag_value";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BOOL;

            $descriptor->addField($f);

            // repeated message map_value = 6
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 6;
            $f->name   = "map_value";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REPEATED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_MESSAGE;

            $f->reference = '\Riak\Client\ProtoBuf\MapEntry';

            $descriptor->addField($f);

            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }

        /**
         * Check if "field" has a value
         *
         * @return boolean
         */
        public function hasField()
        {
            return isset($this->field);
        }

        /**
         * Clear "field" value
         */
        public function clearField()
        {
            unset($this->field);
        }

        /**
         * Get "field" value
         * @return MapField                  *
         *
         */
        public function getField()
        {
            return $this->field;
        }

        /**
         * Set "field" value
         *
         * @param MapField $value
         */
        public function setField($value)
        {
            return $this->field = $value;
        }

        /**
         * Check if "counter_value" has a value
         *
         * @return boolean
         */
        public function hasCounterValue()
        {
            return isset($this->counter_value);
        }

        /**
         * Clear "counter_value" value
         */
        public function clearCounterValue()
        {
            unset($this->counter_value);
        }

        /**
         * Get "counter_value" value
         * @return \PhpOption\Option of type (int)
         *
         *
         */
        public function getCounterValue()
        {
            return \PhpOption\Option::fromValue($this->counter_value);
        }

        /**
         * Set "counter_value" value
         *
         * @param int $value
         */
        public function setCounterValue($value)
        {
            return $this->counter_value = $value;
        }

        /**
         * Check if "set_value" has a value
         *
         * @return boolean
         */
        public function hasSetValue()
        {
            return isset($this->set_value);
        }

        /**
         * Clear "set_value" value
         */
        public function clearSetValue()
        {
            unset($this->set_value);
        }

        /**
         * Get "set_value" value
         *
         * @return \PhpOption\Option of type string[]
         */
        public function getSetValue($idx = null)
        {
            if (null == $idx || !array_key_exists($idx, $this->set_value)) {
                return  \PhpOption\None::create();
            }

            return new \PhpOption\Some($this->set_value[$idx]);
        }

        /**
         * Get "set_value" list of values
         *
         * @return string[]
         */
        public function getSetValueList()
        {
            return $this->set_value;
        }

        /**
         * Set "set_value" value
         *
         * @param string[] $value
         */
        public function setSetValue($value)
        {
            return $this->set_value = $value;
        }

        /**
         * Add a new element to "set_value"
         *
         * @param string $value
         */
        public function addSetValue($value)
        {
            $this->set_value[] = $value;
        }

        /**
         * Check if "register_value" has a value
         *
         * @return boolean
         */
        public function hasRegisterValue()
        {
            return isset($this->register_value);
        }

        /**
         * Clear "register_value" value
         */
        public function clearRegisterValue()
        {
            unset($this->register_value);
        }

        /**
         * Get "register_value" value
         * @return \PhpOption\Option of type (string)
         *
         *
         */
        public function getRegisterValue()
        {
            return \PhpOption\Option::fromValue($this->register_value);
        }

        /**
         * Set "register_value" value
         *
         * @param string $value
         */
        public function setRegisterValue($value)
        {
            return $this->register_value = $value;
        }

        /**
         * Check if "flag_value" has a value
         *
         * @return boolean
         */
        public function hasFlagValue()
        {
            return isset($this->flag_value);
        }

        /**
         * Clear "flag_value" value
         */
        public function clearFlagValue()
        {
            unset($this->flag_value);
        }

        /**
         * Get "flag_value" value
         * @return \PhpOption\Option of type (boolean)
         *
         *
         */
        public function getFlagValue()
        {
            return \PhpOption\Option::fromValue($this->flag_value);
        }

        /**
         * Set "flag_value" value
         *
         * @param boolean $value
         */
        public function setFlagValue($value)
        {
            return $this->flag_value = $value;
        }

        /**
         * Check if "map_value" has a value
         *
         * @return boolean
         */
        public function hasMapValue()
        {
            return isset($this->map_value);
        }

        /**
         * Clear "map_value" value
         */
        public function clearMapValue()
        {
            unset($this->map_value);
        }

        /**
         * Get "map_value" value
         *
         * @return \PhpOption\Option of type MapEntry[]
         */
        public function getMapValue($idx = null)
        {
            if (null == $idx || !array_key_exists($idx, $this->map_value)) {
                return  \PhpOption\None::create();
            }

            return new \PhpOption\Some($this->map_value[$idx]);
        }

        /**
         * Get "map_value" list of values
         *
         * @return MapEntry[]
         */
        public function getMapValueList()
        {
            return $this->map_value;
        }

        /**
         * Set "map_value" value
         *
         * @param MapEntry[] $value
         */
        public function setMapValue($value)
        {
            return $this->map_value = $value;
        }

        /**
         * Add a new element to "map_value"
         *
         * @param MapEntry $value
         */
        public function addMapValue($value)
        {
            $this->map_value[] = $value;
        }
    }
}
