<?php
/**
 * @CreateTime:   2020/2/16 下午10:28
 * @Author:       huizhang  <tuzisir@163.com>
 * @Copyright:    copyright(2020) Easyswoole all rights reserved
 * @Description:  爬虫配置
 */
namespace EasySwoole\Spider\Config;

use EasySwoole\Component\Singleton;
use EasySwoole\JobQueue\JobQueueInterface;
use EasySwoole\Spider\Hole\ConsumeAbstract;
use EasySwoole\Spider\Hole\ProductAbstract;
use EasySwoole\Spider\Hole\QueueInterface;

class Config
{

    use Singleton;

    // 用户自定义生产者
    protected $product;

    // 用户自定义消费者
    protected $consume;

    // 通信队列类型
    protected $queueType=1;

    // 队列
    protected $queue;

    // 任务队列key
    protected $jobQueueKey ='spider-jobkey';

    // 分布式时指定一台机器为开始机器
    protected $mainHost;

    // 队列配置
    protected $queueConfig;

    // 最大协程数
    protected $maxCoroutineNum=3;

    // job-queue配置
    protected $jobQueueProcessConfig;

    public const QUEUE_TYPE_FAST_CACHE = 1;
    public const QUEUE_TYPE_REDIS = 2;

    public function setJobQueueProcessConfig(\EasySwoole\Component\Process\Config $config) : Config
    {
        $this->jobQueueProcessConfig = $config;
        return $this;
    }

    public function getJobQueueProcessConfig()
    {
        return $this->jobQueueProcessConfig;
    }

    public function setMaxCoroutineNum($maxCoroutineNum): Config
    {
        $this->maxCoroutineNum = $maxCoroutineNum;
    }

    public function getMaxCoroutineNum()
    {
        return $this->maxCoroutineNum;
    }

    /**
     * @return ProductAbstract
     */
    public function getProduct():ProductAbstract
    {
        return $this->product;
    }

    /**
     * @param ProductAbstract $product
     * @return Config
     */
    public function setProduct(ProductAbstract $product): Config
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return ConsumeAbstract
     */
    public function getConsume():ConsumeAbstract
    {
        return $this->consume;
    }

    /**
     * @param ConsumeAbstract $consume
     * @return Config
     */
    public function setConsume(ConsumeAbstract $consume): Config
    {
        $this->consume = $consume;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQueueType()
    {
        return $this->queueType;
    }

    /**
     * @param mixed $queueType
     * @return Config
     */
    public function setQueueType($queueType): Config
    {
        $this->queueType = $queueType;
        return $this;
    }

    /**
     * @return JobQueueInterface
     */
    public function getQueue():JobQueueInterface
    {
        return $this->queue;
    }

    /**
     * @param mixed $queue
     * @return Config
     */
    public function setQueue($queue): Config
    {
        $this->queue = $queue;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getJobQueueKey()
    {
        return $this->jobQueueKey;
    }

    /**
     * @param mixed $mainHost
     * @return Config
     */
    public function setJobQueueKey($jobQueueKey): Config
    {
        $this->jobQueueKey = $jobQueueKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMainHost()
    {
        return $this->mainHost;
    }

    /**
     * @param mixed $mainHost
     * @return Config
     */
    public function setMainHost($mainHost): Config
    {
        $this->mainHost = $mainHost;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQueueConfig()
    {
        return $this->queueConfig;
    }

    /**
     * @param mixed $queueConfig
     * @return Config
     */
    public function setQueueConfig($queueConfig): Config
    {
        $this->queueConfig = $queueConfig;
        return $this;
    }
}
