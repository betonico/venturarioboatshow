<?php

namespace RioBoatShow\Http\Controllers;

use RioBoatShow\Http\Requests;
use RioBoatShow\Services\InvitationService;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    /**
     * @var InvitationService
     */
    private $service;

    /**
     * AdminController constructor.
     *
     * @param InvitationService $service
     */
    public function __construct(InvitationService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitations = $this->service->show();
        return view('layouts.backend.home', compact('invitations'));
    }

    /**
     * Delete data.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->service->delete($id);
        return redirect()->back();
    }

    /**
     * Export xls.
     */
    public function export()
    {
        Excel::create('rio_boat_show_2016', function ($excel) {

            $excel->sheet('Sheetname', function ($sheet) {

                $sheet->row(2, function ($row) {
                    $row->setFontFamily('Arial');
                    $row->setFontSize(15);
                    $row->setFontWeight('light');
                });

                $invitations = $this->service->show()->toArray();

                $sheet->appendRow(array_keys($invitations[0])); // column names

                $sheet->row($sheet->getHighestRow(), function ($row) {
                    $row->setFontWeight('bold');
                });

                foreach ($invitations as $invitation) {
                    $sheet->appendRow($invitation);
                }
            });

        })->export('xls');
    }
}
