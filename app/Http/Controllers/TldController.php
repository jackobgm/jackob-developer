<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTldRequest;
use App\Http\Requests\UpdateTldRequest;
use App\Repositories\TldRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TldController extends AppBaseController
{
    /** @var  TldRepository */
    private $tldRepository;

    public function __construct(TldRepository $tldRepo)
    {
        $this->tldRepository = $tldRepo;
    }

    /**
     * Display a listing of the Tld.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tlds = $this->tldRepository->all();

        return view('tlds.index')
            ->with('tlds', $tlds);
    }

    /**
     * Show the form for creating a new Tld.
     *
     * @return Response
     */
    public function create()
    {
        return view('tlds.create');
    }

    /**
     * Store a newly created Tld in storage.
     *
     * @param CreateTldRequest $request
     *
     * @return Response
     */
    public function store(CreateTldRequest $request)
    {
        $input = $request->all();

        $tld = $this->tldRepository->create($input);

        Flash::success('Tld saved successfully.');

        return redirect(route('tlds.index'));
    }

    /**
     * Display the specified Tld.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tld = $this->tldRepository->find($id);

        if (empty($tld)) {
            Flash::error('Tld not found');

            return redirect(route('tlds.index'));
        }

        return view('tlds.show')->with('tld', $tld);
    }

    /**
     * Show the form for editing the specified Tld.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tld = $this->tldRepository->find($id);

        if (empty($tld)) {
            Flash::error('Tld not found');

            return redirect(route('tlds.index'));
        }

        return view('tlds.edit')->with('tld', $tld);
    }

    /**
     * Update the specified Tld in storage.
     *
     * @param int $id
     * @param UpdateTldRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTldRequest $request)
    {
        $tld = $this->tldRepository->find($id);

        if (empty($tld)) {
            Flash::error('Tld not found');

            return redirect(route('tlds.index'));
        }

        $tld = $this->tldRepository->update($request->all(), $id);

        Flash::success('Tld updated successfully.');

        return redirect(route('tlds.index'));
    }

    /**
     * Remove the specified Tld from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tld = $this->tldRepository->find($id);

        if (empty($tld)) {
            Flash::error('Tld not found');

            return redirect(route('tlds.index'));
        }

        $this->tldRepository->delete($id);

        Flash::success('Tld deleted successfully.');

        return redirect(route('tlds.index'));
    }
}
