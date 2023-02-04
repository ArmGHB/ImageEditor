<?php

namespace interfaces;

interface IImages
{
    public function create();
    public function store(array $data);
    public function edit(int $id);
    public function update(array $data,int $id);
    public function delete(int $id);
    public function find(int $id);
}