<?php

abstract class Model {

    protected static string $table;
    protected static string $primary_key = "id";

    public static function find(mysqli $mysqli, int $id){
        $sql = sprintf("SELECT * from %s WHERE %s = ? , static::$table, $static::$primary_key");
        $query = $mysqli->prepare($sql);
        $query->bind_param("i", $id);
        $query->execute();

        $data = $query->get_result()->fetch_assoc();
        return $data ? new static($data) : null;
    }

    public static function all(mysqli $mysqli){
        $sql = sprintf("SELECT * from %s", static::$table);
        $query = $mysqli->prepare($sql);
        $query->execute();
        $data = $query->get_result();

        $objects = [];
        while($row = $data->fetch_assoc()){
            $objects[] = new static($row);
        }
            return $objects;
        }

        public function delete(mysqli $mysqli){
            $sql = sprintf("DELETE FROM %s WHERE %s = ?", static::$table, static::$primary_key);
            $query = $mysqli->prepare($sql);
            $query->bind_param("i", $this->{static::$primary_key});
            return $query-execute();
        }

        public function update(mysqli $mysqli,array $fields){
            $set = [];
            $types = '';
            $values = [];
            foreach($fields as $column => $value){
                $set[] = "$coluumn=?";
                $types = $types . (is_int($value) ? 'i' : 's');
                $values = $value;
            }

            $types = $types . 'i';
            $values[] = $this->{static::$primary_key};
            $sql = sprintf("UPDATE %s SET %s WHERE %s = ?", static::$table, implode(', ', $set), static::$primary_key);

             $query = $mysqli->prepare($sql);
             $query->bind_param($types, ...$values);  //... Unpacks $values into individual arguments
             return $query->execute();
        }

        public static function create(mysqli $mysqli,array $fields){

            $columns = implode(', ', array_keys($fields));
            $placeholders = implode(', ', array_fill(0, count($fields), '?'));
            $types = '';
            foreach ($fields as $value){
                $types = $types . (is_int($value) ? 'i' : 's');
            }
            $sql = sprintf("INSERT INTO %s (%s)Values (%s)", static::$table, $columns, $placeholders);
            $query = $mysqli->prepare($sql);
            $query->bind_param($types, ...array_values($fields));

            $exuecuted = $query->execute(); 
            if($exuecuted) {
                $field[static::$primary_key] = $mysqli->insert_id;
                return new static($fields);
            }
            return null;


        }





    }

