<?php

return [
    'alipay' => [
        'app_id'         => '2016101300672757',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAv8AVbr0ZjgsqWe/qidha7hDutzhbrWgBbduutVdKOZJ4iwdL+1FOMgpkIwul+KKv59vOYK35rkC0ZFDxsZ36MxuIoZLY2xQmk8eXy8Ak7+//BFY/SHebyA46fm5VEFcIDNQjS+VN2Dp01n8Bfqld+zGW/PESFd3bjrAEYs02U4ns21uYPJtOrqNUldy0C9YORYd0ayNbcHRfYmqCkQ0F4kXwsz6PHm33O7Ca7Azc7LzDxslO9qt51y/Gpg0aMo+jdA/O0NyLlyGQBsvLnbLfGTTmJFyxUI+5438cpgqamrBpsS183rCqmjiml64zFghzZ6FCyT0rlIECVYYusXLoxwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAsyRD/M8J00+x2uqz74ydxp4oo1YOv0EiWLDjvTrJpEd3v3Zj6I5pn066TYP6D1Z8JV4eMi0GDYZJC++UCV3NR070CYWh9q7VKXh+t0IDv8mT6Htb93zEv+v3DFETS2IUvNXBDKThH41EK1FfQHyjjyxsWZSGI+VirkovZBIpHwv98PEqIEfwS4uRTrZwayv3ZvROcXdnthsPUrfSxYLw/mfTKkZcdnMtHefHGDw1hdwkCYUeQUCR5KGotqThretruqGmaSgK6l9gHpqpgl1G2aouNjZFClrtL80h6tCdJ1PnXCLNKIaPVcmlDBfRn47F1x1kNO6PTZEd8BGN8j8cWwIDAQABAoIBAH5AlNnbYGVYyVQsDVxKkfelB6b1w7buxLIVGKwIfowVAkQhwA/qLm5kIdD3roiYvy3mwwlByf5GIb0TwBVJ0p7q+fqr/5XHadusXEHzeIj2HBPAvPQTLubD+nzntt1t5oefbkrm+PIvsVeGJcdhEDSbblFD57XsuDt1dSjl061YqPYTt1XpIDln63HfajgbMVVaPLZGZqf6hGzaU9XW4gypDHtf4ewbjEiJXxUXIGkUj8PeniYssbTbRrP7Y+/XjFgJEI63tJN6fKcO+7OUNjGEvLVeb4c/Wp1T8xlxIQ3BKw21pjOcDx6ocYf2Fe9AMyh0tgQiV9dFuSx8Dw3HuKECgYEA+RCra8H6wgTYM+OFTvyfiJKL778Xmr6gNSVwlEWOxeANHV2t+yCvmwFwmL7/QxzscpMX5Ao8OfaBgYrPEWb1YNHRRbh1gAWSRgz7HcZ1dma6hsgH+2MLkR6er4n9AbJkl1BiMo0ND6XnmUpsehH1EJCJB/8nvQrISiCzB9hLjJ8CgYEAuCEu5oJ7FWMZlleOLb0tvFspMgVXGtDDnOEsuYWMPCAtY0d19vv9CK1iJMHkQe746U6eKwvKlzIMwahgShtmPspHGJ2shCLnv/ArmizArIYH2gLhqY2CkAfKCQojvSlpHJKh4F7CiN9lcrDYHYxehbeD/B6VpdhKw8p2eGPUWsUCgYEAv9m5Ua4ALEdzCrUtUKSDdr37kNdPpWFFIusOBwh1a7KkJ4SrqY+J9Qps4xvsoJO9BpyLgJrpvXRGWbTEwBDg3o2AeAYYbF7eR5tkK5FdlbCX6Y5Xp6qplEVT0r+l5hK2LWA749iGwRD4jzmmyXjfnrzW8RP4VkPh+Eer4FUaDN0CgYBmgxsAfO6X1qedOzvOHUAEWOCTl8OKC2aMxhTHaSHNK8D5QATeMCcNGLLGcihpyOlNw1Zt8s+k49mUS/Dn8V84YBe7DbXJj0FlbApqeLYAl1Jxvx7x7fYdyChkZf/FxfNeVAjJyRgXagCqHOkFcmwBmE1kJYb9YXEmlmbk2feVXQKBgQCMRpzuZ0d/hs4EAQzW/bPQHKKcbqLTbreh2JE4Fz/LRl1A6wVgf9WTTISYJmYRB0O181/WiTNI+vCpXyoxx0zE/BLnRea+aivAji4sykEze6TUXS8nPXh0i6Uu2THOsMYOee033rmVnkyb2zmE1wY0bX4lxRUrEw8bDyNMEKwIqA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
