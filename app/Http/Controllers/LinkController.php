<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::orderBy('created_at', 'desc')->get();
        return view('links.index', compact('links'));
    }

    public function create()
    {
        return view('links.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $baseUrl = 'https://meila.jabbar.id/?invite=';
        $generatedLink = $baseUrl . urlencode($request->prefix . ' ' . $request->name);

        $link = Link::create([
            'prefix' => $request->prefix,
            'name' => $request->name,
            'link' => $generatedLink,
        ]);

        return redirect()->route('links.index')->with('success', 'Link generated successfully!');
    }


    public function show(Link $link)
    {
        return view('links.show', compact('link'));
    }

    public function edit(Link $link)
    {
        return view('links.edit', compact('link'));
    }

    public function update(Request $request, Link $link)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $baseUrl = 'https://meila.jabbar.id/?invite=';
        $generatedLink = $baseUrl . urlencode($request->prefix . ' ' . $request->name);

        $link->update([
            'prefix' => $request->prefix,
            'name' => $request->name,
            'link' => $generatedLink,
        ]);

        return redirect()->route('links.index')->with('success', 'Link updated successfully!');
    }


    public function destroy(Link $link)
    {
        $link->delete();
        return redirect()->route('links.index')->with('success', 'Link deleted successfully!');
    }
}
