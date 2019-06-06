composer require laravel/framework

INSERT INTO `members` (`id`, `name`, `gender`, `dob`, `phone`, `position`, `key`, `type`, `created_at`, `updated_at`) VALUES (NULL, 'LEADER', '1', '1992-06-06', '088 878 0881', 'LEADER', 'ADMIN12345678', '1', '2019-05-07 00:00:00', NULL);


<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin;
use Illuminate\Support\Facades\Lang;

class StaffController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/staff');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function new_staff(){
        return view('admin/new_staff');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $columns = array(
            0 => 'st_name',
            1 => 'st_gender',
            2 => 'st_phone',
            3 => 'st_position',
            4 => 'st_type',
            5 => 'action'
        );

        $totalData = Admin\Staff::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value'))){
            $posts = Admin\Staff::offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();
            $totalFiltered = Admin\Staff::count();
        }else{
            $search = $request->input('search.value');
            $posts = Admin\Staff::where('st_name', 'like', "%{$search}%")
                ->orWhere('st_name_en','like',"%{$search}%")
                ->orWhere('st_gender','like',"%{$search}%")
                ->orWhere('st_phone','like',"%{$search}%")
                ->orWhere('st_position','like',"%{$search}%")
                ->orWhere('st_type','like',"%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Admin\Staff::where('st_name', 'like', "%{$search}%")
                ->orWhere('st_name_en','like',"%{$search}%")
                ->orWhere('st_gender','like',"%{$search}%")
                ->orWhere('st_phone','like',"%{$search}%")
                ->orWhere('st_position','like',"%{$search}%")
                ->orWhere('st_type','like',"%{$search}%")
                ->count();
        }

        $data = array();

        if($posts){
            foreach($posts as $r){
                $nestedData['st_name'] = '<span class ="kh-font">' .$r->st_name. '</span>&nbsp;&nbsp;( ' .$r->st_name_en. ' )';

                $gender = '<span class="' .Lang::get('build.kh_font').'">' . Lang::get('build.female') . '</span>';
                if($r->st_gender == 1){
                    $gender = '<span class="' .Lang::get('build.kh_font').'">' . Lang::get('build.male') . '</span>';
                }


                $nestedData['st_gender'] = $gender;
                $nestedData['st_phone'] = $r->st_phone;
                $nestedData['st_position'] = $r->st_position;
                $nestedData['st_type'] = $r->st_type;
                //$nestedData['created_at'] = date('d-m-Y H:i:s',strtotime($r->created_at));
                $nestedData['action'] = '
					<a href="#!" class="btn btn-warning btn-xs">Edit</a>
					<a href="#!" class="btn btn-danger btn-xs">Delete</a>
				';
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"			    => intval($request->input('draw')),
            "recordsTotal"	    => intval($totalData),
            "recordsFiltered"   => intval($totalFiltered),
            "data"			    => $data
        );

        echo json_encode($json_data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
