<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function home(Request $request)
    {
        // Tạo mảng users với 10 users
        $users = [
            [
                'id' => 1,
                'name' => 'Nguyễn Văn A',
                'email' => 'nguyenvana@example.com',
                'role' => 'admin',
                'active' => true,
            ],
            [
                'id' => 2,
                'name' => 'Trần Thị B',
                'email' => 'tranthib@example.com',
                'role' => 'staff',
                'active' => true,
            ],
            [
                'id' => 3,
                'name' => 'Lê Văn C',
                'email' => 'levanc@example.com',
                'role' => 'staff',
                'active' => false,
            ],
            [
                'id' => 4,
                'name' => 'Phạm Thị D',
                'email' => 'phamthid@example.com',
                'role' => 'admin',
                'active' => true,
            ],
            [
                'id' => 5,
                'name' => 'Hoàng Văn E',
                'email' => 'hoangvane@example.com',
                'role' => 'staff',
                'active' => true,
            ],
            [
                'id' => 6,
                'name' => 'Vũ Thị F',
                'email' => 'vuthif@example.com',
                'role' => 'staff',
                'active' => false,
            ],
            [
                'id' => 7,
                'name' => 'Đặng Văn G',
                'email' => 'dangvang@example.com',
                'role' => 'admin',
                'active' => true,
            ],
            [
                'id' => 8,
                'name' => 'Bùi Thị H',
                'email' => 'buithih@example.com',
                'role' => 'staff',
                'active' => true,
            ],
            [
                'id' => 9,
                'name' => 'Đỗ Văn I',
                'email' => 'dovani@example.com',
                'role' => 'staff',
                'active' => false,
            ],
            [
                'id' => 10,
                'name' => 'Ngô Thị K',
                'email' => 'ngothik@example.com',
                'role' => 'admin',
                'active' => true,
            ]
        ];

        // Đọc query string
        $role = $request->query('role'); // ?role=admin hoặc ?role=staff
        $active = $request->query('active'); // ?active=1
        $sort = $request->query('sort'); // ?sort=name

        // Áp dụng filter theo role
        if ($role) {
            $users = filterByRole($users, $role);
        }

        // Áp dụng filter theo active
        if ($active == '1') {
            $users = filterActive($users);
        }

        // Áp dụng sort theo name
        if ($sort === 'name') {
            $users = sortByNameAsc($users);
        }

        // Reset array keys sau khi filter
        $users = array_values($users);

        return view('home', ['name' => 'Đức', 'users' => $users]);
    }
}
