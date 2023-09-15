<?php

namespace Modules\Auth\Services;

use Modules\Auth\Traits\PermissionTrait;


class PermissionService
{
    use PermissionTrait;

    // -- no prefix
    const NO_PREFIX             = 'no-prefix';

    // -- actions
    const ACTION_LIST           = 'index';
    const ACTION_CREATE         = 'create';
    const ACTION_STORE          = 'store';
    const ACTION_SHOW           = 'show';
    const ACTION_EDIT           = 'edit';
    const ACTION_UPDATE         = 'update';
    const ACTION_DESTROY        = 'destroy';
    const ACTION_FORCE_DESTROY  = 'force-destroy';
    const ACTION_RESTORE        = 'restore';
    const ACTION_LOGIN          = 'login';
    const ACTION_LOGOUT         = 'logout';


    // -- resources (like in routes)
    const DASHBOARD             = 'dashboard';
    const PLAN                  = 'plans';
    const CATEGORY              = 'categories';
    const PATIENT               = 'patients';
    const USER                  = 'users';
    const EXPENSE               = 'expenses';
    const EXPENSE_CATEGORY      = 'expense-categories';
    const CASH                  = 'cashes';
    const CHAIR                 = 'chairs';
    const COUNTRY               = 'countries';
    const STATES                = 'states';
    const CITIES                = 'cities';
    const QUOTES                = 'quotes';
    const QUOTE_ITEMS           = 'quote-items';
    const PIPELINES             = 'pipelines';
    const STAGES                = 'stages';
    const CARDS                 = 'cards';
    const CARD_EVENTS           = 'card-events';


    // -- all permissions
    const ALL_PERMISSIONS = [

        // -- all admin permissions
        RoleProfileService::DENTIST_ADMIN => [

            self::ACTION_LIST => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::USER,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CASH,
                self::CHAIR,
                self::COUNTRY,
                self::STATES,
                self::CITIES,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_CREATE => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::USER,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CASH,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_STORE => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::USER,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CASH,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_SHOW => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::USER,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CASH,
                self::COUNTRY,
                self::STATES,
                self::CITIES,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_EDIT => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::USER,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CASH,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_UPDATE => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::USER,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CASH,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_DESTROY => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::USER,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CASH,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_FORCE_DESTROY => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::USER,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CASH,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_RESTORE => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::USER,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CASH,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_LOGIN => [self::USER],

            self::ACTION_LOGOUT => self::NO_PREFIX,
        ],

        // -- all dentist permissions
        RoleProfileService::DENTIST => [

            self::ACTION_LIST => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_CREATE => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_STORE => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_SHOW => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_EDIT => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_UPDATE => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::USER,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_DESTROY => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_FORCE_DESTROY => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_RESTORE => [
                self::DASHBOARD,
                self::PLAN,
                self::CATEGORY,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::CHAIR,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_LOGIN => [self::USER],

            self::ACTION_LOGOUT => self::NO_PREFIX,
        ],

        // -- all secretary permissions
        RoleProfileService::SECRETARY => [

            self::ACTION_LIST => [
                self::DASHBOARD,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::COUNTRY,
                self::STATES,
                self::CITIES,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_CREATE => [
                self::DASHBOARD,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_STORE => [
                self::DASHBOARD,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_SHOW => [
                self::DASHBOARD,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::COUNTRY,
                self::STATES,
                self::CITIES,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_EDIT => [
                self::DASHBOARD,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_UPDATE => [
                self::DASHBOARD,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::USER,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_DESTROY => [
                self::DASHBOARD,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_FORCE_DESTROY => [
                self::DASHBOARD,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_RESTORE => [
                self::DASHBOARD,
                self::PATIENT,
                self::EXPENSE,
                self::EXPENSE_CATEGORY,
                self::QUOTES,
                self::QUOTE_ITEMS,
            ],

            self::ACTION_LOGIN => [self::USER],

            self::ACTION_LOGOUT => self::NO_PREFIX,
        ],

        // -- all student permissions
        RoleProfileService::STUDENT => [

            self::ACTION_LIST => [
                self::COUNTRY,
                self::STATES,
                self::CITIES,
            ],

            self::ACTION_CREATE => [
                //
            ],

            self::ACTION_STORE => [
                //
            ],

            self::ACTION_SHOW => [
                self::COUNTRY,
                self::STATES,
                self::CITIES,
            ],

            self::ACTION_EDIT => [
                //
            ],

            self::ACTION_UPDATE => [
                //
            ],

            self::ACTION_DESTROY => [
                //
            ],

            self::ACTION_FORCE_DESTROY => [
                //
            ],

            self::ACTION_RESTORE => [
                //
            ],

            self::ACTION_LOGIN => [self::USER],

            self::ACTION_LOGOUT => self::NO_PREFIX,
        ],

    ];

}
