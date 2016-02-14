<?php namespace JimmyHowe\Utilities\EloquentTraits;

use Illuminate\Support\Str;

trait SluggableUsername
{
    protected function setUsernameAttribute( $username )
    {
        $this->attributes['username'] = $username;
        $this->attributes['slug'] = Str::slug($username);
    }
}