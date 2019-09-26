<?php

namespace tenda\Menu;

use Illuminate\Support\Facades\Auth;
use JeroenNoten\LaravelAdminLte\Menu\Builder;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;

class DynamicMenu implements FilterInterface
{
	public function transform($item, Builder $builder){		
		if (isset($item['role']) && !Auth::user()->hasRole($item['role'])) {			
			return false;
		}

		return $item;
	}
}