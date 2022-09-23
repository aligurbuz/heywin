<?php

declare(strict_types=1);

namespace App\Repositories\Supporters;

use App\Constants;
use App\Exceptions\Exception as ExceptionFacade;
use App\Services\AppContainer;
use Exception;

/**
 * Trait CreateRepository
 * @package App\Repositories\Executors
 */
trait CreateRepository
{
    /**
     * @var array
     */
    protected array $addPostQueryResults = [];

    protected array $actionDefinitors = [
        'POST' => 'create',
        'PUT' => 'update',
        'GET' => 'get'
    ];

    /**
     * create data for user model
     *
     * @param array $data
     * @return array|object
     */
    public function createHandler(array $data = []): array|object
    {
        $list = [];
        $clientData = $this->getClientData($data);

        try {

            if ($this->getEventStatus() && method_exists($this, 'beforeCreate')) {
                $this->beforeCreate($clientData);
            }

            foreach ($clientData as $clientDataKey => $value) {

                if ($this->getEventStatus() && method_exists($this, 'eventFireBeforeCreate')) {
                    $eventFireBeforeCreate = $this->eventFireBeforeCreate($value);

                    if (is_array($eventFireBeforeCreate)) {
                        $value = $eventFireBeforeCreate;
                    }
                }

                $result = $this->createModel($value);
                $arrayResults = $result->toArray();

                $this->createEventDispatcher($value, $clientDataKey);

                if (count($this->addPostQueryResults)) {
                    $arrayResults = array_merge($arrayResults, $this->addPostQueryResults[$clientDataKey]);
                }

                if ($this->getEventStatus() && method_exists($this, 'eventFireAfterCreate')) {
                    $this->eventFireAfterCreate($arrayResults, $value);
                }

                $list[] = $arrayResults;

            }

            if (method_exists($this, 'afterCreate')) {
                $this->afterCreate($list);
            }

            return $list;
        } catch (Exception $exception) {
            $className = lcfirst(class_basename($exception));
            $classNamespace = Constants::exceptionNamespace . '\\' . ucfirst($className);

            if (class_exists($classNamespace)) {
                return ExceptionFacade::$className($exception->getMessage());
            }

            return $this->sqlException($exception);
        }
    }

    /**
     * get create event dispatcher for repository
     *
     * @param array $data
     * @param int $clientDataKey
     */
    public function createEventDispatcher(array $data = [], int $clientDataKey = 0): void
    {
        $this->createLocalization($data);
        $this->deleteCache();
        $this->addPostQueryDispatcher($data, $clientDataKey);
    }

    /**
     * add post query dispatcher for repository
     *
     * @param array $data
     * @param int $clientDataKey
     * @return void
     */
    public function addPostQueryDispatcher(array $data = [], int $clientDataKey = 0): void
    {
        if (count($this->getAddPostQueries())) {
            $methodDefine = $this->actionDefinitors[request()->method()];

            foreach ($this->getAddPostQueries() as $key => $cr) {
                $crExplode = explode('.', $cr);

                if (!isset($crExplode[2])) {
                    $cr = $cr . '.' . $methodDefine;
                }

                $keyExplode = explode('|', $key);
                $key = $keyExplode[0];
                $createStatus = !((isset($keyExplode[1]) && $keyExplode[1] == 'false'));

                if (isset($data[$key])) {
                    $crData = [];

                    if (!isset($data[$key][0])) {
                        $data[$key] = [$data[$key]];
                    }

                    foreach ($data[$key] as $crKey => $crValues) {
                        $crData[$crKey] = $crValues;
                        $crData[$crKey][getTableCode($this->getModel())] = $data[getTableCode($this->getModel())];
                    }

                    try {
                        cR($cr, $crData, null, true);
                    } catch (Exception $exception) {
                        ExceptionFacade::customException($exception->getMessage() . ' (' . trans('exception.crKey', ['key' => $key]) . ')');
                    }

                    $this->addPostQueryResults[$clientDataKey][$key] = $createStatus ? AppContainer::get('crRepositoryInstance')->{$methodDefine}() : $data[$key];
                }
            }
        }
    }
}
