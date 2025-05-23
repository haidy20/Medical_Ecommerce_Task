<?php

namespace App\Observers;
use App\Models\Product;
use App\Models\ProductLog;

class ProductObserver
{

public function created(Product $product)
{
    ProductLog::create([
        'product_id' => $product->id,
        'action' => 'created',
        'changed_by' => auth()->id(),
        'changes' => json_encode($product->toArray())
    ]);
}

public function updated(Product $product)
{
    $original = $product->getOriginal();
    $changes = $product->getChanges();

    ProductLog::create([
        'product_id' => $product->id,
        'action' => 'updated',
        'changed_by' => auth()->id(),
        'changes' => json_encode([
            'old' => $original,
            'new' => $changes
        ])
    ]);
}

public function deleted(Product $product)
{
    ProductLog::create([
        'product_id' => $product->id,
        'action' => 'deleted',
        'changed_by' => auth()->id(),
        'changes' => json_encode($product->toArray())
    ]);
}
}