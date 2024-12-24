<?php
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

Route::get('/test-assign-role', function () {
    $user = User::find(1); // Replace with the desired user ID
    $user->assignRole('admin'); // Assign 'admin' role
    return 'Role assigned successfully!';
});

Route::get('/test-check-role', function () {
    $user = User::find(1); // Replace with the desired user ID
    if ($user->hasRole('admin')) {
        return 'User has admin role!';
    }
    return 'User does not have admin role.';
});

Route::get('/admin', function () {
    return 'Welcome, Admin!';
})->middleware('role:admin');

Route::get('/test-permission', function () {
    $user = User::find(1); // Replace with the desired user ID
    if ($user->can('edit articles')) {
        return 'User has permission to edit articles!';
    }
    return 'User does not have permission to edit articles.';
});
