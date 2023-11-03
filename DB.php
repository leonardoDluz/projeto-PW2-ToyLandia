<?php

class DB
{
  public static function insert(string $table, array $parameters, array $values): void
  {
    $connection = self::createConnection();

    $valuesString = self::getQueryValues($values);
    $parametersString = self::countParameters($parameters);
    $command = "INSERT INTO $table ($parametersString) VALUES ($valuesString);";

    $connection->exec($command);
  }

  public static function select(string $table): array
  {
    $connection = self::createConnection();

    $command = "SELECT * FROM $table;"; 
    $stmt = $connection->query($command);
    
    return $stmt->fetchAll();
  }

  public static function selectWhereId(string $table, int $id): array
  {
    $connection = self::createConnection();

    $command = "SELECT * FROM $table WHERE id$table = $id;"; 
    $stmt = $connection->query($command);
    
    return $stmt->fetchAll();
  }

  public static function update(string $table, array $parameters, array $values, int $id): void
  {
    $connection = self::createConnection();
    $idTable = $id . $table;

    $updateString = self::getUpdateString($parameters, $values);
    $command = "UPDATE $table SET $updateString WHERE id = $idTable;";

    $connection->exec($command);
  }

  public static function delete(string $table, int $id): void
  {
    $connection = self::createConnection();

    $command = "DELETE * FROM $table WHERE id = $id;";

    $connection->exec($command);
  }

  private static function createConnection(): PDO
  {
    $connection = new PDO(
        'mysql:host=localhost;dbname=ToyLandia',
        'root',
        'Intel@2022'
    );
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $connection;
  }

  private static function getQueryValues(array $values): string
  {
    $valuesString = '';

    for ($i = 0; $i < count($values); $i++) {
      if ($i < count($values) - 1) {
        $valuesString .= "'$values[$i]',";
      } else {
        $valuesString .= "'$values[$i]'";
      }
    }
    
    return $valuesString;
  }

  private static function countParameters(array $parameters): string
  {
    $parametersString = '';

    for ($i = 0; $i < count($parameters); $i++) {
      if ($i < count($parameters) - 1) {
        $parametersString .= "$parameters[$i],";
      } else {
        $parametersString .= "$parameters[$i]";
      }
    }

    return $parametersString;
  }

  private function getUpdateString(array $parameters, array $values): string 
  {
    $updateString = "";

    for ($i=0; $i < count($parameters); $i++) { 
      if ($i < count($parameters) - 1) {
        $updateString .= "$parameters[$i] = $values[$i],";
      } else {
        $updateString .= "$parameters[$i] = $values[$i]";
      }
    }

    return $updateString;
  }
}