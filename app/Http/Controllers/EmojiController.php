<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MshopEmojiUserProductRelation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class EmojiController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return boolean
     */
    public function add(string $product_id, $emojiId): bool
    {
        if($userId = Auth::id()){
            $alreadyAdded = MshopEmojiUserProductRelation::where( 'user_id', $userId )->where( 'product_id', $product_id )->first();

            if($alreadyAdded && $alreadyAdded->exists()){
                $alreadyAdded->emoji_id = $emojiId;
                return $alreadyAdded->save();
            }

            $model = new MshopEmojiUserProductRelation;
            $model->user_id = $userId;
            $model->product_id = $product_id;
            $model->emoji_id = $emojiId;

            return $model->save();
        }

        return false;
    }

    /**
     * delete all emojis for current product
     *
     * @return bool|\Illuminate\Http\RedirectResponse
     */
    protected function deleteProductEmojis( string $id )
    {
        $purge = false;
        if(Auth::check() && Auth::user()->superuser == 1) {
            $purge = MshopEmojiUserProductRelation::where( 'product_id', $id )->delete();
        }

        if( $purge ) {
            return Redirect::back()->with('success', 'Emojies was purged succesfully');
        } else {
            return Redirect::back()->with('success', 'Emojies was not purged');
        }
    }
}
