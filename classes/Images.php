<?php

declare(strict_types = 1);

namespace classes;

use interfaces\IImages;
use models\ImageModel;
require '..\interfaces\IImages.php';

class Images implements IImages
{
    protected Object $model;
    public string $image_name;
    private string $image_path;

    /**
     * @param ImageModel $image_model
     */
    public function __construct(ImageModel $image_model){
        $this->model = $image_model;
    }

    /**
     * @return void
     */
    public function create()
    {
        // TODO: Implement create() method.
    }

    /**
     * @param array $data
     * @return void
     */
    public function store(array $data)
    {
        // TODO: Implement store() method.
    }

    /**
     * @param int $id
     * @return void
     */
    public function edit(int $id)
    {
        // TODO: Implement edit() method.
    }

    /**
     * @param array $data
     * @param int $id
     * @return void
     */
    public function update(array $data, int $id)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param int $id
     * @return void
     */
    public function find(int $id)
    {
        // TODO: Implement find() method.
    }
}