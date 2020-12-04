<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LbtTemplate;

class TemplateController extends Controller
{
    public function index() {
        $templates = LbtTemplate::orderBy('name')->get();
        return view('templates.index', compact('templates'));
    }

    public function create() {
        return view('templates.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|numeric'
        ]);

        $t = LbtTemplate::create($request->all());

        return redirect("/templates/$t->id")->with('Info','You have created a new Lab Test Template. Next, add the test items.');
    }

    public function show(LbtTemplate $template) {
        return view('templates.view', compact('template'));
    }

    public function addItem(Request $request) {
        $this->validate($request, [
            'test' => 'required'
        ]);

        \App\TemplateItem::create($request->all());

        return redirect("/templates/{$request['lbt_template_id']}")->with('Info','Templated Item added.');
    }

    public function updateItem(Request $request) {
        $item = \App\TemplateItem::find($request['id']);
        $item->update([
            'test' => $request['test'],
            'normal'=> $request['normal']
        ]);

        return redirect("/templates/$item->lbt_template_id")->with('Info', 'Template item updated.');
    }

    public function update(LbtTemplate $template, Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|numeric'
        ]);

        $template->update($request->all());

        return redirect("/templates/$template->id")->with('Info', 'Template has been updated.');
    }
}
