<?php

/**
 * Demo of using class for collecting proxies list from hidemyass[dot]com
 * Copyright (C) 2016  Bohdan Manko <mailmanbo@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once 'proxylist.class.php';

$list = new ProxyList();
$obj = $list->get();

?>
<!DOCTYPE>
<html>
<head>
    <title>Proxy List</title>
    <style>
        body {
            text-align: center
        }
    </style>
</head>
<body>
    <h3>Proxy List</h3>
    <div id="proxyList">
        <br />
<?php
$proxyList = '';
foreach ($obj as $prxobj) {
    if (!empty($prxobj['ip'])) {
    $proxyList .= $prxobj['ip'] . ':' . $prxobj['port'] . '<br />';
    }
}
    echo trim($proxyList) . '<br /><br />' . 'URL: ' . $obj['listUrl'];
 ?>
    </div>
</body>
</html>
