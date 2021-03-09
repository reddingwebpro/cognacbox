<head>
    <meta charset="utf-8">
    <title>Cognac Box - A Vagrant LAMP Stack for Developers that Simply Works</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900">
    <style>
        ::selection {
            background: yellow;
            color: #000;
        }
        body {
            font-family: 'Nunito', sans-serif;
            background: #eef1f5;
        }
        a {
            transition: all 225ms ease;
            text-decoration: none !important;
        }
        section, header, footer {
            position: relative;
        }
        main {
            max-width: 1600px;
            margin: 0 auto;
            overflow: hidden;
        }

        .cognac {
            box-shadow: 0 30px 100px 0 rgba(51,51,55,.15);
            background: #fff;
            border: solid 1px rgba(119, 119, 119, 0.21);
            border-radius: 4px !important;
            overflow: hidden;
            margin: 10px 0;
        }
        .add-padding {
            padding: 5% 0;
        }
        .add-padding-fat {
            padding: 15% 5%;
        }

        header {
            text-align: center;
            padding: 15px;
            background-color: #0f0a17 !important;
        }
        header h1 {
            margin: 0;
            font-weight: 800;
            letter-spacing: -0.03em;
            font-size: 75px;
            line-height: 1;
            color: #fff;
        }

        header p {
            color: #fff;
            font-size: 25px;
        }

        article h2,
        article h3,
        article h4 {
            margin-top: 0;
            font-weight: 700;
            letter-spacing: -0.03em;
        }

        article p {
            font-size: 18px;
            color: #777;
        }

        article section p:last-child {
            margin-bottom: 0;
        }

        .intro a {
            margin-top: 25px;
        }

        table {
            margin: 0 !important;
            font-size: 135%;
            box-shadow: 0 1px 5px 0 rgba(51,51,55,.15);
        }

        table, table * {
            transition: all 1s ease;
        }

        table th {
            text-align: center;
            line-height: 1;
        }

        table th span {
            font-size: 40px;
            line-height: 1;
            display: block;
        }

        table th,
        table td {
            border-left: solid 1px #dadde1;
            border-right: solid 1px #dadde1;
        }

        table td {
            font-size: 80%;
            text-align: center;
            opacity: 0.7;
        }

        table h2, table h3, table h4 {
            margin: 0;
            padding: 8px 0;
            opacity: 0.9;
        }


        .only-so-big {
            overflow: scroll;
            height: 500px;
        }

        hr {
            border-top-color: #fff;
            opacity: 0.3;
            margin: 30px 0;
        }

        footer {
            font-size: 100px;
            text-align: center;
            padding: 10% 15px;
        }

        @media (max-width: 1199px) {
            main {
                overflow: hidden;
            }
        }
    </style>
</head>
<body>
<br>
<br>
<br>
<main>
    <article>
        <header class="cognac">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1>
                            Welcome to Cognac Box
                        </h1>
                        <p>Release 3.0 - March 2021</p>
                    </div>
                </div>
            </div>
        </header>
        <section class="intro make-me-a-princess add-padding text-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Just a dead-simple local LAMP stack for developers.</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="info-blocks" id="server-stuff">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="make-me-a-princess add-padding-fat text-center">
                        <h2>Server Stuff</h2>
                        <p>Just a bunch of information about this server and what's on it.</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="make-me-a-princess">
                        <table class="table table-responsive table-striped table-hover">
                            <tr>
                                <th>
                                    <span>🤖</span>
                                    Feature
                                </th>
                                <th>
                                    <span>⏰</span>
                                    Version
                                </th>
                                <th>
                                    <span>👍</span>
                                    Working?
                                </th>
                            </tr>
                            <tr>
                                <td><strong>OS</strong></td>
                                <td>Ubuntu 18.04 LTS<br/>(Long Term Support through 2028)</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td><strong>Web Server</strong></td>
                                <td>Apache 2.4.46</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td><strong>PHP</strong></td>
                                <td>8.0.3</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td><strong>Perl</strong></td>
                                <td>5.26.1</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td><strong>Go</strong></td>
                                <td>
                                    1.16
                                </td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td><strong>Vim</strong></td>
                                <td>8.2</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td><strong>Git</strong></td>
                                <td>2.17.1</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td><strong>Imagemagick</strong></td>
                                <td>3.4.4 (6.9.7-4)</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td><strong>Curl</strong></td>
                                <td>7.58.0-2</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td><strong>Beanstalkd</strong></td>
                                <td>1.10</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td><strong>ngrok</strong></td>
                                <td>2.3.35</td>
                                <td>✅</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="info-blocks" id="php-stuff">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="make-me-a-princess add-padding-fat text-center">
                        <h2>PHP Stuff</h2>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="make-me-a-princess only-so-big">
                        <table class="table table-responsive table-striped table-hover">
                            <tr>
                                <th>
                                    <span>🤖</span>
                                    Feature
                                </th>
                                <th>
                                    <span>⏰</span>
                                    Version
                                </th>
                                <th>
                                    <span>👍</span>
                                    Working?
                                </th>
                            </tr>
                            <tr>
                                <td><strong>PHP</strong></td>
                                <td>8.0.3</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td colspan="3"><strong>Modules</strong></td>
                            </tr>
                            <?php
                            $modules = get_loaded_extensions();
                            asort($modules);
                            foreach ($modules as $extension) :
                                ?>
                                <tr>
                                    <td colspan="2"><?php echo $extension; ?></td>
                                    <td><i class="fa fa-check"></i></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-4 col-sm-6 col-sm-offset-6">
                    <div class="make-me-a-princess">
                        <table class="table table-responsive table-striped table-hover">
                            <tr>
                                <th colspan="3">
                                    <h4>Cool / Useful Stuff</h4>
                                </th>
                            </tr>
                            <tr>
                                <td>Composer (new v2.0)</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td>PHPUnit</td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td>PHP Errors turned on</td>
                                <td>✅</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="info-blocks" id="database-stuff">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="cognac add-padding-fat text-center">
                        <h2>Database Stuff</h2>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="cognac">
                        <table class="table table-responsive table-striped table-hover">
                            <tr>
                                <th colspan="3">
                                    <h3>MySQL 8.0.23</h3>
                                </th>
                            </tr>
                            <tr>
                                <td><strong>Connected?</strong></td>
                                <td>✅</td>
                            </tr>
                            <tr>
                                <td>Hostname</td>
                                <td>localhost</td>
                            </tr>
                            <tr><td>Username</td><td>root</td></tr>
                            <tr><td>Password</td><td>root</td></tr>
                            <tr><td>Database</td><td>cognacbox</td></tr>
                            <tr><td colspan="2"><a href="https://www.reddingitpro.com/2021/01/08/connect-mysql-workbench-to-vagrant-box-over-ssl/">How to connect to DB from host workstation or MySQL Workbench</td></tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-4 col-sm-6 col-sm-offset-6">
                    <div class="cognac">
                        <table class="table table-responsive table-striped table-hover">
                            <tr>
                                <th colspan="3">
                                    <h3>SQLite 3.22</h3>
                                </th>
                            </tr>
                            <tr>
                                <td><strong>Connected?</strong></td>
                                <td>
                                    <?php echo (extension_loaded('sqlite3') ? '✅' : '❌'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    $db = new SQLite3('your.db');
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <section class="info-blocks" id="caching-stuff">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="cognac add-padding-fat text-center">
                        <h2>Caching Stuff</h2>
                        <p>Performance is everything. Use these or don't, just know we have them turned on for you.</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="cognac">
                        <table class="table table-responsive table-striped table-hover">
                            <tr>
                                <th colspan="3">
                                    <h3>Redis</h3>
                                </th>
                            </tr>
                            <?php
                            $redis = new Redis();
                            $redis->connect('127.0.0.1');
                            ?>
                            <tr>
                                <td><strong>Connected?</strong></td>
                                <td>
                                    <?php try {
                                        echo($redis->ping() ? '✅' : '❌');
                                    } catch (RedisException $e) {
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Version</strong></td>
                                <td>5.2.1</td>
                            </tr>
                            <tr><td>Hostname</td><td>localhost</td></tr>
                            <tr><td>Port</td><td>6379</td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="info-blocks" id="ssh-stuff">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="cognac add-padding-fat text-center">
                        <h2>SSH Stuff</h2>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="cognac">
                        <table class="table table-responsive table-striped table-hover">
                            <tr>
                                <th>
                                    <h3>How to Connect</h3>
                                </th>
                            </tr>
                            <tr><td>Easy Way</td><td>Vagrant SSH</td></tr>
                            <tr><td colspan="2"><strong>Alternate Method</strong></td></tr>
                            <tr><td>SSH Host</td><td>127.0.0.1</td></tr>
                            <tr><td>Port</td><td>2222</td></tr>
                            <tr><td>SSH User</td><td>vagrant</td></tr>
                            <tr><td>SSH Password</td><td>vagrant</td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="info-blocks" id="email-stuff">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="cognac add-padding-fat text-center">
                        <h2>Email Stuff</h2>
                        <p>Test emails locally! This is already setup with PHP too.</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="cognac">
                        <table class="table table-responsive table-striped table-hover">
                            <tr>
                                <th>
                                    <h3>Mailhog</h3>
                                    <p>This is turned on automatically now. Just visit the URL below:</p>
                                    <br>
                                    <p><a href="http://192.168.33.10:8025">http://192.168.33.10:8025</a></p>
                                    <p>Note: Prior to CognacBox 3.0 it only captured mail sent to port 1025. As of v 3.0 it will capture all mail send from PHP 8.0 (FPM/CGI/CLI).</p>
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <hr>
    </article>
</main>
<footer>
    ReddingWebPro
</footer>
</body>
