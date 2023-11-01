<?php

namespace App\Http\Controllers;

use App\Action\PersonnelsAction;
use App\Http\Requests\StorePersonnelsRequest;
use App\Repository\FonctionRepository;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Repository\PersonnelRepository;
use App\Repository\RoleRepository;

class PersonnelController extends Controller
{

    protected $personnelRepository;
    protected $fonctionsRepository;
    protected $rolesRepository;

    public function __construct(

        PersonnelRepository $personnelRepository,
        FonctionRepository $fonctionsRepository,
        RoleRepository $rolesRepository
    ) {

        $this->personnelRepository = $personnelRepository;
        $this->fonctionsRepository = $fonctionsRepository;
        $this->rolesRepository = $rolesRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $allPersonnels = $this->personnelRepository->getAllPersonnels();

        return view(
            'personnels.liste',
            [
                'allPersonnels' => $allPersonnels,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        $fonction = $this->fonctionsRepository->getAll();

        $role = $this->rolesRepository->getAllRoles();

        return view(
            'personnels.creer',
            [

                'allFonctions' => $fonction,
                'allRoles' => $role
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, PersonnelsAction $action)
    {
        try {

            $response_action = $action->saveCompte($request);
            if (!is_null($response_action['data'])) {

                return redirect()->route('personnel.liste', ['reponse' => $response_action])->with('success', $response_action['message']);
            } else {

                return redirect()->route('personnel.create', ['reponse' => $response_action])->with('errors', $response_action['message']);
            }
        } catch (\exception $th) {
            //throw $th;
            return $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
