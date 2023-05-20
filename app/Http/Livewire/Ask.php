<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Ask extends Component
{
    public $prompt;
    public $response;
    public $chatHistory = [];

    public function ask()
    {
        $prompt = $this->prompt;
        $this->response = $this->askToChatGPT($prompt);
    }

    private function askToChatGPT($prompt)
    {
        $response = Http::withoutVerifying()
            ->withHeaders([
                'Authorization' => 'Bearer ' . env('CHATGPT_API_KEY'),
                'Content-Type' => 'application/json',
            ])->post('https://api.openai.com/v1/engines/text-davinci-003/completions', [
                "prompt" => $prompt,
                "max_tokens" => 2000,
                "temperature" => 1.0,
            ]);
        $text = $response->json()['choices'][0]['text'];
        $text = nl2br(trim($text));

        $this->saveChat($prompt, $text);

        return $this->chatHistory;
    }

    private function saveChat($prompt, $text)
    {
        array_push($this->chatHistory, [
            'question' => $prompt,
            'answer' => $text,
        ]);
    }

    public function render()
    {
        //array
        return view('livewire.ask', [
            'response' => $this->response,
        ]);
    }
}
