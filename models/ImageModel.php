<?php

namespace models;

use db\PgSQL;

class ImageModel extends PgSQL
{
    protected string $table_name = "images";
    protected array $fillable = [
        'image_name',
        'image_path'
    ];
    public function __construct()
    {
        parent::__construct();
    }
}