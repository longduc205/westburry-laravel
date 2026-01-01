<?php

/**
 * Lọc users theo role
 * 
 * @param array $users Mảng các user
 * @param string $role Role cần lọc (admin hoặc staff)
 * @return array Mảng users đã được lọc
 */
function filterByRole(array $users, string $role): array
{
    return array_filter($users, function ($user) use ($role) {
        return isset($user['role']) && $user['role'] === $role;
    });
}

/**
 * Lọc users theo trạng thái active
 * 
 * @param array $users Mảng các user
 * @return array Mảng users có active = true
 */
function filterActive(array $users): array
{
    return array_filter($users, function ($user) {
        return isset($user['active']) && $user['active'] === true;
    });
}

/**
 * Sắp xếp users theo tên tăng dần (A-Z)
 * 
 * @param array $users Mảng các user
 * @return array Mảng users đã được sắp xếp theo name
 */
function sortByNameAsc(array $users): array
{
    usort($users, function ($a, $b) {
        $nameA = isset($a['name']) ? $a['name'] : '';
        $nameB = isset($b['name']) ? $b['name'] : '';
        return strcmp($nameA, $nameB);
    });
    
    return $users;
}

