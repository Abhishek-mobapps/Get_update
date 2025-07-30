<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use App\Services\HeroService;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    protected $heroService;

    public function __construct(HeroService $heroService)
    {
        $this->heroService = $heroService;
    }

    public function index()
    {
        $heroes = $this->heroService->getAll();
        return view('frontend.defaultpage.index', compact('heroes'));
    }

    public function create()
    {
        return view('frontend.defaultpage.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'header_logo' => 'nullable|string',
            'nav1' => 'nullable|string',
            'nav2' => 'nullable|string',
            'nav3' => 'nullable|string',
            'nav4' => 'nullable|string',
            'button' => 'nullable|string',
            'main_image' => 'nullable|string',
            'icon1' => 'nullable|string',
            'icon2' => 'nullable|string',
            'icon3' => 'nullable|string',
            'icon4' => 'nullable|string',
            'icon5' => 'nullable|string',
            'icon_text1' => 'nullable|string',
            'icon_text2' => 'nullable|string',
            'icon_text3' => 'nullable|string',
            'icon_text4' => 'nullable|string',
            'icon_text5' => 'nullable|string',
            'side_logo' => 'nullable|string',
            'side_content' => 'nullable|string',
            'side_info' => 'nullable|string',
            'email' => 'nullable|email',
            'phone_no' => 'nullable|string',
            'address' => 'nullable|string',
            'social_text' => 'nullable|string',
            'social_icon1' => 'nullable|string',
            'social_icon2' => 'nullable|string',
            'social_icon3' => 'nullable|string',
            'social_icon4' => 'nullable|string',
        ]);

        $this->heroService->create($data);
        return redirect()->route('admin.hero.index')->with('success', 'Hero Created!');
    }

    public function edit(Hero $hero)
    {
        return view('frontend.defaultpage.index', compact('hero'));
    }

    public function update(Request $request, Hero $hero)
    {
            $data = $request->validate([
            'header_logo' => 'nullable|string',
            'nav1' => 'nullable|string',
            'nav2' => 'nullable|string',
            'nav3' => 'nullable|string',
            'nav4' => 'nullable|string',
            'button' => 'nullable|string',
            'main_image' => 'nullable|string',
            'icon1' => 'nullable|string',
            'icon2' => 'nullable|string',
            'icon3' => 'nullable|string',
            'icon4' => 'nullable|string',
            'icon5' => 'nullable|string',
            'icon_text1' => 'nullable|string',
            'icon_text2' => 'nullable|string',
            'icon_text3' => 'nullable|string',
            'icon_text4' => 'nullable|string',
            'icon_text5' => 'nullable|string',
            'side_logo' => 'nullable|string',
            'side_content' => 'nullable|string',
            'side_info' => 'nullable|string',
            'email' => 'nullable|email',
            'phone_no' => 'nullable|string',
            'address' => 'nullable|string',
            'social_text' => 'nullable|string',
            'social_icon1' => 'nullable|string',
            'social_icon2' => 'nullable|string',
            'social_icon3' => 'nullable|string',
            'social_icon4' => 'nullable|string',
        ]);
        $this->heroService->update($hero, $data);
        return redirect()->route('admin.hero.index')->with('success', 'Hero Updated!');
    }

    public function destroy(Hero $hero)
    {
        $this->heroService->delete($hero);
        return redirect()->route('admin.hero.index')->with('success', 'Hero Deleted!');
    }
}
