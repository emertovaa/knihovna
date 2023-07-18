<?php

namespace App\Dto;

class AutorDto
{
    public function __construct(
        public readonly string $jmeno,
        public readonly array $books,
        public readonly int $id,
        public readonly string $prijmeni,
        public readonly ?string $rokNarozeni
    ) {
    }
}
