<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use DB;
use DataTables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        //  $this->middleware('permission:customer-list|customer-create|customer-edit|customer-delete', ['only' => ['index','store']]);
        //  $this->middleware('permission:customer-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:customer-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:customer-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Customer::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('acção', function(Customer $customer){

                        return $this->getActionColumn($customer);

                    })->addColumn('name', function(Customer $customer){

                        return $customer->name.' '.$customer->surname;

                    })
                    ->rawColumns(['acção'])
                    ->make(true);
        }

        return view('customers.index');
    }

    protected function getActionColumn($data): string
    {

        return "     <div class='dropdown mt-sm-0'>
        <a href='' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            Acção<i class='mdi mdi-chevron-down'></i>
        </a>

        <div class='dropdown-menu' style=''>
            <a class='dropdown-item' href=''>Ver</a>
            <a class='dropdown-item' href='' data-toggle='modal' data-target='.create-modal'>Editar</a>
            <a class='dropdown-item' href=''>Apagar</a>
        </div>
    </div>";

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        return view('roles.create',compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $messages = [
            'same' => 'O :attribute e :other devem ser iguais.',
            'size' => 'O :attribute deve ser exactamente :size.',
            'between' => 'O :attribute valor de :input não esta entre :min - :max.',
            'in' => 'O :attribute deve ser um dos seguintes tipos: :values',
            'required' => 'O campo :attribute é obrigatório.',
            'not_in' => 'Selecione :attribute ',
        ];

        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'phoneNumber' => 'required',
            'doctype' => 'required',
            'docNumber' => 'required',
            'nuit' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'bairro' => 'required',
            'rua' => 'required',
            'casa' => 'required',
            'email' => 'required',
            'estado' => 'required',
            'nationality'=>'required'
        ],$messages);


       Customer::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'phoneNumber' => $request->phoneNumber,
            'doctype' => $request->doctype,
            'docNumber' => $request->docNumber,
            'nuit' => $request->nuit,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'bairro' => $request->bairro,
            'rua' => $request->rua,
            'casa' => $request->casa,
            'email' => $request->email,
            'estado' => $request->estado,
            'nationality' => $request->nationality,
        ]);


        return redirect()->route('customers')
                        ->with('success','Cliente cadastrado com sucesso!!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$id)
            ->get();

        return view('roles.show',compact('role','rolePermissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();

        return view('roles.edit',compact('role','permission','rolePermissions'));
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
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')
                        ->with('success','Role updated successfully');
    }

    public function getCustomer(Request $request){

        $search = $request->search;

        if($search == ''){
           $customers = Customer::orderby('name','asc')->select('id','name')->limit(5)->get();
        }else{
           $customers = Customer::orderby('name','asc')->select('id','name')->where('name', 'like', '%' .$search . '%')->limit(5)->get();
        }

        $response = array();
        foreach($customers as $customer){
           $response[] = array(
                "id"=>$customer->id,
                "text"=>$customer->name.' '.$customer->surname
           );
        }

        echo json_encode($response);
        exit;
     }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('roles.index')
                        ->with('success','Role deleted successfully');
    }
}
