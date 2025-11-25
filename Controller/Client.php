<?php

/**
 * Copyright 2022-2025 FOSSBilling
 * Copyright 2011-2021 BoxBilling, Inc.
 * SPDX-License-Identifier: Apache-2.0.
 *
 * @copyright FOSSBilling (https://www.fossbilling.org)
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 */

namespace Box\Mod\Servicepterodactyl\Controller;

class Client implements \FOSSBilling\InjectionAwareInterface
{
    protected $di;

    public function setDi(\Pimple\Container|null $di): void
    {
        $this->di = $di;
    }

    public function getDi(): ?\Pimple\Container
    {
        return $this->di;
    }

    public function register(\Box_App &$app): void
    {
        $app->get('/servicepterodactyl/:id', 'get_manage', ['id' => '[0-9]+'], static::class);
    }

    public function get_manage(\Box_App $app, int $id): string
    {
        $this->di['is_client_logged'];

        $api = $this->di['api_client'];
        $data = $api->order_get(['id' => $id]);
        if ($data['service_type'] !== 'servicepterodactyl') {
            throw new \FOSSBilling\Exception('Invalid order type');
        }

        $service = $api->servicepterodactyl_get(['order_id' => $id]);

        return $app->render('mod_servicepterodactyl_manage', [
            'order' => $data,
            'service' => $service,
        ]);
    }
}
