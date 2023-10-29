<?php

namespace TCG\Voyager\Widgets;
use Illuminate\Support\Str;

class BookDimmer extends BaseDimmer
{
    protected $config = [];
    public function run()
    {
        $count = \App\Models\Book::count();
        $string = 'Books';
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.post_link_text'),
                'link' => route('voyager.books.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }
}

