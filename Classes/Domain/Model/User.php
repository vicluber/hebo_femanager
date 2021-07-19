<?php
namespace Hebotek\HeboFeManager\Domain\Model;

class User extends \In2code\Femanager\Domain\Model\User {

        /**
         * personalNumber
         *
         * @var string
         */
        protected $personalNumber;

        /**
         * Returns the personalNumber
         *
         * @return string $personalNumber
         */
        public function getPersonalNumber()
        {
                return $this->personalNumber;
        }

        /**
         * Sets the personalNumber
         *
         * @param string $personalNumber
         * @return void
         */
        public function setPersonalNumber($personalNumber)
        {
                $this->personalNumber = $personalNumber;
        }
        /**
        * @param string $username
        */
        public function setUsername($username)
        {
                $this->username = $username;
        }
}