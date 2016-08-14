<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 2016.08.13.
 * Time: 22:14
 */

namespace App\Repositories;

use App\Http\Requests\ItemRequest;
use App\Item;

class DbItemRepository implements ItemRepositoryInterface
{

    public function create(ItemRequest $request)
    {
        Item::create($request->all());
    }

    public function get(Item $item)
    {
        // TODO: Implement get() method.
    }

    /**
     * Get all items order by id.
     *
     * @return mixed
     */
    public function all()
    {
        return Item::orderBy('id', 'DESC')->paginate(10);
    }

    public function update(Item $item, ItemRequest $request)
    {
        // TODO: Implement update() method.
    }

    public function delete(Item $item)
    {
        // TODO: Implement delete() method.
    }
}