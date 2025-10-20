<?php

namespace App\Services;

class DeveloperService
{
    public function getProfile(): array
    {
        return [
            'name'  => 'Soufiane AZIZ',
            'role'  => 'Full-Stack Web Developer',
            'bio'   => "Passionate about modern web development, I enjoy designing elegant and high-performance applications using Laravel and JavaScript.",
            'email' => 'azizsoufiane@example.com',
        ];
    }
}
