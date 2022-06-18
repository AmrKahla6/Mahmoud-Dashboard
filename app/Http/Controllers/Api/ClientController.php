<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\RegisterClient;
use App\Http\Resources\Client\ClientResource;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\backendTraits;

class ClientController extends Controller
{
    use backendTraits;
    public function getAllClients(){
        $clients = ClientResource::collection(User::get());
        return response($clients);
    }

    /**
     * @param RegisterClient $request
     * @return Response
     */
    public function clientRegister(RegisterClient $request){
        $data = $request->except(['password', 'personal_image']);
        $data['password'] = bcrypt($request->password);
        if ($request->personal_image) {
            $data['personal_image'] = $this->saveImage($request->personal_image, 'uploads/clients');
        }else{
            $data['personal_image'] = 'default.png';
        }

        $user = User::create($data);

        $respnse = [
            'status' => true,
            'meg'    => 'تم التسجيل بنجاح'
        ];

        return response($respnse);
    }
}
