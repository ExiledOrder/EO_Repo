<?php exit; ?>

Tue, 05 Jan 2016 01:46:35 +0000 (Severity: 0)
74.68.48.230 - http://exiledorder.com/forums/?app=core&module=system&controller=ajax&do=instantNotifications&csrfKey=5da145eaeefa3a26ef26cd9b1d38d59c&notifications=0&messages=0
Can't connect to local MySQL server through socket '/var/lib/mysql/mysql.sock' (2)
 | File                                                                       | Function                                                                      | Line No.          |
 |----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------|
 | /system/Db/Db.php                                                          | [IPS\Db\_Exception].__construct                                               | 121               |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /system/Session/Front.php                                                  | [IPS\_Db].i                                                                   | 88                |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 |                                                                            | [IPS\Session\_Front].read                                                     |                   |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /system/Session/Session.php                                                | [].session_start                                                              | 91                |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /system/Member/Member.php                                                  | [IPS\_Session].i                                                              | 129               |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /system/Dispatcher/Standard.php                                            | [IPS\_Member].loggedIn                                                        | 135               |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /system/Dispatcher/Front.php                                               | [IPS\Dispatcher\_Standard].init                                               | 161               |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /system/Dispatcher/Dispatcher.php                                          | [IPS\Dispatcher\_Front].init                                                  | 86                |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /index.php                                                                 | [IPS\_Dispatcher].i                                                           | 13                |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
------------------------------------------------------------------------
Tue, 05 Jan 2016 12:38:28 +0000 (Severity: 0)
203.97.99.8 - http://exiledorder.com/forums/index.php?/announcement/1-meeting-192016-community-wide/
Can't connect to local MySQL server through socket '/var/lib/mysql/mysql.sock' (2)
 | File                                                                       | Function                                                                      | Line No.          |
 |----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------|
 | /system/Db/Db.php                                                          | [IPS\Db\_Exception].__construct                                               | 121               |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /system/Session/Front.php                                                  | [IPS\_Db].i                                                                   | 88                |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 |                                                                            | [IPS\Session\_Front].read                                                     |                   |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /system/Session/Session.php                                                | [].session_start                                                              | 91                |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /system/Theme/Theme.php                                                    | [IPS\_Session].i                                                              | 240               |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /system/Dispatcher/Standard.php                                            | [IPS\_Theme].i                                                                | 50                |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /system/Dispatcher/Front.php                                               | [IPS\Dispatcher\_Standard].baseCss                                            | 601               |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /system/Dispatcher/Front.php                                               | [IPS\Dispatcher\_Front].baseCss                                               | 67                |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /system/Dispatcher/Dispatcher.php                                          | [IPS\Dispatcher\_Front].init                                                  | 86                |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
 | /index.php                                                                 | [IPS\_Dispatcher].i                                                           | 13                |
 '----------------------------------------------------------------------------+-------------------------------------------------------------------------------+-------------------'
------------------------------------------------------------------------
