<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Menu as SiteMenu;
use Illuminate\Support\Facades\Cache;
use App\Models\MenuItem;

class Menu extends Component
{
    public $menuName;

    /**
     * Create a new component instance.
     */
    public function __construct($menuName)
    {
        $this->menuName = $menuName;

        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        if ($this->menuName == 'Main Menu') {
            $main_menu = SiteMenu::where('position', $this->menuName)->first();

            $main_menu_items = Cache::get('main_menu_items', function () use ($main_menu) {
                return self::menu_tree($main_menu->id, 0);
            });


            return view('components.menu')->with('main_menu_items', $main_menu_items)->with('menu_name', $this->menuName);
        } elseif ($this->menuName == 'Footer Menu') {
            $footer_menus = SiteMenu::where('position', $this->menuName)->where('status', 1)->get();
            $footer_menu_items = [];

            foreach ($footer_menus as $key => $footer_menu) {

                $footer_menu_items[] = Cache::get('footer_menu_items', function () use ($footer_menu) {
                    return array('menu_items' => $this->menu_tree($footer_menu->id, 0), 'menu_title' => $footer_menu->title);
                });
            }
            // dd($footer_menu_items);
            // exit;

            return view('components.menu')->with('footer_menu_items', $footer_menu_items)->with('menu_name', $this->menuName);
        } elseif ($this->menuName == 'Bottom Menu') {
            $bottom_menu = SiteMenu::where('position', $this->menuName)->first();

            $bottom_menu_items = Cache::get('bottom_menu_items', function () use ($bottom_menu) {
                return $this->menu_tree($bottom_menu->id, 0);
            });
            return view('components.menu')->with('bottom_menu_items', $bottom_menu_items)->with('menu_name', $this->menuName);
        } elseif ($this->menuName == 'Quick Menu') {
            $quick_menu = SiteMenu::where('position', $this->menuName)->first();

            $quick_menu_items = Cache::get('quick_menu_items', function () use ($quick_menu) {
                return $this->menu_tree($quick_menu->id, 0);
            });
            return view('components.menu')->with('quick_menu_items', $quick_menu_items)->with('menu_name', $this->menuName);
        } elseif ($this->menuName == 'Extra Menu') {
            $main_menu = SiteMenu::where('position', 'Main Menu')->first();

            $extra_menu_items = Cache::get('extra_menu_items', function () use ($main_menu) {
                return self::menu_tree($main_menu->id, 0);
            });

            return view('components.menu')->with('extra_menu_items', $extra_menu_items)->with('menu_name', $this->menuName);
        }
    }
    public static function menu_tree($menu_id, $parent, $level = 0, $mega_menu = 0)
    {
        $items = MenuItem::where('menu_id', $menu_id)->where('parent_id', $parent)->orderBy('menu_order', 'ASC')->get();
        if ($items) {
            foreach ($items as $key => $item) {
                $item->level = $level;
                if ($item->menu_type == 'custom_link') {
                    if ($item->url != '#')
                        $item->slug = url($item->url);
                    else
                        $item->slug = $item->url;
                    $item->code = $item->url;
                    $item->is_mega = $mega_menu;
                } elseif ($item->menu_type == 'pages_link' && $item->linkable) {
                    $item->slug = url('/', $item->linkable->slug);
                    $item->code = $item->linkable->slug;
                    $item->is_mega = $mega_menu;
                } elseif ($item->menu_type == 'frontend_pages_link' && $item->linkable) {
                    if (isset($item->linkable->slug)) {
                        if ($item->linkable->slug == 'logout') {
                            $item->slug = 'logout';
                            $item->code = 'logout';
                            $item->is_mega = $mega_menu;
                        } else {
                            $item->slug = url(route($item->linkable->slug, [], false));
                            $item->code = $item->linkable->slug;
                            $item->is_mega = ($parent == 0 && $item->code == 'service.index') ? 1 : $mega_menu;
                        }
                    } else {
                        $item->slug = "#";
                        $item->code = '#';
                        $item->is_mega = $mega_menu;
                    }
                } elseif ($item->menu_type == 'products_link' && $item->linkable) {
                    $item->slug = url('/product', $item->linkable->slug);
                    $item->code = $item->linkable->slug;
                    $item->is_mega = $mega_menu;
                } elseif ($item->menu_type == 'product_categories_link' && $item->linkable) {
                    $item->slug = url('/products', $item->linkable->slug);
                    $item->code = $item->linkable->slug;
                    $item->is_mega = $mega_menu;
                } elseif ($item->menu_type == 'services_link' && $item->linkable) {
                    $item->slug = url('/service', $item->linkable->slug);
                    $item->code = $item->linkable->slug;
                    $item->is_mega = $mega_menu;
                } elseif ($item->menu_type == 'locations_link' && $item->linkable) {
                    $item->slug = url('/location', $item->linkable->slug);
                    $item->code = $item->linkable->slug;
                    $item->is_mega = $mega_menu;
                } elseif ($item->menu_type == 'sectors_link' && $item->linkable) {
                    $item->slug = url('/sector', $item->linkable->slug);
                    $item->code = $item->linkable->slug;
                    $item->is_mega = $mega_menu;
                } elseif ($item->menu_type == 'location_tags_link' && $item->linkable) {
                    $item->slug = url('/', $item->linkable->slug);
                    $item->code = $item->linkable->slug;
                    $item->is_mega = $mega_menu;
                } elseif ($item->menu_type == 'projects_link' && $item->linkable) {
                    $item->slug = url('/projects', $item->linkable->slug);
                    $item->code = $item->linkable->slug;
                    $item->is_mega = $mega_menu;
                }

                if (count($item->children) > 0) {
                    $child_mega_menu = ($parent == 0 && $item->code == 'service.index') ? 1 : $mega_menu;
                    $item->children = self::menu_tree($menu_id, $item->id, $level + 1, $child_mega_menu);
                }
            }
        }
        return $items;
    }
}
