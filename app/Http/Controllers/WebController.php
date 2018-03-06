<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Models\ArticlesModel;

class WebController extends Controller
{
    public function __construct()
    {
      // Get all articles groups
      $article_groups = ArticlesModel::get_articles_groups_by_relation();
      foreach ($article_groups as $item) {
          if ($item->dropdown) {
              $item->subgroups = ArticlesModel::get_articles_groups_by_relation($item->id_group);
          }
      }

      // Sharing is caring
      \View::share('article_groups', $article_groups);
    }
  
  
  
    /**
     * Homepage.
     */
    public function homepage()
    {
        return view('index', [
          
        ]);
    }
  
  
  
    /**
     * Articles groups.
     */
    public function articles_groups($group_key = null)
    {
        $title = '';
        $groups = [];
        if (!is_null($group_key)) {
            $title = 'Podkategorija ' . $group_key; // Sve podkategorije glavne kategorije
        }
        else {
            $title = 'Asortiman'; // Sve glavne kategorije
        }
        $group = ArticlesModel::get_articles_group($group_key); // Dohvat trenutne kategorije iz baze
        $groups = ArticlesModel::get_articles_groups($group_key); // Dohvat glavnih kategorija iz baze
      
      
        if ($group && !$group->dropdown) {
            return \App::call('\App\Http\Controllers\WebController@articles_list', ['group' => $group->key, 'subgroup' => null]);
        }
        else {
            return view('articles_groups', [
                'title'  => $title,
                'groups' => $groups
            ]);
        }
    }
  
  
  
    /**
     * Articles list.
     */
    public function articles_list($group_key, $subgroup_key)
    {
        $group = ArticlesModel::get_articles_group($group_key);
        if (!$group) {
            return 'Grupa ne postoji!';
        }
        if (!is_null($subgroup_key)) {
            $subgroup = ArticlesModel::get_articles_group($subgroup_key, $group->id_group);
            if (!$subgroup) {
                return 'Pod grupa ne postoji!';
            }
        }
        else {
            $subgroup = $group;
        }
        
        $subsubgroups = ArticlesModel::get_articles_groups_by_relation($subgroup->id_group);
        foreach ($subsubgroups as $item) {
            $item->articles = ArticlesModel::get_articles($item->id_group); // Dohvat artikala po grupi i podgrupi
        }
      
        //dd('articles_list', $group_key, $subgroup_key, $subgroup, $subsubgroups);
      
        return view('articles_list', [
            'group'        => $subgroup,
            'subsubgroups' => $subsubgroups
        ]);
    }
  
  
  
    /**
     * Articles details.
     */
    public function articles_details($group_key, $article_key)
    {
        $group = ArticlesModel::get_articles_group($group_key); // Dohvat trenutne kategorije iz baze
        $article = ArticlesModel::get_article_by_key($group->id_group, $article_key); // Get article details
      
        return view('articles_details', [
            'article' => $article
        ]);
    }
  
  
  
    /**
     * Asortiman.
     */
    public function asortiman()
    {
        return view('asortiman', [
          
        ]);
    }
  
  
  
    /**
     * Partners.
     */
    public function partners()
    {
        return view('partners', [
          
        ]);
    }
  
  
  
    /**
     * About.
     */
    public function about()
    {
        return view('about', [
          
        ]);
    }
  
  
  
  
    /**
     * Contact.
     */
    public function contact()
    {
        return view('contact', [
          
        ]);
    }
}