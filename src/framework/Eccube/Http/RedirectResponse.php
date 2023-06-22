<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eccube\Http;

use Symfony\Component\HttpFoundation\RedirectResponse as Adaptee;

class RedirectResponse extends Response
{
    private Adaptee $adaptee;

    public function __construct(string $url, int $status = 302, array $headers = [])
    {
        parent::__construct();
        $this->adaptee = new Adaptee($url, $status, $headers);
    }

    /**
     * @return Adaptee
     */
    public function getAdaptee(): Adaptee
    {
        return $this->adaptee;
    }
}
