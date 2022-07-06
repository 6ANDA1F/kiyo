<?php

namespace ContainerLkNhJWc;


include_once \dirname(__DIR__, 4).'/vendor/elasticsearch/elasticsearch/src/Elasticsearch/Client.php';
class Client_dba3ed3 extends \Elasticsearch\Client implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderaa0ff = null;
    private $initializer69cc6 = null;
    private static $publicProperties5baec = [
        'transport' => true,
    ];
    public function bulk(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'bulk', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->bulk($params);
    }
    public function clearScroll(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'clearScroll', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->clearScroll($params);
    }
    public function closePointInTime(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'closePointInTime', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->closePointInTime($params);
    }
    public function count(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'count', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->count($params);
    }
    public function create(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'create', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->create($params);
    }
    public function delete(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'delete', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->delete($params);
    }
    public function deleteByQuery(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'deleteByQuery', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->deleteByQuery($params);
    }
    public function deleteByQueryRethrottle(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'deleteByQueryRethrottle', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->deleteByQueryRethrottle($params);
    }
    public function deleteScript(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'deleteScript', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->deleteScript($params);
    }
    public function exists(array $params = []) : bool
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'exists', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->exists($params);
    }
    public function existsSource(array $params = []) : bool
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'existsSource', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->existsSource($params);
    }
    public function explain(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'explain', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->explain($params);
    }
    public function fieldCaps(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'fieldCaps', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->fieldCaps($params);
    }
    public function get(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'get', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->get($params);
    }
    public function getScript(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getScript', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getScript($params);
    }
    public function getScriptContext(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getScriptContext', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getScriptContext($params);
    }
    public function getScriptLanguages(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getScriptLanguages', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getScriptLanguages($params);
    }
    public function getSource(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getSource', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getSource($params);
    }
    public function index(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'index', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->index($params);
    }
    public function info(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'info', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->info($params);
    }
    public function mget(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'mget', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->mget($params);
    }
    public function msearch(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'msearch', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->msearch($params);
    }
    public function msearchTemplate(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'msearchTemplate', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->msearchTemplate($params);
    }
    public function mtermvectors(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'mtermvectors', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->mtermvectors($params);
    }
    public function openPointInTime(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'openPointInTime', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->openPointInTime($params);
    }
    public function ping(array $params = []) : bool
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'ping', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->ping($params);
    }
    public function putScript(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'putScript', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->putScript($params);
    }
    public function rankEval(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'rankEval', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->rankEval($params);
    }
    public function reindex(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'reindex', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->reindex($params);
    }
    public function reindexRethrottle(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'reindexRethrottle', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->reindexRethrottle($params);
    }
    public function renderSearchTemplate(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'renderSearchTemplate', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->renderSearchTemplate($params);
    }
    public function scriptsPainlessExecute(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'scriptsPainlessExecute', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->scriptsPainlessExecute($params);
    }
    public function scroll(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'scroll', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->scroll($params);
    }
    public function search(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'search', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->search($params);
    }
    public function searchMvt(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'searchMvt', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->searchMvt($params);
    }
    public function searchShards(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'searchShards', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->searchShards($params);
    }
    public function searchTemplate(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'searchTemplate', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->searchTemplate($params);
    }
    public function termsEnum(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'termsEnum', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->termsEnum($params);
    }
    public function termvectors(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'termvectors', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->termvectors($params);
    }
    public function update(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'update', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->update($params);
    }
    public function updateByQuery(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'updateByQuery', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->updateByQuery($params);
    }
    public function updateByQueryRethrottle(array $params = [])
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'updateByQueryRethrottle', array('params' => $params), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->updateByQueryRethrottle($params);
    }
    public function asyncSearch() : \Elasticsearch\Namespaces\AsyncSearchNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'asyncSearch', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->asyncSearch();
    }
    public function autoscaling() : \Elasticsearch\Namespaces\AutoscalingNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'autoscaling', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->autoscaling();
    }
    public function cat() : \Elasticsearch\Namespaces\CatNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'cat', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->cat();
    }
    public function ccr() : \Elasticsearch\Namespaces\CcrNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'ccr', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->ccr();
    }
    public function cluster() : \Elasticsearch\Namespaces\ClusterNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'cluster', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->cluster();
    }
    public function danglingIndices() : \Elasticsearch\Namespaces\DanglingIndicesNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'danglingIndices', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->danglingIndices();
    }
    public function dataFrameTransformDeprecated() : \Elasticsearch\Namespaces\DataFrameTransformDeprecatedNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'dataFrameTransformDeprecated', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->dataFrameTransformDeprecated();
    }
    public function enrich() : \Elasticsearch\Namespaces\EnrichNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'enrich', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->enrich();
    }
    public function eql() : \Elasticsearch\Namespaces\EqlNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'eql', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->eql();
    }
    public function features() : \Elasticsearch\Namespaces\FeaturesNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'features', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->features();
    }
    public function fleet() : \Elasticsearch\Namespaces\FleetNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'fleet', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->fleet();
    }
    public function graph() : \Elasticsearch\Namespaces\GraphNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'graph', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->graph();
    }
    public function ilm() : \Elasticsearch\Namespaces\IlmNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'ilm', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->ilm();
    }
    public function indices() : \Elasticsearch\Namespaces\IndicesNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'indices', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->indices();
    }
    public function ingest() : \Elasticsearch\Namespaces\IngestNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'ingest', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->ingest();
    }
    public function license() : \Elasticsearch\Namespaces\LicenseNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'license', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->license();
    }
    public function logstash() : \Elasticsearch\Namespaces\LogstashNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'logstash', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->logstash();
    }
    public function migration() : \Elasticsearch\Namespaces\MigrationNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'migration', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->migration();
    }
    public function ml() : \Elasticsearch\Namespaces\MlNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'ml', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->ml();
    }
    public function monitoring() : \Elasticsearch\Namespaces\MonitoringNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'monitoring', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->monitoring();
    }
    public function nodes() : \Elasticsearch\Namespaces\NodesNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'nodes', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->nodes();
    }
    public function rollup() : \Elasticsearch\Namespaces\RollupNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'rollup', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->rollup();
    }
    public function searchableSnapshots() : \Elasticsearch\Namespaces\SearchableSnapshotsNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'searchableSnapshots', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->searchableSnapshots();
    }
    public function security() : \Elasticsearch\Namespaces\SecurityNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'security', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->security();
    }
    public function shutdown() : \Elasticsearch\Namespaces\ShutdownNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'shutdown', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->shutdown();
    }
    public function slm() : \Elasticsearch\Namespaces\SlmNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'slm', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->slm();
    }
    public function snapshot() : \Elasticsearch\Namespaces\SnapshotNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'snapshot', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->snapshot();
    }
    public function sql() : \Elasticsearch\Namespaces\SqlNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'sql', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->sql();
    }
    public function ssl() : \Elasticsearch\Namespaces\SslNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'ssl', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->ssl();
    }
    public function tasks() : \Elasticsearch\Namespaces\TasksNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'tasks', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->tasks();
    }
    public function textStructure() : \Elasticsearch\Namespaces\TextStructureNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'textStructure', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->textStructure();
    }
    public function transform() : \Elasticsearch\Namespaces\TransformNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'transform', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->transform();
    }
    public function watcher() : \Elasticsearch\Namespaces\WatcherNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'watcher', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->watcher();
    }
    public function xpack() : \Elasticsearch\Namespaces\XpackNamespace
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'xpack', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->xpack();
    }
    public function __call(string $name, array $arguments)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__call', array('name' => $name, 'arguments' => $arguments), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->__call($name, $arguments);
    }
    public function extractArgument(array &$params, string $arg)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'extractArgument', array('params' => $params, 'arg' => $arg), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->extractArgument($params, $arg);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->transport, $instance->params, $instance->endpoints, $instance->registeredNamespaces, $instance->asyncSearch, $instance->autoscaling, $instance->cat, $instance->ccr, $instance->cluster, $instance->danglingIndices, $instance->dataFrameTransformDeprecated, $instance->enrich, $instance->eql, $instance->features, $instance->fleet, $instance->graph, $instance->ilm, $instance->indices, $instance->ingest, $instance->license, $instance->logstash, $instance->migration, $instance->ml, $instance->monitoring, $instance->nodes, $instance->rollup, $instance->searchableSnapshots, $instance->security, $instance->shutdown, $instance->slm, $instance->snapshot, $instance->sql, $instance->ssl, $instance->tasks, $instance->textStructure, $instance->transform, $instance->watcher, $instance->xpack);
        $instance->initializer69cc6 = $initializer;
        return $instance;
    }
    public function __construct(\Elasticsearch\Transport $transport, callable $endpoint, array $registeredNamespaces)
    {
        static $reflection;
        if (! $this->valueHolderaa0ff) {
            $reflection = $reflection ?? new \ReflectionClass('Elasticsearch\\Client');
            $this->valueHolderaa0ff = $reflection->newInstanceWithoutConstructor();
        unset($this->transport, $this->params, $this->endpoints, $this->registeredNamespaces, $this->asyncSearch, $this->autoscaling, $this->cat, $this->ccr, $this->cluster, $this->danglingIndices, $this->dataFrameTransformDeprecated, $this->enrich, $this->eql, $this->features, $this->fleet, $this->graph, $this->ilm, $this->indices, $this->ingest, $this->license, $this->logstash, $this->migration, $this->ml, $this->monitoring, $this->nodes, $this->rollup, $this->searchableSnapshots, $this->security, $this->shutdown, $this->slm, $this->snapshot, $this->sql, $this->ssl, $this->tasks, $this->textStructure, $this->transform, $this->watcher, $this->xpack);
        }
        $this->valueHolderaa0ff->__construct($transport, $endpoint, $registeredNamespaces);
    }
    public function & __get($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__get', ['name' => $name], $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        if (isset(self::$publicProperties5baec[$name])) {
            return $this->valueHolderaa0ff->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        if (isset(self::$publicProperties5baec[$name])) {
            return ($this->valueHolderaa0ff->$name = $value);
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__isset', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        if (isset(self::$publicProperties5baec[$name])) {
            return isset($this->valueHolderaa0ff->$name);
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__unset', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        if (isset(self::$publicProperties5baec[$name])) {
            unset($this->valueHolderaa0ff->$name);
            return;
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__clone', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff = clone $this->valueHolderaa0ff;
    }
    public function __sleep()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__sleep', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return array('valueHolderaa0ff');
    }
    public function __wakeup()
    {
        unset($this->transport, $this->params, $this->endpoints, $this->registeredNamespaces, $this->asyncSearch, $this->autoscaling, $this->cat, $this->ccr, $this->cluster, $this->danglingIndices, $this->dataFrameTransformDeprecated, $this->enrich, $this->eql, $this->features, $this->fleet, $this->graph, $this->ilm, $this->indices, $this->ingest, $this->license, $this->logstash, $this->migration, $this->ml, $this->monitoring, $this->nodes, $this->rollup, $this->searchableSnapshots, $this->security, $this->shutdown, $this->slm, $this->snapshot, $this->sql, $this->ssl, $this->tasks, $this->textStructure, $this->transform, $this->watcher, $this->xpack);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer69cc6 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer69cc6;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'initializeProxy', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa0ff;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa0ff;
    }
}

if (!\class_exists('Client_dba3ed3', false)) {
    \class_alias(__NAMESPACE__.'\\Client_dba3ed3', 'Client_dba3ed3', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Plugin/Composer/CommandExecutor.php';
class CommandExecutor_2fbbc6d extends \Shopware\Core\Framework\Plugin\Composer\CommandExecutor implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderaa0ff = null;
    private $initializer69cc6 = null;
    private static $publicProperties5baec = [
        
    ];
    public function require(string $pluginComposerName, string $pluginName) : void
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'require', array('pluginComposerName' => $pluginComposerName, 'pluginName' => $pluginName), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff->require($pluginComposerName, $pluginName);
return;
    }
    public function remove(string $pluginComposerName, string $pluginName) : void
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'remove', array('pluginComposerName' => $pluginComposerName, 'pluginName' => $pluginName), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff->remove($pluginComposerName, $pluginName);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $instance, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($instance);
        $instance->initializer69cc6 = $initializer;
        return $instance;
    }
    public function __construct(string $projectDir)
    {
        static $reflection;
        if (! $this->valueHolderaa0ff) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
            $this->valueHolderaa0ff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $this, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($this);
        }
        $this->valueHolderaa0ff->__construct($projectDir);
    }
    public function & __get($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__get', ['name' => $name], $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        if (isset(self::$publicProperties5baec[$name])) {
            return $this->valueHolderaa0ff->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__isset', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__unset', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__clone', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff = clone $this->valueHolderaa0ff;
    }
    public function __sleep()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__sleep', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return array('valueHolderaa0ff');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $this, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer69cc6 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer69cc6;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'initializeProxy', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa0ff;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa0ff;
    }
}

if (!\class_exists('CommandExecutor_2fbbc6d', false)) {
    \class_alias(__NAMESPACE__.'\\CommandExecutor_2fbbc6d', 'CommandExecutor_2fbbc6d', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Store/Services/StoreService.php';
class StoreService_93b91c4 extends \Shopware\Core\Framework\Store\Services\StoreService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderaa0ff = null;
    private $initializer69cc6 = null;
    private static $publicProperties5baec = [
        
    ];
    public function fireTrackingEvent(string $eventName, array $additionalData = []) : ?array
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'fireTrackingEvent', array('eventName' => $eventName, 'additionalData' => $additionalData), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->fireTrackingEvent($eventName, $additionalData);
    }
    public function getLanguageByContext(\Shopware\Core\Framework\Context $context) : string
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getLanguageByContext', array('context' => $context), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getLanguageByContext($context);
    }
    public function updateStoreToken(\Shopware\Core\Framework\Context $context, \Shopware\Core\Framework\Store\Struct\AccessTokenStruct $accessToken) : void
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'updateStoreToken', array('context' => $context, 'accessToken' => $accessToken), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff->updateStoreToken($context, $accessToken);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Store\Services\StoreService $instance) {
            unset($instance->client, $instance->userRepository, $instance->instanceService);
        }, $instance, 'Shopware\\Core\\Framework\\Store\\Services\\StoreService')->__invoke($instance);
        $instance->initializer69cc6 = $initializer;
        return $instance;
    }
    public function & __get($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__get', ['name' => $name], $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        if (isset(self::$publicProperties5baec[$name])) {
            return $this->valueHolderaa0ff->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__isset', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__unset', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__clone', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff = clone $this->valueHolderaa0ff;
    }
    public function __sleep()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__sleep', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return array('valueHolderaa0ff');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Store\Services\StoreService $instance) {
            unset($instance->client, $instance->userRepository, $instance->instanceService);
        }, $this, 'Shopware\\Core\\Framework\\Store\\Services\\StoreService')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer69cc6 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer69cc6;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'initializeProxy', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa0ff;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa0ff;
    }
}

if (!\class_exists('StoreService_93b91c4', false)) {
    \class_alias(__NAMESPACE__.'\\StoreService_93b91c4', 'StoreService_93b91c4', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Webhook/Hookable/HookableEventFactory.php';
class HookableEventFactory_f62e15e extends \Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderaa0ff = null;
    private $initializer69cc6 = null;
    private static $publicProperties5baec = [
        
    ];
    public function createHookablesFor($event) : array
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'createHookablesFor', array('event' => $event), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->createHookablesFor($event);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $instance, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($instance);
        $instance->initializer69cc6 = $initializer;
        return $instance;
    }
    public function __construct(\Shopware\Core\Framework\Webhook\BusinessEventEncoder $eventEncoder, \Shopware\Core\Framework\Webhook\Hookable\WriteResultMerger $writeResultMerger)
    {
        static $reflection;
        if (! $this->valueHolderaa0ff) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
            $this->valueHolderaa0ff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $this, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($this);
        }
        $this->valueHolderaa0ff->__construct($eventEncoder, $writeResultMerger);
    }
    public function & __get($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__get', ['name' => $name], $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        if (isset(self::$publicProperties5baec[$name])) {
            return $this->valueHolderaa0ff->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__isset', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__unset', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__clone', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff = clone $this->valueHolderaa0ff;
    }
    public function __sleep()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__sleep', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return array('valueHolderaa0ff');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $this, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer69cc6 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer69cc6;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'initializeProxy', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa0ff;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa0ff;
    }
}

if (!\class_exists('HookableEventFactory_f62e15e', false)) {
    \class_alias(__NAMESPACE__.'\\HookableEventFactory_f62e15e', 'HookableEventFactory_f62e15e', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/ExtendableInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/CloneTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/JsonSerializableTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/AssignArrayTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/ExtendableTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/CreateFromTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/VariablesAccessTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/Struct.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/Collection.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/System/Snippet/Files/SnippetFileCollection.php';
class SnippetFileCollection_08f09cc extends \Shopware\Core\System\Snippet\Files\SnippetFileCollection implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderaa0ff = null;
    private $initializer69cc6 = null;
    private static $publicProperties5baec = [
        
    ];
    public function add($snippetFile) : void
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'add', array('snippetFile' => $snippetFile), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff->add($snippetFile);
return;
    }
    public function get($key) : ?\Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'get', array('key' => $key), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->get($key);
    }
    public function getByName($key) : ?\Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getByName', array('key' => $key), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getByName($key);
    }
    public function getFilesArray(bool $isBase = true) : array
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getFilesArray', array('isBase' => $isBase), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getFilesArray($isBase);
    }
    public function toArray() : array
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'toArray', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->toArray();
    }
    public function getIsoList() : array
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getIsoList', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getIsoList();
    }
    public function getSnippetFilesByIso(string $iso) : array
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getSnippetFilesByIso', array('iso' => $iso), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getSnippetFilesByIso($iso);
    }
    public function getBaseFileByIso(string $iso) : \Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getBaseFileByIso', array('iso' => $iso), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getBaseFileByIso($iso);
    }
    public function getApiAlias() : string
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getApiAlias', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getApiAlias();
    }
    public function hasFileForPath(string $filePath) : bool
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'hasFileForPath', array('filePath' => $filePath), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->hasFileForPath($filePath);
    }
    public function set($key, $element) : void
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'set', array('key' => $key, 'element' => $element), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff->set($key, $element);
return;
    }
    public function clear() : void
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'clear', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff->clear();
return;
    }
    public function count() : int
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'count', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->count();
    }
    public function getKeys() : array
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getKeys', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getKeys();
    }
    public function has($key) : bool
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'has', array('key' => $key), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->has($key);
    }
    public function map(\Closure $closure) : array
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'map', array('closure' => $closure), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->map($closure);
    }
    public function reduce(\Closure $closure, $initial = null)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'reduce', array('closure' => $closure, 'initial' => $initial), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->reduce($closure, $initial);
    }
    public function fmap(\Closure $closure) : array
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'fmap', array('closure' => $closure), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->fmap($closure);
    }
    public function sort(\Closure $closure) : void
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'sort', array('closure' => $closure), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff->sort($closure);
return;
    }
    public function filterInstance(string $class)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'filterInstance', array('class' => $class), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->filterInstance($class);
    }
    public function filter(\Closure $closure)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'filter', array('closure' => $closure), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->filter($closure);
    }
    public function slice(int $offset, ?int $length = null)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'slice', array('offset' => $offset, 'length' => $length), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->slice($offset, $length);
    }
    public function getElements() : array
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getElements', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getElements();
    }
    public function jsonSerialize() : array
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'jsonSerialize', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->jsonSerialize();
    }
    public function first()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'first', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->first();
    }
    public function getAt(int $position)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getAt', array('position' => $position), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getAt($position);
    }
    public function last()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'last', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->last();
    }
    public function remove($key) : void
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'remove', array('key' => $key), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff->remove($key);
return;
    }
    public function getIterator() : \Generator
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getIterator', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getIterator();
    }
    public function assign(array $options)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'assign', array('options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->assign($options);
    }
    public function addExtension(string $name, ?\Shopware\Core\Framework\Struct\Struct $extension) : void
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'addExtension', array('name' => $name, 'extension' => $extension), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff->addExtension($name, $extension);
return;
    }
    public function addArrayExtension(string $name, array $extension) : void
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'addArrayExtension', array('name' => $name, 'extension' => $extension), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff->addArrayExtension($name, $extension);
return;
    }
    public function addExtensions(array $extensions) : void
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'addExtensions', array('extensions' => $extensions), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff->addExtensions($extensions);
return;
    }
    public function getExtension(string $name) : ?\Shopware\Core\Framework\Struct\Struct
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getExtension', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getExtension($name);
    }
    public function getExtensionOfType(string $name, string $type) : ?\Shopware\Core\Framework\Struct\Struct
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getExtensionOfType', array('name' => $name, 'type' => $type), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getExtensionOfType($name, $type);
    }
    public function hasExtension(string $name) : bool
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'hasExtension', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->hasExtension($name);
    }
    public function hasExtensionOfType(string $name, string $type) : bool
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'hasExtensionOfType', array('name' => $name, 'type' => $type), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->hasExtensionOfType($name, $type);
    }
    public function getExtensions() : array
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getExtensions', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getExtensions();
    }
    public function setExtensions(array $extensions) : void
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'setExtensions', array('extensions' => $extensions), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff->setExtensions($extensions);
return;
    }
    public function removeExtension(string $name) : void
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'removeExtension', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff->removeExtension($name);
return;
    }
    public function getVars() : array
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getVars', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getVars();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->elements, $instance->extensions);
        $instance->initializer69cc6 = $initializer;
        return $instance;
    }
    public function __construct(iterable $elements = [])
    {
        static $reflection;
        if (! $this->valueHolderaa0ff) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
            $this->valueHolderaa0ff = $reflection->newInstanceWithoutConstructor();
        unset($this->elements, $this->extensions);
        }
        $this->valueHolderaa0ff->__construct($elements);
    }
    public function & __get($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__get', ['name' => $name], $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        if (isset(self::$publicProperties5baec[$name])) {
            return $this->valueHolderaa0ff->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__isset', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__unset', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__clone', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff = clone $this->valueHolderaa0ff;
    }
    public function __sleep()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__sleep', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return array('valueHolderaa0ff');
    }
    public function __wakeup()
    {
        unset($this->elements, $this->extensions);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer69cc6 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer69cc6;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'initializeProxy', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa0ff;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa0ff;
    }
}

if (!\class_exists('SnippetFileCollection_08f09cc', false)) {
    \class_alias(__NAMESPACE__.'\\SnippetFileCollection_08f09cc', 'SnippetFileCollection_08f09cc', false);
}

include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Controller/StorefrontController.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Controller/ErrorController.php';
class ErrorController_b437ad9 extends \Shopware\Storefront\Controller\ErrorController implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderaa0ff = null;
    private $initializer69cc6 = null;
    private static $publicProperties5baec = [
        
    ];
    public function error(\Throwable $exception, \Symfony\Component\HttpFoundation\Request $request, \Shopware\Core\System\SalesChannel\SalesChannelContext $context) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'error', array('exception' => $exception, 'request' => $request, 'context' => $context), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->error($exception, $request, $context);
    }
    public function onCaptchaFailure(\Symfony\Component\Validator\ConstraintViolationList $violations, \Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'onCaptchaFailure', array('violations' => $violations, 'request' => $request), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->onCaptchaFailure($violations, $request);
    }
    public function setTwig(\Twig\Environment $twig) : void
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'setTwig', array('twig' => $twig), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff->setTwig($twig);
return;
    }
    public function setContainer(\Psr\Container\ContainerInterface $container) : ?\Psr\Container\ContainerInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'setContainer', array('container' => $container), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->setContainer($container);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->errorTemplateResolver, $instance->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $instance, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($instance);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $instance, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($instance);
        $instance->initializer69cc6 = $initializer;
        return $instance;
    }
    public function __construct(\Shopware\Storefront\Framework\Twig\ErrorTemplateResolver $errorTemplateResolver, \Shopware\Storefront\Pagelet\Header\HeaderPageletLoaderInterface $headerPageletLoader, \Shopware\Core\System\SystemConfig\SystemConfigService $systemConfigService, \Shopware\Storefront\Page\Navigation\Error\ErrorPageLoaderInterface $errorPageLoader, \Shopware\Storefront\Pagelet\Footer\FooterPageletLoaderInterface $footerPageletLoader)
    {
        static $reflection;
        if (! $this->valueHolderaa0ff) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
            $this->valueHolderaa0ff = $reflection->newInstanceWithoutConstructor();
        unset($this->errorTemplateResolver, $this->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $this, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($this);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $this, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($this);
        }
        $this->valueHolderaa0ff->__construct($errorTemplateResolver, $headerPageletLoader, $systemConfigService, $errorPageLoader, $footerPageletLoader);
    }
    public function & __get($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__get', ['name' => $name], $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        if (isset(self::$publicProperties5baec[$name])) {
            return $this->valueHolderaa0ff->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__isset', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__unset', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__clone', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff = clone $this->valueHolderaa0ff;
    }
    public function __sleep()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__sleep', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return array('valueHolderaa0ff');
    }
    public function __wakeup()
    {
        unset($this->errorTemplateResolver, $this->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $this, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($this);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $this, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer69cc6 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer69cc6;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'initializeProxy', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa0ff;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa0ff;
    }
}

if (!\class_exists('ErrorController_b437ad9', false)) {
    \class_alias(__NAMESPACE__.'\\ErrorController_b437ad9', 'ErrorController_b437ad9', false);
}

include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/psr/http-client/src/ClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/Client.php';
class Client_b190fb5 extends \GuzzleHttp\Client implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderaa0ff = null;
    private $initializer69cc6 = null;
    private static $publicProperties5baec = [
        
    ];
    public function __call($method, $args)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__call', array('method' => $method, 'args' => $args), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->__call($method, $args);
    }
    public function sendAsync(\Psr\Http\Message\RequestInterface $request, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'sendAsync', array('request' => $request, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->sendAsync($request, $options);
    }
    public function send(\Psr\Http\Message\RequestInterface $request, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'send', array('request' => $request, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->send($request, $options);
    }
    public function sendRequest(\Psr\Http\Message\RequestInterface $request) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'sendRequest', array('request' => $request), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->sendRequest($request);
    }
    public function requestAsync(string $method, $uri = '', array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'requestAsync', array('method' => $method, 'uri' => $uri, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->requestAsync($method, $uri, $options);
    }
    public function request(string $method, $uri = '', array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'request', array('method' => $method, 'uri' => $uri, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->request($method, $uri, $options);
    }
    public function getConfig(?string $option = null)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getConfig', array('option' => $option), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getConfig($option);
    }
    public function get($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'get', array('uri' => $uri, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->get($uri, $options);
    }
    public function head($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'head', array('uri' => $uri, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->head($uri, $options);
    }
    public function put($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'put', array('uri' => $uri, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->put($uri, $options);
    }
    public function post($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'post', array('uri' => $uri, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->post($uri, $options);
    }
    public function patch($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'patch', array('uri' => $uri, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->patch($uri, $options);
    }
    public function delete($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'delete', array('uri' => $uri, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->delete($uri, $options);
    }
    public function getAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'getAsync', array('uri' => $uri, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->getAsync($uri, $options);
    }
    public function headAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'headAsync', array('uri' => $uri, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->headAsync($uri, $options);
    }
    public function putAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'putAsync', array('uri' => $uri, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->putAsync($uri, $options);
    }
    public function postAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'postAsync', array('uri' => $uri, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->postAsync($uri, $options);
    }
    public function patchAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'patchAsync', array('uri' => $uri, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->patchAsync($uri, $options);
    }
    public function deleteAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'deleteAsync', array('uri' => $uri, 'options' => $options), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return $this->valueHolderaa0ff->deleteAsync($uri, $options);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $instance, 'GuzzleHttp\\Client')->__invoke($instance);
        $instance->initializer69cc6 = $initializer;
        return $instance;
    }
    public function __construct(array $config = [])
    {
        static $reflection;
        if (! $this->valueHolderaa0ff) {
            $reflection = $reflection ?? new \ReflectionClass('GuzzleHttp\\Client');
            $this->valueHolderaa0ff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $this, 'GuzzleHttp\\Client')->__invoke($this);
        }
        $this->valueHolderaa0ff->__construct($config);
    }
    public function & __get($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__get', ['name' => $name], $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        if (isset(self::$publicProperties5baec[$name])) {
            return $this->valueHolderaa0ff->$name;
        }
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__isset', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__unset', array('name' => $name), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa0ff;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderaa0ff;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__clone', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        $this->valueHolderaa0ff = clone $this->valueHolderaa0ff;
    }
    public function __sleep()
    {
        $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, '__sleep', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
        return array('valueHolderaa0ff');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $this, 'GuzzleHttp\\Client')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer69cc6 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer69cc6;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer69cc6 && ($this->initializer69cc6->__invoke($valueHolderaa0ff, $this, 'initializeProxy', array(), $this->initializer69cc6) || 1) && $this->valueHolderaa0ff = $valueHolderaa0ff;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa0ff;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa0ff;
    }
}

if (!\class_exists('Client_b190fb5', false)) {
    \class_alias(__NAMESPACE__.'\\Client_b190fb5', 'Client_b190fb5', false);
}
