<?php

function select_city_by_name($city)
{
    global $db;
    $query = 'SELECT * FROM city
            where Name = :city
            order by Population DESC';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':city', $city);
    $stmt->execute();
    $results = $stmt->fetchAll();
    $stmt->closeCursor();
    return $results;
}
;

function insert_city($newcity, $countrycode, $population, $district)
{
    global $db;
    $count = 0;
    $query = "INSERT INTO city (Name,CountryCode,District,Population)
                                    VALUES (:newcity, :countrycode, :district, :population)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':newcity', $newcity);
    $stmt->bindValue(':countrycode', $countrycode);
    $stmt->bindValue(':district', $district);
    $stmt->bindValue(':population', $population);
    if ($stmt->execute()) {
        $count = $stmt->rowCount();
    }
    $stmt->closeCursor();
    return $count;
}
;

function update_city($id, $city, $countrycode, $district, $population)
{
    global $db;
    $count = 0;
    $query = "UPDATE city
                SET Name = :city, CountryCode = :countrycode, District = :district,
                Population = :population WHERE ID = :id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':countrycode', $countrycode);
    $stmt->bindValue(':district', $district);
    $stmt->bindValue(':population', $population);
    $stmt->bindValue(':city', $city);
    if ($stmt->execute()) {
        $count = $stmt->rowCount();
    }
    ;
    $stmt->closeCursor();
    return $count;
}

function delete_city($id)
{
    global $db;
    $count = 0;
    $query = 'DELETE FROM city WHERE ID = :id';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':id', $id);
    if ($stmt->execute()) {
        $count = $stmt->rowCount();
    }
    ;
    $stmt->closeCursor();
    return $count;
}
?>