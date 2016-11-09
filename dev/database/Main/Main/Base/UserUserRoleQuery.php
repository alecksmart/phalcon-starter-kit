<?php

namespace Main\Main\Base;

use \Exception;
use Main\Main\UserUserRole as ChildUserUserRole;
use Main\Main\UserUserRoleQuery as ChildUserUserRoleQuery;
use Main\Main\Map\UserUserRoleTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'user_user_role' table.
 *
 *
 *
 * @method     ChildUserUserRoleQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     ChildUserUserRoleQuery orderByUserRoleId($order = Criteria::ASC) Order by the user_role_id column
 *
 * @method     ChildUserUserRoleQuery groupByUserId() Group by the user_id column
 * @method     ChildUserUserRoleQuery groupByUserRoleId() Group by the user_role_id column
 *
 * @method     ChildUserUserRoleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildUserUserRoleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildUserUserRoleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildUserUserRoleQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildUserUserRoleQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildUserUserRoleQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildUserUserRoleQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     ChildUserUserRoleQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     ChildUserUserRoleQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     ChildUserUserRoleQuery joinWithUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the User relation
 *
 * @method     ChildUserUserRoleQuery leftJoinWithUser() Adds a LEFT JOIN clause and with to the query using the User relation
 * @method     ChildUserUserRoleQuery rightJoinWithUser() Adds a RIGHT JOIN clause and with to the query using the User relation
 * @method     ChildUserUserRoleQuery innerJoinWithUser() Adds a INNER JOIN clause and with to the query using the User relation
 *
 * @method     ChildUserUserRoleQuery leftJoinUserRole($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserRole relation
 * @method     ChildUserUserRoleQuery rightJoinUserRole($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserRole relation
 * @method     ChildUserUserRoleQuery innerJoinUserRole($relationAlias = null) Adds a INNER JOIN clause to the query using the UserRole relation
 *
 * @method     ChildUserUserRoleQuery joinWithUserRole($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the UserRole relation
 *
 * @method     ChildUserUserRoleQuery leftJoinWithUserRole() Adds a LEFT JOIN clause and with to the query using the UserRole relation
 * @method     ChildUserUserRoleQuery rightJoinWithUserRole() Adds a RIGHT JOIN clause and with to the query using the UserRole relation
 * @method     ChildUserUserRoleQuery innerJoinWithUserRole() Adds a INNER JOIN clause and with to the query using the UserRole relation
 *
 * @method     \Main\Main\UserQuery|\Main\Main\UserRoleQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildUserUserRole findOne(ConnectionInterface $con = null) Return the first ChildUserUserRole matching the query
 * @method     ChildUserUserRole findOneOrCreate(ConnectionInterface $con = null) Return the first ChildUserUserRole matching the query, or a new ChildUserUserRole object populated from the query conditions when no match is found
 *
 * @method     ChildUserUserRole findOneByUserId(int $user_id) Return the first ChildUserUserRole filtered by the user_id column
 * @method     ChildUserUserRole findOneByUserRoleId(int $user_role_id) Return the first ChildUserUserRole filtered by the user_role_id column *

 * @method     ChildUserUserRole requirePk($key, ConnectionInterface $con = null) Return the ChildUserUserRole by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserUserRole requireOne(ConnectionInterface $con = null) Return the first ChildUserUserRole matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildUserUserRole requireOneByUserId(int $user_id) Return the first ChildUserUserRole filtered by the user_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUserUserRole requireOneByUserRoleId(int $user_role_id) Return the first ChildUserUserRole filtered by the user_role_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildUserUserRole[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildUserUserRole objects based on current ModelCriteria
 * @method     ChildUserUserRole[]|ObjectCollection findByUserId(int $user_id) Return ChildUserUserRole objects filtered by the user_id column
 * @method     ChildUserUserRole[]|ObjectCollection findByUserRoleId(int $user_role_id) Return ChildUserUserRole objects filtered by the user_role_id column
 * @method     ChildUserUserRole[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class UserUserRoleQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Main\Main\Base\UserUserRoleQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Main\\Main\\UserUserRole', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildUserUserRoleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildUserUserRoleQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildUserUserRoleQuery) {
            return $criteria;
        }
        $query = new ChildUserUserRoleQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildUserUserRole|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The UserUserRole object has no primary key');
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        throw new LogicException('The UserUserRole object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildUserUserRoleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The UserUserRole object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildUserUserRoleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The UserUserRole object has no primary key');
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
     * </code>
     *
     * @see       filterByUser()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserUserRoleQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(UserUserRoleTableMap::COL_USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(UserUserRoleTableMap::COL_USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserUserRoleTableMap::COL_USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the user_role_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserRoleId(1234); // WHERE user_role_id = 1234
     * $query->filterByUserRoleId(array(12, 34)); // WHERE user_role_id IN (12, 34)
     * $query->filterByUserRoleId(array('min' => 12)); // WHERE user_role_id > 12
     * </code>
     *
     * @see       filterByUserRole()
     *
     * @param     mixed $userRoleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUserUserRoleQuery The current query, for fluid interface
     */
    public function filterByUserRoleId($userRoleId = null, $comparison = null)
    {
        if (is_array($userRoleId)) {
            $useMinMax = false;
            if (isset($userRoleId['min'])) {
                $this->addUsingAlias(UserUserRoleTableMap::COL_USER_ROLE_ID, $userRoleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userRoleId['max'])) {
                $this->addUsingAlias(UserUserRoleTableMap::COL_USER_ROLE_ID, $userRoleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserUserRoleTableMap::COL_USER_ROLE_ID, $userRoleId, $comparison);
    }

    /**
     * Filter the query by a related \Main\Main\User object
     *
     * @param \Main\Main\User|ObjectCollection $user The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildUserUserRoleQuery The current query, for fluid interface
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof \Main\Main\User) {
            return $this
                ->addUsingAlias(UserUserRoleTableMap::COL_USER_ID, $user->getId(), $comparison);
        } elseif ($user instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UserUserRoleTableMap::COL_USER_ID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUser() only accepts arguments of type \Main\Main\User or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the User relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildUserUserRoleQuery The current query, for fluid interface
     */
    public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('User');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'User');
        }

        return $this;
    }

    /**
     * Use the User relation User object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Main\Main\UserQuery A secondary query class using the current class as primary query
     */
    public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'User', '\Main\Main\UserQuery');
    }

    /**
     * Filter the query by a related \Main\Main\UserRole object
     *
     * @param \Main\Main\UserRole|ObjectCollection $userRole The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildUserUserRoleQuery The current query, for fluid interface
     */
    public function filterByUserRole($userRole, $comparison = null)
    {
        if ($userRole instanceof \Main\Main\UserRole) {
            return $this
                ->addUsingAlias(UserUserRoleTableMap::COL_USER_ROLE_ID, $userRole->getId(), $comparison);
        } elseif ($userRole instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UserUserRoleTableMap::COL_USER_ROLE_ID, $userRole->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUserRole() only accepts arguments of type \Main\Main\UserRole or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UserRole relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildUserUserRoleQuery The current query, for fluid interface
     */
    public function joinUserRole($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UserRole');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'UserRole');
        }

        return $this;
    }

    /**
     * Use the UserRole relation UserRole object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Main\Main\UserRoleQuery A secondary query class using the current class as primary query
     */
    public function useUserRoleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUserRole($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UserRole', '\Main\Main\UserRoleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildUserUserRole $userUserRole Object to remove from the list of results
     *
     * @return $this|ChildUserUserRoleQuery The current query, for fluid interface
     */
    public function prune($userUserRole = null)
    {
        if ($userUserRole) {
            throw new LogicException('UserUserRole object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the user_user_role table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(UserUserRoleTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            UserUserRoleTableMap::clearInstancePool();
            UserUserRoleTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(UserUserRoleTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(UserUserRoleTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            UserUserRoleTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            UserUserRoleTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // UserUserRoleQuery
