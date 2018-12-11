<?php
declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace Swoft\Redis\Operator\Hashes;

use Swoft\Redis\Operator\Command;

class HashGetAll extends Command
{
    /**
     * [Hash] hGetAll
     *
     * @return string
     */
    public function getId()
    {
        return 'hGetAll';
    }

    /**
     * {@inheritdoc}
     */
    public function parseResponse($data)
    {
        if ($data === false) {
            return false;
        }

        $result = [];
        for ($i = 0; $i < count($data); ++$i) {
            $result[$data[$i]] = $data[++$i];
        }

        return $result;
    }
}
