<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\EmployeeRequest;
use App\Employee;
use App\Helpers\RestHelper;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;

class EmployeeController extends Controller
{
    /**
     * Start action, use to show all employees inside the database
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        return RestHelper::get(Employee::class);
    }
    /**
     * Show the form for creating a new employee.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Action to be execute to store a newly created employee in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(EmployeeRequest $request)
    {
        return RestHelper::store(Employee::class,$request->all());
    }
    /**
     * Display the specified employee. given the ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return RestHelper::show(Employee::class,$id);
    }
    /**
     * Show the form for editing the specified employee.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }
    /**
     * Update the specified employee in databse.
     *
     * @param EmployeeRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(EmployeeRequest $request, $id)
    {
        return RestHelper::update(Employee::class,$request->all(),$id);
    }
    /**
     * Remove the specified employee from database given his id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        return RestHelper::destroy(Employee::class,$id);
    }
}
