<?php
// HERES CUSTOM HELPERS

if (!function_exists('appName') || !function_exists('appAlias')) {
    function appName()
    {
        return config('app.name');
    }
    function appAlias()
    {
        return config('app.alias');
    }
}

if (!function_exists(function: 'appLogo')) {
    function appLogo($mode = 'light')
    {
        if ($mode == 'light'){
            return asset('template/assets/images/logo-2-dark.png') . "?v=" . time();
        }else{
            return asset('template/assets/images/logo-2.png') . "?v=" . time();
        }
    }
}


if (!function_exists('getAccountsByRole')) {
    function getAccountsByRole($role)
    {
        return \App\Models\AccountsModel::where('role', $role)->get();
    }
}

if (!function_exists('getAccountByEmail')) {
    function getAccountByEmail($email)
    {
        return \App\Models\AccountsModel::where('email', $email)->first();
    }
}


if (!function_exists('getAuthUserRole')) {
    function getAuthUserRole()
    {
        return auth()->user()->role;
    }
}
