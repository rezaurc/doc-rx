<?php

/**
 * Copyright (c) 2017. Rezaur Chowdhury <reza@rezaur.net>.
 *
 * This file is a part of doc-rx .
 *
 * doc-rx
 *
 * RandomIdGenerator.php
 *
 * 7/8/17 5:22 PM
 *
 * For the full copyright and license information, please view the LICENSE file
 * that is distributed with the source code.
 */

namespace AppBundle\Service;

use Doctrine\ORM\Id\AbstractIdGenerator;

/**
 * Description of RandomIdGenerator
 *
 * @author Rezaur Chowdhury <reza@rezaur.net>
 */
class RandomIdGenerator
{
    public function generate(\Doctrine\ORM\EntityManager $em, $entity)
    {
        $entity_name = $em->getClassMetadata(get_class($entity))->getName();
        $length = 14;
        $prefix = 'sys_';
        switch ($entity_name) {
            case 'AppBundle\Entity\User':
                $length = 18;
                $prefix = '';
                break;
        }
        $max_attempts = 11;
        $attempt = 0;

        while (true) {
            $id = $prefix.$this->GenerateID($length);
            $item = $em->find($entity_name, $id);
            if (!$item) {
                return $id;
            }

            // Should we stop?
            $attempt++;
            if ($attempt > $max_attempts) {
                throw new \Exception('RandomIdGenerator worked hardly, but failed to generate unique ID :(');
            }
        }
    }

    /**
     *
     * @param type $length
     * @return string
     */
    public function generateID($length = 14)
    {
        $id = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789876543210";
        $codeAlphabet .= "aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ";
        $max = strlen($codeAlphabet) - 1;
        for ($i = 0; $i < $length; $i++) {
            $id .= $codeAlphabet[$this->crypto_rand_secure(0, $max)];
        }
        return $id;
    }

    /**
     *
     * @param type $min
     * @param type $max
     * @return type
     */
    private function crypto_rand_secure($min, $max) {
        $range = $max - $min;
        if ($range < 1)
            return $min; // not so random...
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd >= $range);
        return $min + $rnd;
    }
}
