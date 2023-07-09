<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Requests\StoreSkillRequest;
use App\Models\Skill;
use App\Http\Resources\V1\SkillResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return SkillResource::collection(Skill::all());
    }

    public function show(Skill $skill)
    {
        return new SkillResource($skill);
    }

    public function store(StoreSkillRequest $request)
    {
        Skill::create($request->validated());
        return response()->json([
            'message' => 'Skill created successfully!'
        ]);
    }

    public function update(StoreSkillRequest $request, Skill $skill)
    {
        $skill->update($request->validated());

        return response()->json([
            'message' => 'Skill updated successfully!'
        ]);
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return response()->json([
            'message' => 'Skill deleted successfully!'
        ]);
    }
}
