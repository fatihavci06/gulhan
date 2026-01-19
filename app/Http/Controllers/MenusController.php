<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\ToastController;

class MenusController extends ToastController
{
    public $redirectTo;
    public $catchErr;

    public function __construct(){
        $this->redirectTo = redirect()->route('admin.menus.index');
        $this->catchErr = "Bilinmeyen hata";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::with('menu')->orderBy('position', 'ASC')->get();
        return view('admin.menus.menus', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = Menu::orderBy('name', 'ASC')->get();
        return view('admin.menus.create-menu', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuRequest $request)
    {
        try{
            $maxPosition = Menu::orderBy('position', 'desc')->first();
            if(!$maxPosition){
                $position = 1;
            }else{
                $position = $maxPosition->position + 1;
            }
            
            Menu::create([
                'name' => $request->name,
                'menu_id' => $request->menu_id,
                'position' => $position
            ]);

            return $this->success($this->redirectTo, "Menü eklendi");
        }catch(Exception $err){
            return $this->error($this->redirectTo, $this->catchErr);
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
        $menu = Menu::findOrFail($id);

        return view('admin.menus.edit-menu', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Menu::findOrFail($id)->update([
            'name' => $request->name,
        ]);

        return $this->success($this->redirectTo, "Menü düzenlendi");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Menu::findOrFail($id)->delete();

        return $this->success($this->redirectTo, "Menü kaldırıldı");
    }
}
