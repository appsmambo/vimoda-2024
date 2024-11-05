<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\BannerHome;
use App\Models\Catalogo;

class BackendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.index');
    }

    public function home()
    {
        $banners = BannerHome::select('id', 'titulo', 'imagen', 'enlace', 'orden')->Where('orden', '>', 0)->orderBy('orden')->get();
        return view('backend.home', ['banners' => $banners]);
    }

    public function homeNew()
    {
        return view('backend.homeNew');
    }

    public function sendHome(Request $request)
    {
        $msg = '';
        $titulo = $request->input('titulo', null);
        $enlace = $request->input('enlace', '');

        // validaciones
        if ($titulo == null) {
            $msg .= "Falta el Título. \n";
        }

        if (!$request->hasFile('banner') || !$request->file('banner')->isValid()) {
            $msg .= 'Problemas con el archivo, vuelva a intentarlo.';
        }

        if ($msg != '') {
            $request->session()->flash('status', $msg);
            return redirect()->back();
        }

        $path = $request->file('banner')->store('public/banner_home');

        // incrementar valor de orden
        DB::table('banner_homes')->increment('orden');

        // crear registro de banner
        $banner = new BannerHome([
            'titulo' => $titulo,
            'enlace' => $enlace,
            'imagen' => $path,
            'orden' => 1
        ]);
        $banner->save();

        $msg = 'El banner se almacenó correctamente.';
        $request->session()->flash('status', $msg);
        return redirect()->route('admin.home');
    }

    public function sendHomeOrden(Request $request)
    {
        $id = $request->input('id', null);
        $orden = $request->input('orden', null);
        $orden = $orden > 99 ? 99 : $orden;
        if ($id && $orden) {
            $banner = BannerHome::find($id);
            $banner->orden = $orden;
            $banner->save();
        }

        return redirect()->route('admin.home');
    }

    public function hideBannerHome(Request $request)
    {
        $id = $request->input('id', null);
        if ($id != null) {
            $banner = BannerHome::findOrFail($id)->delete();
        }

        return redirect()->route('admin.home');
    }

    public function catalogo()
    {
        $catalogos = catalogo::select('id', 'titulo', 'imagen', 'enlace')->orderBy('id', 'DESC')->get();
        return view('backend.catalogo', ['catalogos' => $catalogos]);
    }

    public function catalogoNew()
    {
        return view('backend.catalogoNew');
    }

    public function sendCatalogo(Request $request)
    {
        $msg = '';
        $titulo = $request->input('titulo', null);
        $enlace = $request->input('enlace', null);

        // validaciones
        if (!$titulo) {
            $msg .= "Falta el Título. \n";
        }

        if (!$request->hasFile('catalogo') || !$request->file('catalogo')->isValid()) {
            $msg .= 'Problemas con el archivo, vuelva a intentarlo.';
        }

        if (!$enlace) {
            $msg .= "Falta el enlace del catálogo. \n";
        }

        if ($msg != '') {
            $request->session()->flash('status', $msg);
            return redirect()->back();
        }

        $path = $request->file('catalogo')->store('public/catalogo');

        // crear registro de catalogo
        $catalogo = new Catalogo([
            'titulo' => $titulo,
            'enlace' => $enlace,
            'imagen' => $path
        ]);
        $catalogo->save();

        $msg = 'El catálogo se almacenó correctamente.';
        $request->session()->flash('status', $msg);
        return redirect()->route('admin.catalogo');
    }

    public function deleteCatalogo(Request $request)
    {
        $id = $request->input('id', null);
        if ($id != null) {
            $banner = Catalogo::findOrFail($id)->delete();
        }

        return redirect()->route('admin.catalogo');
    }
}

