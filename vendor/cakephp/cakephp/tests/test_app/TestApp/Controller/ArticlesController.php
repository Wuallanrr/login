<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         4.1.2
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace TestApp\Controller;

use Cake\Controller\Controller;
use TestApp\Model\Table\ArticlesTable;

class ArticlesController extends Controller
{
    /**
     * @var string
     */
    protected $modelClass = ArticlesTable::class;
}
