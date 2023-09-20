<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace FSProVendor\Monolog\Handler;

use FSProVendor\Monolog\Logger;
use FSProVendor\Monolog\Formatter\NormalizerFormatter;
use FSProVendor\Doctrine\CouchDB\CouchDBClient;
/**
 * CouchDB handler for Doctrine CouchDB ODM
 *
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class DoctrineCouchDBHandler extends \FSProVendor\Monolog\Handler\AbstractProcessingHandler
{
    private $client;
    public function __construct(\FSProVendor\Doctrine\CouchDB\CouchDBClient $client, $level = \FSProVendor\Monolog\Logger::DEBUG, $bubble = \true)
    {
        $this->client = $client;
        parent::__construct($level, $bubble);
    }
    /**
     * {@inheritDoc}
     */
    protected function write(array $record)
    {
        $this->client->postDocument($record['formatted']);
    }
    protected function getDefaultFormatter()
    {
        return new \FSProVendor\Monolog\Formatter\NormalizerFormatter();
    }
}
