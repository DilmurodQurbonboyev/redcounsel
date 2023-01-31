<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use App\Services\MessageService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    private MessageService $service;
    public function __construct(MessageService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('admin.messages.index');
    }

    public function create()
    {
        return view('admin.messages.create');
    }

    /**
     * @throws \Exception
     */
    public function store(Request $request): RedirectResponse
    {
        Message::query()
            ->create([
                'oz' => [
                    'title' => $request->title_oz,
                ],
                'uz' => [
                    'title' => $request->title_uz,
                ],
                'ru' => [
                    'title' => $request->title_ru,
                ],
                'en' => [
                    'title' => $request->title_en,
                ],
                'key' => $request->key,
            ]);

        $this->service::messagesSetCache();
        return redirect()
            ->route('messages.index')
            ->with('success', tr('Successfully saved'));
    }

    public function show($id)
    {
        $messages = Message::query()
            ->findOrFail($id);
        return view('admin.messages.show', compact('messages'));
    }

    public function edit($id)
    {
        $messages = Message::query()
            ->findOrFail($id);
        return view('admin.messages.edit', compact('messages'));
    }

    /**
     * @throws \Exception
     */
    public function update(Request $request, $id)
    {
        Message::query()
            ->findOrFail($id)
            ->update([
                'oz' => [
                    'title' => $request->title_oz,
                ],
                'uz' => [
                    'title' => $request->title_uz,
                ],
                'ru' => [
                    'title' => $request->title_ru,
                ],
                'en' => [
                    'title' => $request->title_en,
                ],
                'key' => $request->key,
            ]);

        $this->service::messagesSetCache();
        return redirect()
            ->route('messages.show', $id)
            ->with('success', tr('Successfully saved'));
    }

    public function destroy($id)
    {
        Message::query()
            ->findOrFail($id)
            ->delete();
        return redirect()
            ->route('messages.index');
    }
}
