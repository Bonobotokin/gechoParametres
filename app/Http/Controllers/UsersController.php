<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use Illuminate\Contracts\View\View;
use App\Repository\FonctionRepository;

class UsersController extends Controller
{
    protected $userRepository;
    protected $fonctionsRepository;
    protected $rolesRepository;

    public function __construct(

        UserRepository $userRepository,
        FonctionRepository $fonctionsRepository,
        RoleRepository $rolesRepository
    ) {

        $this->userRepository = $userRepository;
        $this->fonctionsRepository = $fonctionsRepository;
        $this->rolesRepository = $rolesRepository;
    }

    public function index(): View
    {
        $allUser = $this->userRepository->getAllUser();
        dd($allUser);
        return view(
            'personnels.liste',
            [
                'allUser' => $allUser,
            ]
        );
    }
}
