<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 08/03/16
 * Time: 11:42
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @package App
 * Class Movies
 * Modelise toutes mes requêtes concernant la table Movies
 */
class Movies extends Model
{

    /**
     * Nom de ma table
     * @var string
     */
    protected $table = "movies";
}