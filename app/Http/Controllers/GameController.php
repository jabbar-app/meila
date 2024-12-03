<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Score;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GameController extends Controller
{
    public function index()
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->get();
        $comments = Comment::latest()->get();

        return view('landing', compact('gallery', 'comments'));
    }

    public function submitScore(Request $request)
    {
        $request->validate([
            'score' => 'required|integer',
            'player_name' => 'required|string|max:255',
            'device_identifier' => 'required|string|max:255', // Added validation for device identifier
        ]);

        $score = $request->input('score');
        $playerName = $request->input('player_name');
        $deviceIdentifier = $request->input('device_identifier');

        Log::info('Score submission received:', [
            'score' => $score,
            'player_name' => $playerName,
            'device_identifier' => $deviceIdentifier,
        ]);

        try {
            Score::create([
                'player_name' => $playerName,
                'attempts' => $score,
                'device_identifier' => $deviceIdentifier, // Store device identifier
            ]);

            $leaderboard = Score::orderBy('attempts', 'asc')
                ->get()
                ->map(function ($score) {
                    return "<tr><td>{$score->player_name}</td><td class='text-center'>{$score->attempts}</td></tr>";
                })
                ->implode('');

            Log::info('Generated leaderboard HTML:', [
                'leaderboard' => $leaderboard,
            ]);

            return response()->json(['leaderboard' => $leaderboard]);
        } catch (QueryException $e) {
            if ($e->getCode() === '23000') { // SQLSTATE code for duplicate entry
                return response()->json(['error' => 'Player has already submitted a score from this device.'], 400);
            }

            Log::error('Error saving score:', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'An error occurred while saving the score.'], 500);
        }
    }

    public function leaderboard()
    {
        $scores = Score::orderBy('score', 'desc')->get();
        return view('leaderboard', compact('scores'));
    }

    public function checkDeviceIdentifier(Request $request)
    {
        $deviceIdentifier = $request->input('device_identifier');

        // Check if device identifier exists in the database
        $exists = Score::where('device_identifier', $deviceIdentifier)->exists();

        return response()->json(['exists' => $exists]);
    }

    public function getLeaderboard()
    {
        // Fetch the leaderboard data
        $leaderboard = Score::orderBy('attempts', 'asc')
            ->get()
            ->map(function ($score) {
                return "<tr><td>{$score->player_name}</td><td class='text-center'>{$score->attempts}</td></tr>";
            })
            ->implode('');

        // Return the data as JSON
        return response()->json(['leaderboard' => $leaderboard]);
    }
}
