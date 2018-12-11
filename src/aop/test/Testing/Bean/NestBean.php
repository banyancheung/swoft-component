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

namespace SwoftTest\Aop\Testing\Bean;

use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\None;

/**
 * Class NestBean
 *
 * @Bean
 */
class NestBean
{
    /**
     * @None
     */
    public function method1(): string
    {
        return $this->method2() . '.' . __FUNCTION__;
    }

    /**
     * @None
     */
    public function method2(): string
    {
        return __FUNCTION__;
    }
}
