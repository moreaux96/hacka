<?php

namespace App\Http\Middleware;

use App\Domain\Menu\StructMenu;
use Closure;


class GenerateMenus
{
    protected $menu = [];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->menu = StructMenu::getMenu();
        \Menu::make('MyNavBar', function($menu){

            foreach ($this->menu as $itens) {

                $item = $menu->add(isset($itens['nome']) ? $itens['nome'] : '')
                    ->prepend(" <i class={$itens['icon']}></i> <span> ")
                    ->append(" </span>");
                $item->link->href(isset($itens['route']) ? $itens['route']: '#') ;

                foreach (isset($itens['topics']) ? $itens['topics']: [] as $topic) {
                    $item->add(isset($topic['nome']) ? $topic['nome'] : '', ['class', 'collapse'])
                        ->link->href(isset($topic['route']) ? $topic['route'] : '#')
                        ->attr("aria-expanded","true");
                }
            }

        });
        return $next($request);
    }
}
