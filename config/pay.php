<?php

return [
    'alipay' => [
        'app_id'         => '2016101300672757',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAv8AVbr0ZjgsqWe/qidha7hDutzhbrWgBbduutVdKOZJ4iwdL+1FOMgpkIwul+KKv59vOYK35rkC0ZFDxsZ36MxuIoZLY2xQmk8eXy8Ak7+//BFY/SHebyA46fm5VEFcIDNQjS+VN2Dp01n8Bfqld+zGW/PESFd3bjrAEYs02U4ns21uYPJtOrqNUldy0C9YORYd0ayNbcHRfYmqCkQ0F4kXwsz6PHm33O7Ca7Azc7LzDxslO9qt51y/Gpg0aMo+jdA/O0NyLlyGQBsvLnbLfGTTmJFyxUI+5438cpgqamrBpsS183rCqmjiml64zFghzZ6FCyT0rlIECVYYusXLoxwIDAQAB',
        'private_key'    => 'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDdL6gl9k547ZdzCc19yVk8cWwbXA6USkccP7XIQ/iiJu4pB0Z4rSwTdIwdIO8Ekz70md2vbRz1cv/c6/UxkndHJl3Hln+WF+EmIlfJMYbJOPC76aN1/RJdd0FRUCBKSMBbJnKOUgeIpIQKdrhZa4+unbg21lST27F48I2WSFO7i8Ryz5fQIaiSy8I+GFvmxe8w1LjMw7EN75CHz84rWiukN731LRDwMMs8BnLZuWkb82gAgUCghr74+HZEPIyCidlmJUlp3VIkOWidXQMMuv3xc7EhNI/tnpGgOGQih8eNC/4cZNvgbBaQtTHwWSSRVGVeVSDXzD/t3sKEAsdNVTizAgMBAAECggEAS9X5KvrmMOQVVyX3RLdyVxz0WfUYMpO9Cdx2MTHM35vFcF/EM7/8Krd9Cset672oiijvLySUFzvUqiRkrxhuuQBYiwP4vrd1RKPlwV+vvPI+587VcrDQSSeIR57XU2DaQuZNxKovVxRBCW1nC5Grc80zyel2mjNrB/JCOVKXEufXxQmP6UKd973Kr9Ue8HxTWSxw2/iA+ABE3VqCJ1T9UvQ01VbahXH0jTJyE0buyP4EIeuxoCNeFI959APda7qrXpQugufvlLBTOSE8a9UnZ3JC9npRFNkit5UM8LsupzFzc44dS3MgLke1Q7tdhYPjvsj5TNYkDLaa0WkJmNI+oQKBgQDxBihevyW1kXIRSwX+z9jYkSHEqUON1fMT+V6HjCRss7eXHQEtDeVLRe8WvRdB+M/dL867dq+8gmPOBZY761NElgBSoLX+7eGLf2C3mp+ZddsXOplBal7jeM0RkgUfQjZ8rr5JrB4Ojhu9tz9zUi19eiKyDsyDZkMFhoLdDTNd6wKBgQDq7fK/W3cjiQVDsfl4++kOobTj3WU9TYcVYtCG1aHtDw/Xn3X4BfjmnyD2At+ybbVErkrlGBniRHq+ZgDICgfP4f2rK2ycjZd11a42YR0QiFZVwy7IRHiU6/kuituqkQ8ftfSUmg/gHmZILyiUgOs85eXTUaE7ql9K4MqBNX42WQKBgQCcT/kIkYEcQyquKnDF8/hXY7B5waitKO9Pqe9ziyDoWpmbaFUl6hgl/EH2BkY6I+pzMZkqnOuWHx4pNBhd3d2P4pRtAgtmPNKEzORlzuLo/LVNWFSiRyEo92RPm9q0jhWWQSHp17VajTFSlbCR0t7rvLUZs11RbpXS1Iy0XeZNZwKBgDN4ChSuXz2jyUl5dmRxHDAecVjyqjlyAMRIr9K6fw1GnXvp7Zh3Bn7QIhKDsqqOqoXvgW0LiLAvvIx2IHmy6N88bazQiK0LwEEKnW5AfHOgyvljF568kYZe5Gqz9Ug7G4sg/AKKdivtvQ7XdhaC4Aapf156pc5Clzn6YaNJKuuRAoGAd2sfSzQLniYTwsQz28dyf04s9NoMYQMDHVXaBicd5ui2Tve3Fl9JdhdjqL6msMqcvIxzxYYnZcBhbbBVlm6qHwpNS3BY8gUR37q96TP/jVX6Pvg7zxRG+NlsQf9XI5SmXSlDkQ01HhqE0oahNpIZupTetL1yfmwzMVt7Wm8A8PM=',
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
