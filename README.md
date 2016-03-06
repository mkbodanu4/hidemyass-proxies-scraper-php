Proxy List Scrapper
===================

Small PHP class for collecting fresh proxies from **HideMyAss**.

Usage
-------------

Include class file into your code:

> require_once "proxylist.class.php";

create an instance of a class:

> $list = new ProxyList();

and use one of functions below:

> **Get raw response from server**
> 
> $list->get_raw();
> 
> **Get parsed list**
> 
> $list->get();

Result example:

> array(1) {
> [0]=>
>  array(8) {
>    ["update"]=>
>    string(6) "20secs"
>    ["ip"]=>
>    string(14) "127.0.0.1"
>    ["port"]=>
>    string(2) "80"
>    ["country"]=>
>    string(5) "USA"
>    ["speed"]=>
>    string(2) "18"
>    ["time"]=>
>    string(2) "96"
>    ["type"]=>
>    string(4) "HTTP"
>    ["anon"]=>
>    string(8) "High +KA"
>  }
> }
  

#### Filters

You can use all filters that are available on original site. Filters can be applied only when creating new instance of class.

> $list = new ProxyList($params);

$params array example with comments:

>     $params = array(
>        array('ac', 'on'), //all countries [remove line below to exclude. don't forget to remove this line if at least one country excluded]
>        array('c[]', 'Mexico'),
>        array('c[]', 'Brazil'),
>        array('c[]', 'China'),
>        array('c[]', 'United+States'),
>        array('c[]', 'Korea,+Republic+of'),
>        array('c[]', 'Trinidad+and+Tobago'),
>        array('c[]', 'Russian+Federation'),
>        array('c[]', 'Hong+Kong'),
>        array('c[]', 'Venezuela'),
>        array('c[]', 'Netherlands'),
>        array('c[]', 'France'),
>        array('c[]', 'Indonesia'),
>        array('c[]', 'Germany'),
>        array('c[]', 'Viet+Nam'),
>        array('c[]', 'Austria'),
>        array('c[]', 'United+Kingdom'),
>        array('c[]', 'Switzerland'),
>        array('c[]', 'Puerto+Rico'),
>        array('c[]', 'Kazakhstan'),
>        array('c[]', 'Taiwan'),
>        array('c[]', 'Chile'),
>        array('c[]', 'India'),
>        array('c[]', 'Taiwan'),
>        array('c[]', 'Thailand'),
>        array('c[]', 'Europe'),
>        array('c[]', 'Turkey'),
>        array('c[]', 'Norway'),
>        array('c[]', 'Ecuador'),
>        array('c[]', 'Malaysia'),
>        array('c[]', 'Japan'),
>        array('c[]', 'Moldova,+Republic+of'),
>        array('c[]', 'New+Zealand'),
>        array('c[]', 'Nigeria'),
>        array('c[]', 'Armenia'),
>        array('c[]', 'Belarus'),
>        array('c[]', 'Macedonia'),
>        array('c[]', 'Bulgaria'),
>        array('c[]', 'Colombia'),
>        array('c[]', 'Argentina'),
>        array('c[]', 'Denmark'),
>        array('c[]', 'Croatia'),
>        array('c[]', 'Sweden'),
>        array('c[]', 'Slovakia'),
>        array('c[]', 'Panama'),
>        array('c[]', 'Israel'),
>        array('c[]', 'Egypt'),
>        array('c[]', 'Czech+Republic'),
>        array('c[]', 'Paraguay'),
>        array('c[]', 'Bangladesh'),
>        array('c[]', 'South+Africa'),
>        array('c[]', 'Kenya'),
>        array('c[]', 'Reunion'),
>        array('p', '80,22'), //exclude this ports, comma separated string, if none - empty string
>        array('pr[]', 0), //Protocol - HTTP [remove any of lines below to exclude]
>        array('pr[]', 1), //Protocol - HTTPS
>        array('pr[]', 2), //Protocol - SOCKS4/SOCKS5
>        array('a[]', 0), //Anonymity Level - None [remove any of lines below to exclude]
>        array('a[]', 1), //Anonymity Level - Low
>        array('a[]', 2), //Anonymity Level - Medium
>        array('a[]', 3), //Anonymity Level - High
>        array('a[]', 4), //Anonymity Level - High + KA
>        array('pl', 'on'), //Planetlab include: "on"/"off"
>        array('sp[]', 1), //Speed - slow [remove any of lines below to exclude]
>        array('sp[]', 2), //Speed - medium
>        array('sp[]', 3), //Speed - fast
>        array('ct[]', 1), //Connection time - slow [remove any of lines below to exclude]
>        array('ct[]', 2), //Connection time - medium
>        array('ct[]', 3), //Connection time - fast
>        array('s', 0), //Sort by: 0 - Date tested, 1 - Response time, 2 - Connection time, 3 - Country A-Z
>        array('o', 0), // Order: 0 - ASC, 1 - DESC
>        array('pp', 3), //Per page: 0 - 10, 1 - 25, 2 - 50, 3 - 100
>        array('sortBy', 'date') //Sort by: "date" - Date tested, "response_time" - Response time, "connection_time" - Connection time, "country" - Country A-Z
>        );
