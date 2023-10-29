<?php

namespace TCG\Voyager\Widgets;
use Illuminate\Support\Str;

class FlyerDimmer extends BaseDimmer
{
    protected $config = [];
    public function run()
    {
        $count = \App\Models\Flyer::count();
        $string = 'Flyers';
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.post_link_text'),
                'link' => route('voyager.flyers.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }
}

