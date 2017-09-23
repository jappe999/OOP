<?php
    /**
     * @author Jasper van der Linden
     *
     * Extract a person from this class.
     */

    class Person
    {
        public function __construct ($args)
        {
            // Assign values to keys dynamically
            foreach ($args as $key => $value)
            {
                $this->{$key} = $value;
            }
        }

        /**
         * @return String name of the person.
         */
        public function getName ()
        {
            return isset($this->name) ? $this->name : 'Niet opgegeven';
        }

        /**
         * @return String address of the person.
         */
        public function getAddress ()
        {
            return isset($this->address) ? $this->address : 'Niet opgegeven';
        }

        /**
         * @return String email address of the person.
         */
        public function getEmail ()
        {
            return isset($this->email) ? $this->email : 'Niet opgegeven';
        }

        /**
         * @return String mobile phone number of the person.
         */
        public function getMobile ()
        {
            return isset($this->mobile) ? $this->mobile : 'Niet opgegeven';
        }

        /**
         * @return String country where the person lives in.
         */
        public function getCountry ()
        {
            return isset($this->country) ? $this->country : 'Niet opgegeven';
        }
    }
