<?php namespace JimmyHowe\Utilities\EloquentTraits;

use Illuminate\Support\Str;

trait SluggableTitle
{
    protected function setTitleAttribute( $title )
    {
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }
}