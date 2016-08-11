<?php
class Scans
{
    
    public $fields = [];
    public $foo = 'bar';

    function __construct()
    {        
        global $wpdb;
        $result = $wpdb->get_results('SELECT * FROM `bs_powerlevelscan_settings`', ARRAY_A);

        foreach($result as $field)
        {
            $this->fields[] = $field;
        }
    }
    
    function addField($name, $format)
    {
        global $wpdb;

        // Check if field name already exists
        $field_exists = false;
        foreach($this->fields as $field)
        {	    
            if($field['name'] == $name)
            {
                // Break out of function if the name already exists
                echo "field already exists<br />";
                $field_exists = true;
            }
        }

        if(!$field_exists)
        {
            $insert_data = array(
                'name' => $name,
                'format' => $format
                                 );

            $insert_format = array(
                '%s',
                '%s'
                                   );
            if(!$wpdb->insert(PLS_FIELDS_TABLE, $insert_data, $insert_format))
            {
                echo $wpdb->last_error;
            }

            $data_type;
            switch($format)
            {
                case "%d":
                    $data_type = "INT(32)";
                    break;
                case "%b":
                    $data_type = "BOOLEAN";
                    break;
                case "%s":
                    $data_type = "TEXT";
                    break;
                case "%f":
                    $data_type = "FLOAT";
                    break;

            }

            $wpdb->query('ALTER TABLE '.PLS_DATA_TABLE.' ADD `'.$name.'` '.$data_type);
        }
    }
}
?>
