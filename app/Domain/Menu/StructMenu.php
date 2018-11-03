<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 02/11/18
 * Time: 13:42
 */

namespace App\Domain\Menu;

class StructMenu
{
    protected static $menu = [
        'Teacher'=> [
            "nome" => 'Professor', "icon" => "ti-light-bulb", "route" => "javascript:void(0)",
            "topics" => [
                ['nome' => 'Avaliar', 'route' => '/avaliar'],
                ['nome' => 'Classes', 'route' => '/salas'],
            ]
        ]
    ];

    /**
     * @return array
     */
    public static function getMenu(): array
    {
        return self::$menu;
    }

}