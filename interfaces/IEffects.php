<?php

namespace interfaces;

interface IEffects
{
    public function store(array $data);
    public function delete(int $id);
}