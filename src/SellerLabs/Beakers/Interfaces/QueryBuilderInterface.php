<?php

/**
 * Copyright 2016, SellerLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the SellerLabs package
 */

namespace SellerLabs\Beakers\Interfaces;

use Illuminate\Database\Eloquent\Builder;

/**
 * Interface QueryBuilderInterface
 *
 * @author Mark Vaughn <mark@roundsphere.com>
 * @package SellerLabs\Beakers\Interfaces
 */
interface QueryBuilderInterface
{
    /**
     * Eager load a relation.
     *
     * @param $relation
     *
     * @return $this
     */
    public function with($relation);

    /**
     * Return the query.
     *
     * @return Builder
     */
    public function query();

    /**
     * Match a subterm
     *
     * @param string $column The column sto search
     * @param string $search The search value
     * @param bool|true $lhs Whether to wildcard on the left
     * @param bool|true $rhs Whether to wildcard on the right
     *
     * @return $this
     */
    public function like($column, $search, $lhs = true, $rhs = true);

    /**
     * Start creating a new query
     *
     * @return $this
     */
    public function reset();

    /**
     * Use an existing query to build off of.
     *
     * @param Builder $query
     */
    public function setQuery(Builder $query);

    /**
     * Get the results from the query that has been built and reset it.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function get();

    /**
     * Return the number of results.
     *
     * @return integer
     */
    public function count();

    /**
     * Paginate a result set and reset the query.
     *
     * @param {int} $limit
     *
     * @return \Illuminate\Pagination\Paginator|\Illuminate\Pagination\LengthAwarePaginator
     */
    public function paginate($limit);
}
