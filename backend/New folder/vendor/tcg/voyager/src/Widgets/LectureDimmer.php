<?php

namespace TCG\Voyager\Widgets;
use Illuminate\Support\Str;

class LectureDimmer extends BaseDimmer
{
    protected $config = [];
    public function run()
    {
        $count = \App\Models\Lecture::count();
        $string = 'Lectures';
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.post_link_text'),
                'link' => route('voyager.lectures.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }
}

