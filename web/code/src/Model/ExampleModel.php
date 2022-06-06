<?php

declare(strict_types = 1);

namespace Example\Model;

use Mini\Controller\Exception\BadInputException;
use Mini\Model\Model;

/**
 * Example data.
 */
class ExampleModel extends Model
{    
    /**
     * ExampleModel internal state
     */
    protected $created = null;
    protected $code = null;
    protected $description = null;
    
    /**
     * Set ExampleModel internal state
     *
     * @param string $created     example created on
     * @param string $code        example code
     * @param string $description example description
     * 
     * @throws BadInputException if any of the parameters are not set
     * 
     */
    public function setData(string $created, string $code, string $description) {

        if (!$created) {
            throw new BadInputException('Created value missing');
        }
        if (!$code) {
            throw new BadInputException('Code value missing');
        }
        if (!$description) {
            throw new BadInputException('Description value missing');
        }

        $this->created = $created;
        $this->code = $code;
        $this->description = $description;
    }

    /**
     * Get ExampleModel internal state
     * 
     * @return array the ExampleModel internal state values converted to an array
     */
    public function getData():array {
        $data = array(
            'created' => $this->created,
            'code' => $this->code,
            'description' => $this->description
        );

        return $data;
    }

    /**
     * Get example data by ID.
     *
     * @param int $id example id
     *  
     * @return array example data
     */
    public function get(int $id): array
    {
        $sql = '
            SELECT
                example_id AS "id",
                created,
                code,
                description
            FROM
                ' . getenv('DB_SCHEMA') . '.master_example
            WHERE
                example_id = ?';

        return $this->db->select([
            'title'  => 'Get example data',
            'sql'    => $sql,
            'inputs' => [$id]
        ]);
    }

    /**
     * Create an example.
     *
     * @param string $created     example created on
     * @param string $code        example code
     * @param string $description example description
     *  
     * @return array the new record created
     */
    public function create(): array {
        $sql = '
            INSERT INTO
                ' . getenv('DB_SCHEMA') . '.master_example
            (
                created,
                code,
                description
            )
            VALUES
            (?,?,?)';

        $id = $this->db->statement([
            'title'  => 'Create example',
            'sql'    => $sql,
            'inputs' => [
                $this->created,
                $this->code,
                $this->description
            ]
        ]);

        $this->db->validateAffected();

        $record = $this->get($id);

        return $record;
    }
}
