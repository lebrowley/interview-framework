<?php

declare(strict_types = 1);

namespace Example\View;

use Mini\Controller\Exception\BadInputException;
use Example\Model\ExampleModel;

/**
 * Example view builder.
 */
class ExampleView
{
    /**
     * Note: I removed the initialization of the $model property via the constructor as it seemed unneccessary now that the ExampleModel is passed as a parameter to the get method
     */

    /**
     * Get the example view to display its data.
     * 
     * @param ExampleModel $model the ExampleModel object
     * 
     * @return string view template
     *
     * @throws BadInputException if ExampleModel data is not set
     */
    public function get(ExampleModel $model): string
    {
        $data = $model->getData();

        foreach($data as $property) {
            if(!isset($property)) {
                throw new BadInputException($property.' value missing');
            }
        }
        
        return view('app/example/detail', $data);
    }
}
