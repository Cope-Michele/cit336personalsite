<?php
/// Executes an arbitrary database query.
/// Doesn't return anything (since we aren't sure the query will return anything).
/// $query - the sql statement to run.
/// $params (array) - the parameters to bind to the query.
function DbExecute($query, $params = null)
{
    global $db;
    try 
    {
        $statement = $db->prepare($query);
        
        if (is_array($params))
        {
            foreach ($params as $key => $value)
            {
                $statement->bindValue($key, $value);
            }
        }
        
        $statement->Execute();
    }
    catch (Exception $e)
    {
        echo "Database exception, try again later.";
        error_log($e);
        exit();
    }
    return $statement->rowCount();
}
/// Runs an INSERT statement
/// Returns the ID of the inserted item.
/// $query - the sql statement to run.
/// $params (array) - the parameters to bind to the query.
function DbInsert($query, $params = null)
{
    global $db;
    $return = false;
    
    try
    {
        $statement = $db->prepare($query);
        
        if (is_array($params))
        {
            foreach ($params as $key => $value)
            {
                $statement->bindValue($key, $value);
            }
        }
        
        $statement->Execute();
        $return = $db->lastInsertId();
    }
    catch (Exception $e)
    {
        echo "Database insert exception, please try again later.";
        error_log($e);
        exit();
    }
    
    return $return;
}
/// Runs a SELECT statement
/// Returns an array containing the matching rows.
/// $query - the sql statement to run.
/// $params (array) - the parameters to bind to the query.
function DbSelect($query, $params = null)
{
    
    echo $query;
    global $db;
    $return = array();
    try 
    {
            echo 'inside dbselect1';
        $statement = $db->prepare($query);
                    echo 'inside dbselect2';
        if (is_array($params))
        {
            foreach ($params as $key => $value)
            {
                $statement->bindValue($key, $value);
            }
        }
        
        $statement->Execute();
        echo 'before while';
        while ($row = $statement->fetch())
        {   echo 'inside while';
            $return[] = $row;
            echo 'inside dbselect5';
        }
    }
    catch (Exception $e)
    {
        echo "Database exception, try again later.";
        error_log($e);
        exit();
    }
    echo 'about to return from dbselect';
    return $return;
}
?>
