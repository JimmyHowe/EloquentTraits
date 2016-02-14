# Laravel Eloquent Traits

Simple Eloquent traits for quickly building sluggable titles

```PHP
    $table->string('title');
    $table->string('slug');
```

```php
    class Post extends Model
    {
        use SluggableTitle;
    }
```