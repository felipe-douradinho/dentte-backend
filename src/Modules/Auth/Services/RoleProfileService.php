<?php

namespace Modules\Auth\Services;


use Modules\Auth\Enums\GuardEnum;

class RoleProfileService
{
    const DENTIST_ADMIN = 'DentistAdmin';
    const DENTIST       = 'Dentist';
    const SECRETARY     = 'Secretary';
    const STUDENT       = 'Student';
    const PATIENT       = 'Patient';

    public static array $roles = [

        self::DENTIST_ADMIN => [
            'name'             => self::DENTIST_ADMIN,
            'display_name'     => 'Dentista Administrador',
            'description'      => 'Dentista que Administra todo o sistema',
            'guard_name'       => GuardEnum::GUARD_ADMIN,
        ],

        self::DENTIST => [
            'name'             => self::DENTIST,
            'display_name'     => 'Dentista',
            'description'      => 'Dentista Colaborador',
            'guard_name'       => GuardEnum::GUARD_ADMIN,
        ],

        self::SECRETARY => [
            'name'             => self::SECRETARY,
            'display_name'     => 'Secretário(a)',
            'description'      => 'Secretário(a) da Clínica',
            'guard_name'       => GuardEnum::GUARD_ADMIN,
        ],

        self::STUDENT => [
            'name'             => self::STUDENT,
            'display_name'     => 'Estudante',
            'description'      => 'Estudante',
            'guard_name'       => GuardEnum::GUARD_ADMIN,
        ],

        self::PATIENT => [
            'name'             => self::PATIENT,
            'display_name'     => 'Paciente',
            'description'      => 'Paciente',
            'guard_name'       => GuardEnum::GUARD_PATIENT,
        ],

    ];

}
