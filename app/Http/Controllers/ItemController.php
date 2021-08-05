<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Http\Resources\Item as ResourcesItem;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group Item Endpoints
 *
 * API Endpoints for managing items
 */
class ItemController extends Controller
{
    /**
     * GET api/items
     * 
     * Display a listing of items.
     * 
     * @apiResourceCollection App\Http\Resources\Item
     * @apiResourceModel App\Models\Item paginate=10
     *
     * @responseField id The id of the item
     * @responseField title The name of the title
     * @responseField description The description of the title
     * @responseField created_at Timestamp title was created
     * @responseField updated_at Timestamp title was last updated
     * @responseField deleted_at Timestamp title was trashed
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get items from CACHE if exists else get items from database and add them CACHE
        $items = Cache::remember(request()->fullUrl(), 60, function() {
            return Item::paginate(10);
        });

        return ResourcesItem::collection($items);
    }

    /**
     * POST api/items
     * 
     * Store a newly created item in storage.
     * 
     * @authenticated
     * 
     * @param  \Illuminate\Http\Request  $request
     * 
     * @bodyParam title string required The title of the meal
     * @bodyParam description string The description of the meal
     * 
     * @apiResource App\Http\Resources\Item
     * @apiResourceModel App\Models\Item
     * 
     * @responseField id The id of the item
     * @responseField title The title of the item
     * @responseField description The description of the item
     * @responseField created_at Timestamp item was created
     * @responseField updated_at Timestamp item was last updated
     * @responseField deleted_at Timestamp item was trashed
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request)
    {
        $item = Item::create($request->all());

        return response()->json(new ResourcesItem($item), Response::HTTP_CREATED);
    }

    /**
     * GET api/items/{id}
     * 
     * Display the specified item.
     * 
     *
     * @param  \App\Models\Item  $item
     * 
     * @apiResource App\Http\Resources\Item
     * @apiResourceModel App\Models\Item
     * 
     * @responseField id The id of the item
     * @responseField title The title of the item
     * @responseField description The description of the item
     * @responseField created_at Timestamp item was created
     * @responseField updated_at Timestamp item was last updated
     * @responseField deleted_at Timestamp item was trashed
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return response()->json(new ResourcesItem($item), Response::HTTP_OK);
    }

    /**
     * PUT api/items/{id}
     * 
     * Update the specified item in storage.
     * 
     * @authenticated
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * 
     * @bodyParam title string required The new title of the meal
     * @bodyParam description string The new description of the meal
     * 
     * @apiResource App\Http\Resources\Item
     * @apiResourceModel App\Models\Item
     * 
     * @responseField id The id of the item
     * @responseField title The title of the item
     * @responseField description The description of the item
     * @responseField allergy The allergy the meal belongs to
     * @responseField items The url to get meal items
     * @responseField created_at Timestamp item was created
     * @responseField updated_at Timestamp item was last updated
     * @responseField deleted_at Timestamp item was trashed
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $item->update($request->all());

        return response()->json(new ResourcesItem($item), Response::HTTP_OK);
    }

    /**
     * DELETE api/items/{id}
     * 
     * Remove the specified item from storage.
     * 
     * @authenticated
     * 
     * @param  \App\Models\Item  $item
     * 
     * @apiResource App\Http\Resources\Item
     * @apiResourceModel App\Models\Item
     * 
     * @responseField id The id of the item
     * @responseField title The title of the item
     * @responseField description The description of the item
     * @responseField created_at Timestamp item was created
     * @responseField updated_at Timestamp item was last updated
     * @responseField deleted_at Timestamp item was trashed
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();

        return response()->json(new ResourcesItem($item), Response::HTTP_OK);
    }
}
