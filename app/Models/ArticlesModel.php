<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArticlesModel extends Model
{
    /**
     * Articles group.
     */
    public static function get_articles_group($group_key = null, $id_group_relation = null)
    {
        $query = DB::table('articles_groups');
        $query->where('key', $group_key);
        if ($id_group_relation) {
            $query->where('id_group_relation', $id_group_relation);
        }
        $result = $query->first();
      
        return $result;
    }
  
  
  
    /**
     * Articles groups.
     */
    public static function get_articles_groups($group_key = null)
    {
        $query = DB::table('articles_groups');
        $query->where('key', $group_key);
        $query->orderBy('order', 'ASC');
        $result = $query->get();
      
        return $result;
    }
  
  
  
    /**
     * Articles groups by relation.
     */
    public static function get_articles_groups_by_relation($id_group = null)
    {
        $query = DB::table('articles_groups');
        $query->where('id_group_relation', $id_group);
        $query->orderBy('order', 'ASC');
        $result = $query->get();
      
        return $result;
    }
  
  
  
    /**
     * Articles.
     */
    public static function get_articles($id_group)
    {
        $query = DB::table('articles');
        $query->where('id_group', $id_group);
        $query->orderBy('order', 'ASC');
        $result = $query->get();
      
        return $result;
    }
  
  
  
    /**
     * Articles by key.
     */
    public static function get_article_by_key($id_group, $article_key)
    {
        $query = DB::table(DB::raw('articles a'));
        $query->select(
            'a.*',
            'ag.name AS group_name'
        );
        $query->join(DB::raw('articles_groups ag'), 'ag.id_group', '=', 'a.id_group');
        $query->where('ag.id_group_relation', $id_group);
        $query->where('a.key', $article_key);
        $result = $query->first();
      
        if ($result) {
            $result->data = json_decode($result->data);
        }
      
        return $result;
    }
}
