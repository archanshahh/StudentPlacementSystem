<?php

namespace App\Http\Controllers;

use App\FAQ;
use Illuminate\Support\Facades\DB;

class FAQController extends Controller
{
    public function index()
    {
        $faqs = DB::table('faq')->paginate(5);
        return view('Admin.FAQ.index', ['faqs' => $faqs]);
    }

    public function create()
    {
        return view('Admin.FAQ.create');
    }

    public function store()
    {
        $this->validateUpdate();

        $data['question'] = request()->question;
        $data['answer'] = request()->answer;

        FAQ::create($data);

        return redirect('admin1/faqs');
    }

    public function show(FAQ $faq)
    {
        //
    }

    public function edit(FAQ $faq)
    {
        return view('Admin.FAQ.edit', compact('faq'));
    }

    public function update(FAQ $faq)
    {
        $this->validateUpdate();

        $data['question'] = request()->question;
        $data['answer'] = request()->answer;;

        $faq->update($data);
        return redirect('admin1/faqs');
    }

    public function destroy(FAQ $faq)
    {
        $faq->delete();
        return redirect('admin1/faqs')->with('success', 'FAQ has been deleted!!');
    }

    public function validateUpdate()
    {
        return request()->validate([
            'question' => 'required|min:3',
            'answer' => 'required|min:3'
        ]);
    }
}
