<?php 

class QueryBuilder{
    protected $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($table, $parameter){
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table, 
            implode(',', array_keys($parameter)),
            ":".implode(', :', array_keys($parameter)) 
        );

        try{
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameter);
        }catch(Exception $e){
            dd("You Fucked UP!!");
        }
    }
}