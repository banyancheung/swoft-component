<?php
 
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace Swoft\Bootstrap\Boots;

use Swoft\App;
use Swoft\Bean\Annotation\Bootstrap;
use Swoft\Core\Config;
use Swoft\Helper\DirHelper;

/**
 * @Bootstrap(order=3)
 * @author    huangzhhui <huangzhwork@gmail.com>
 */
class LoadInitConfiguration implements Bootable
{
    /**
     * @throws \InvalidArgumentException
     */
    public function bootstrap()
    {
        $path = App::getAlias('@configs');

        $excludes = [
            $path . DS . 'define.php',
        ];

        $config = new Config();
        $config->load($path, $excludes, DirHelper::SCAN_CURRENT_DIR, Config::STRUCTURE_SEPARATE);

        App::setAppProperties($config);
    }
}
