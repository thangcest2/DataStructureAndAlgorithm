<?php
/**
 * CreatedBy: thang.tran@tiki.vn
 * Date: 4/13/16
 * Time: 11:33 AM
 */

namespace Services\Searching\ElasticSearch;

use Elasticsearch\ClientBuilder;

class ElasticSearchDemo
{
    /**
     * @var \Elasticsearch\Client
     */
    public $client;

    public function __construct()
    {
        require_once __DIR__ . '/../../../../vendor/autoload.php';
        $hosts = [
            '127.0.0.1:9200',
//            '192.168.1.2',              // Just IP
//            'mydomain.server.com:9201', // Domain + Port
//            'mydomain2.server.com',     // Just Domain
//            'https://localhost',        // SSL to localhost
//            'https://192.168.1.3:9200'  // SSL to IP + Port
        ];
        $this->client = ClientBuilder::create()           // Instantiate a new ClientBuilder
        ->setHosts($hosts)      // Set the hosts
        ->build();              // Build the client object

    }

    public function add()
    {
        $params1 = [
            'index' => 'my_index',
            'type'  => 'my_type',
            'id'    => 'my_id',
            'body'  => ['testField' => 'abc']
        ];

        $params = [
            'index' => 'my_index',
            'type'  => 'my_type',
            'id'    => 'my_id_2',
            'body'  => ['testField' => 'abc2']
        ];


        $this->client->index($params1);
        $response = $this->client->index($params);

        var_dump($response);die;
    }

    public function get()
    {
        $params = [
            'index' => 'my_index',
            'type' => 'my_type',
            'id' => 'my_id'
        ];

        $response = $this->client->get($params);
        var_dump($response);die;
    }

    public function search()
    {
        $params = [
            'index' => 'my_index',
            'type' => 'my_type',
            'body' => [
                'query' => [
                    'match' => [
                        'testField' => 'abc'
                    ]
                ]
            ]
        ];

        $response = $this->client->search($params);
        var_dump($response);die;
    }

}

$es = new ElasticSearchDemo();
//$es->add();
//$es->get();
$es->search();