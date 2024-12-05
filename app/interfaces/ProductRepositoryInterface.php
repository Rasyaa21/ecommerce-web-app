<?php

namespace App\Interfaces;

use SebastianBergmann\Type\NullType;

interface ProductRepositoryInterface{
    public function getAllProducts(?string $category, ?string $search);
}
